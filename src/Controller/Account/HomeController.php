<?php

namespace App\Controller\Account;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class HomeController extends AbstractController
{
    #[Route('/account', name: 'app_account')]
        // #[Route('/admin', name: 'app_account')]

    public function index(): Response
    {
        return $this->render('account/index.html.twig');
    }
}
