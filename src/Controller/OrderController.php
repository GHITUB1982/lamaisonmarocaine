<?php

namespace App\Controller;

use App\Class\Cart;
use App\Entity\Order;
use App\Form\OrderType;
use App\Entity\OrderDetails;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class OrderController extends AbstractController
{
    #[Route('/commande/livraison', name: 'app_order')]
    public function index(): Response
    {
        $addresses = $this->getUser()->getAddresses();
        
        if (count($addresses) == 0) {
            $this->addFlash('warning', 'Vous devez ajouter une adresse de livraison avant de passer une commande.');
            return $this->redirectToRoute('app_address');
        }

        $form = $this->createForm(OrderType::class, null, [
            'user' => $this->getUser(),
            'addresses' => $addresses,
            'action' => $this->generateUrl('app_order_summary')
        ]);

        return $this->render('order/index.html.twig', [
            'deliveryForm' => $form->createView(),
        ]);
    }

    #[Route('/commande/summary', name: 'app_order_summary')]
    public function add(Request $request, Cart $cart, EntityManagerInterface $entityManager): Response
    {
        $products = $cart->getCart();
        if ($request->getMethod() != 'POST') {
            return $this->redirectToRoute('app_cart');
        }

        $form = $this->createForm(OrderType::class, null, [
            'user' => $this->getUser(),
            'addresses' => $this->getUser()->getAddresses(),
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $objectAddress = $form->get('addresses')->getData();

            $address = $objectAddress->getFirstname() . ' ' . $objectAddress->getLastname() . ' ' .
                $objectAddress->getAddress() . ' ' .
                $objectAddress->getPostal() . ' ' .
                $objectAddress->getCity() . ' ' .
                $objectAddress->getCountry() . ' ' .
                $objectAddress->getPhone();

            // Création de la commande
            $order = new Order();
            $order->setUser($this->getUser());
            $order->setState(0);
            $order->setCreatedAt(new \DateTimeImmutable());
            $order->setCarrierName($form->get('carrier')->getData()->getName());
            $order->setCarrierPrice($form->get('carrier')->getData()->getPrice());
            $order->setDelivery($address);

            $entityManager->persist($order);


            $totalTva = 0; // Initialisation de la variable

            // Création des détails de commande pour chaque produit
            foreach ($products as $product) {
                $orderDetail = new OrderDetails();
                $totalTva += ($product['product']->getPrice() * $product['quantity'] * $product['product']->getTva() / 100);

                $orderDetail->setMyOrder($order);
                $orderDetail->setProductQuantity($product['quantity']);
                $orderDetail->setProductName($product['product']->getName());
                $orderDetail->setProductIllustration($product['product']->getIllustration());
                $orderDetail->setProductPrice($product['product']->getPrice());
                $orderDetail->setProductTva($product['product']->getTva());
                $totalTva = $order->getTotalTva();

                $entityManager->persist($orderDetail);
            }

            $entityManager->flush();

            return $this->render('order/summary.html.twig', [
                'choices' => $form->getData(),
                'cart' => $products,
                'order' => $order,
            ]);
        }

        return $this->redirectToRoute('app_cart');
    }
}
