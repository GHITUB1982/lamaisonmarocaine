<?php

// src/Controller/CurrencyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;

class CurrencyController extends AbstractController
{
    #[Route('/change-currency', name: 'app_change_currency', methods: ['POST'])]
    public function changeCurrency(Request $request): RedirectResponse
    {
        $currency = $request->request->get('currency');

        // On vérifie si c'est une devise autorisée
        if (in_array($currency, ['MAD', 'EUR'])) {
            $request->getSession()->set('currency', $currency);
        }

        // Redirection vers la page précédente
        $referer = $request->headers->get('referer') ?? $this->generateUrl('app_home');
        return $this->redirect($referer);
    }
}
