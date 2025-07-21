<?php

// src/Controller/EmailController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;  // ← Correct import
use Symfony\Component\Routing\Attribute\Route;

class EmailController extends AbstractController
{
    #[Route('/test-email', name: 'app_test_email')]
    public function sendTestEmail(MailerInterface $mailer): Response
    {
        $email = (new Email())
            ->from('zougarhi.adil@gmail.com')
            ->to('adil.zougarhi@gmail.com')
            ->subject('Test from Symfony')
            ->text('This is a test email');

        $mailer->send($email);

        return new Response('Email sent successfully!');
    }
}