<?php

namespace App\Controller;

use App\Repository\OrderRepository;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class PayementController extends AbstractController
{
    #[Route('/commande/paiement/{id_order}', name: 'app_payement')]
    public function index($id_order, OrderRepository $orderRepository): Response
    {
        // Il est recommandé de mettre la clé API Stripe dans les variables d'environnement
        Stripe::setApiKey($_ENV['STRIPE_SECRET_KEY']);
        $YOUR_DOMAIN = $_ENV['DOMAIN'];

        $products_for_stripe = [];

        // $order = $orderRepository->find($id_order);
        $order = $orderRepository->findOneBy([
            'id' => $id_order,
            'user' => $this->getUser(),
        ]);
        
        // dd($order);
        if (!$order) {
            return $this->redirectToRoute('app_home');
        }

        foreach ($order->getOrderDetails() as $orderDetails) {
            $products_for_stripe[] = [
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => $orderDetails->getProductName(),
                        'images' => [
                            $YOUR_DOMAIN . '/uploads/products/' . $orderDetails->getProductIllustration()
                        ],
                    ],
                    'unit_amount' => (int) round($orderDetails->getProductPriceWithTax() * 10), // Correction : multiplier par 100 pour les cents
                ],
                'quantity' => $orderDetails->getProductQuantity(),
            ];
        }

        // Ajout du transport
        $products_for_stripe[] = [
            'price_data' => [
                'currency' => 'eur',
                'product_data' => [
                    'name' => $order->getCarrierName() ?? 'Transport', // Utilisation du nom du transporteur si disponible
                ],
                'unit_amount' => (int) round($order->getCarrierPrice() * 10),
            ],
            'quantity' => 1,
        ];

        // Ajout de la TVA
        $products_for_stripe[] = [
            'price_data' => [
                'currency' => 'eur',
                'product_data' => [
                    'name' => 'TVA',
                ],
                'unit_amount' => (int) round($order->getTotalTVA() * 10),
            ],
            'quantity' => 1,
        ];

        try {
            $session = Session::create([
                'customer_email' => $this->getUser()->getEmail(),
                'payment_method_types' => ['card'],
                'line_items' => $products_for_stripe,
                'mode' => 'payment',
                'success_url' => $YOUR_DOMAIN . '/commande/merci/{CHECKOUT_SESSION_ID}', // URL plus appropriée
                'cancel_url' => $YOUR_DOMAIN . '/cart',
                'metadata' => [
                    'order_id' => $order->getId() // Ajout de metadata pour identifier la commande
                ]
            ]);
            
            return $this->redirect($session->url, 303);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors du paiement : '.$e->getMessage());
            return $this->redirectToRoute('app_cart');
        }
    }
}