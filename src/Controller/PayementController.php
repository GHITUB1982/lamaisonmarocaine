<?php

namespace App\Controller;

use Stripe\Stripe;
use App\Class\Cart;
use App\Entity\Order;
use Stripe\Checkout\Session;
use App\Repository\OrderRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Mailer\Transport\TransportInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class PayementController extends AbstractController
{
    private $requestStack;

    public function __construct(
        RequestStack $requestStack,
        private TransportInterface $mailer,
        private LoggerInterface $logger,
        private EntityManagerInterface $entityManager,
        private UrlGeneratorInterface $urlGenerator
        )
    {
        $this->requestStack = $requestStack;
        
    }
      
    #[Route('/commande/paiement/{id_order}', name: 'app_payement')]
    public function index($id_order, OrderRepository $orderRepository, EntityManagerInterface $entityManager): Response
    {
        Stripe::setApiKey($_ENV['STRIPE_SECRET_KEY']);
        $YOUR_DOMAIN = $_ENV['DOMAIN'];

        // Récupérer la devise depuis la session, par défaut 'MAD'
        $session = $this->requestStack->getSession();
        $currency = $session->get('currency', 'MAD');

        // Normaliser en minuscule pour Stripe
        $currencyStripe = strtolower($currency);

        // Taux de conversion pour passer de MAD aux autres devises (exemple)
        $conversionRates = [
            'MAD' => 1,
            'EUR' => 0.1,
        ];

        $rateConversion = $conversionRates[$currency] ?? 1;

        $products_for_stripe = [];

        $order = $orderRepository->findOneBy([
            'id' => $id_order,
            'user' => $this->getUser(),
        ]);

        if (!$order) {
            return $this->redirectToRoute('app_home');
        }

        foreach ($order->getOrderDetails() as $orderDetails) {
            $priceWithTax = $orderDetails->getProductPriceWithTax() * $rateConversion;
            $products_for_stripe[] = [
                'price_data' => [
                    'currency' => $currencyStripe,
                    'product_data' => [
                        'name' => $orderDetails->getProductName(),
                        'images' => [
                            $YOUR_DOMAIN . '/uploads/products/' . $orderDetails->getProductIllustration()
                        ],
                    ],
                    'unit_amount' => (int) round($priceWithTax * 100),
                ],
                'quantity' => $orderDetails->getProductQuantity(),
            ];
        }

        // Ajout du transporteur avec conversion
        $carrierPriceConverted = $order->getCarrierPrice() * $rateConversion;
        $products_for_stripe[] = [
            'price_data' => [
                'currency' => $currencyStripe,
                'product_data' => [
                    'name' => $order->getCarrierName() ?? 'Transport',
                ],
                'unit_amount' => (int) round($carrierPriceConverted * 100),
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
                    'order_id' => $order->getId(),
                    'currency' => $currency,
                ],
            ]);

            $order->setStripeSessionId($checkout_session->id);
            $entityManager->flush();

            return $this->redirect($checkout_session->url, 303);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors du paiement : ' . $e->getMessage());
            return $this->redirectToRoute('app_cart');
        }
    }

    #[Route('/commande/merci/{stripe_session_id}', name: 'app_payement_success')]
    public function success($stripe_session_id, OrderRepository $orderRepository, EntityManagerInterface $entityManager, Cart $cart, MailerInterface $mailer): Response
    {
        $order = $orderRepository->findOneBy([
            'stripe_session_id' => $stripe_session_id,
            'user' => $this->getUser(),
        ]);

        if (!$order) {
            return $this->redirectToRoute('app_home');
        }

        if ($order->getState() == 0) {
            $order->setState(1);
            $cart->remove();
            $entityManager->flush();

            // Envoyer un email de confirmation
            if ($this->getUser()) {
                $user = $this->getUser();
            } else {
                $user = $order->getUser();
            }
           $emailMessage = (new TemplatedEmail())
                ->from('no-reply@kechlotus.com')  // Adresse expéditeur stable
                ->to($user->getEmail())        // Envoi au contact
                ->subject('Confirmation de votre commande - Kechlotus')
                ->html(
                    $this->renderView('email/order_confirmation.html.twig', [
                        'contact' => $user
                    ])
                )
                ->text('Merci pour votre commande, nous donnerons suite dans les plus brefs délais.');

            $this->mailer->send($emailMessage);

        }

        return $this->render('payement/success.html.twig', [
            'order' => $order,
        ]);
    }
   
}
