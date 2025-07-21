<?php

namespace App\Controller;

use Stripe\Stripe;
use App\Class\Cart;
use Stripe\Checkout\Session;
use App\Repository\OrderRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class PayementController extends AbstractController
{
    #[Route('/commande/paiement/{id_order}', name: 'app_payement')]
    public function index($id_order, OrderRepository $orderRepository, EntityManagerInterface $entityManager): Response
    {
        // Il est recommandé de mettre la clé API Stripe dans les variables d'environnement
        Stripe::setApiKey($_ENV['STRIPE_SECRET_KEY']);
        $YOUR_DOMAIN = $_ENV['DOMAIN'];

        $products_for_stripe = [];

        $order = $orderRepository->findOneBy([
            'id' => $id_order,
            'user' => $this->getUser(),
        ]);
        
        if (!$order) {
            return $this->redirectToRoute('app_home');
        }

        foreach ($order->getOrderDetails() as $orderDetails) {
            $products_for_stripe[] = [
                'price_data' => [
                    'currency' => 'mad', // Changé de 'eur' à 'mad' pour dirham marocain
                    'product_data' => [
                        'name' => $orderDetails->getProductName(),
                        'images' => [
                            $YOUR_DOMAIN . '/uploads/products/' . $orderDetails->getProductIllustration()
                        ],
                    ],
                    'unit_amount' => (int) round($orderDetails->getProductPriceWithTax() * 100), // Changé de *10 à *100
                ],
                'quantity' => $orderDetails->getProductQuantity(),
            ];
        }

        // Ajout du transport
        $products_for_stripe[] = [
            'price_data' => [
                'currency' => 'mad', // Changé de 'eur' à 'mad'
                'product_data' => [
                    'name' => $order->getCarrierName() ?? 'Transport',
                ],
                'unit_amount' => (int) round($order->getCarrierPrice() * 100), // Changé de *10 à *100
            ],
            'quantity' => 1,
        ];

        try {
            $checkout_session = Session::create([
                'customer_email' => $this->getUser()->getEmail(),
                'payment_method_types' => ['card'],
                'line_items' => $products_for_stripe,
                'mode' => 'payment',
                'success_url' => $YOUR_DOMAIN . '/commande/merci/{CHECKOUT_SESSION_ID}',
                'cancel_url' => $YOUR_DOMAIN . '/cart',
                'metadata' => [
                    'order_id' => $order->getId()
                ]
            ]);

            $order->setStripeSessionId($checkout_session->id);
            $entityManager->flush();

            return $this->redirect($checkout_session->url, 303);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors du paiement : '.$e->getMessage());
            return $this->redirectToRoute('app_cart');
        }
    }
        #[Route('/commande/merci/{stripe_session_id}', name: 'app_payement_success')]
        public function success($stripe_session_id, OrderRepository $orderRepository, EntityManagerInterface $entityManager, Cart $cart): Response
        {
                $order = $orderRepository->findOneBy([
                    'stripe_session_id' => $stripe_session_id, 
                    'user' => $this->getUser(),
                ]);
             if (!$order) {
            return $this->redirectToRoute('app_home');
            }

            // dd($order);

            if($order->getState() == 0){
                $order->setState(1);
                $cart->remove();
                $entityManager->flush();
            }

            
            return $this->render('payement/success.html.twig', [
                'order' => $order, 
                
            ]);
        }
    }
