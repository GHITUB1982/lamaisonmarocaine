<?php

namespace App\Controller;

use App\Repository\OrderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CommandController extends AbstractController
{
    #[Route('/command/{id}', name: 'app_command')]
    public function index(OrderRepository $orderRepository, $id): Response
    {

        $order = $orderRepository->findOneBy([
            'id' => $id
        ]);
        return $this->render('command/index.html.twig', [
           'order' => $order
        ]);
    }
}
