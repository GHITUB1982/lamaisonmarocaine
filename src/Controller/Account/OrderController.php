<?php

namespace App\Controller\Account;

use App\Repository\OrderRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class OrderController extends AbstractController
{
    #[Route('/account/order', name: 'app_account_order')]
    public function index(OrderRepository $orderRepository): Response
    {

        $orders = $orderRepository->findBy([

            'user' => $this->getUser(), 
                'state' => [1,2,3,4]
        ]);

        // dd($orders);

        return $this->render('account/order/index.html.twig', [
            'orders' => $orders
        ]);
    }
}
