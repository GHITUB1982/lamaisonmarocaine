<?php 


namespace App\Controller;

use App\Service\PhpMailerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MailController extends AbstractController
{
    #[Route('/send-test-email')]
    public function sendTestEmail(PhpMailerService $mailer): Response
    {
        $htmlContent = $this->renderView('password\reset_password.html.twig', [
            'message' => 'Ceci est un test'
        ]);

        $mailer->sendEmail(
            'destinataire@example.com',
            'Sujet du test',
            $htmlContent
        );

        return new Response('Email envoyé avec succès!');
    }
}