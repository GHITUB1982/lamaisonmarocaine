<?php
// src/Controller/NewsletterSubscriberController.php

namespace App\Controller;

use App\Entity\NewsletterSubscriber;
use App\Form\NewsletterSubscriberType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\Transport\TransportInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class NewsletterSubscriberController extends AbstractController
{
    private TransportInterface $mailer;
    private EntityManagerInterface $entityManager;
    public function __construct(TransportInterface $mailer, EntityManagerInterface $entityManager)
    {
        $this->mailer = $mailer;
        $this->entityManager = $entityManager;
    }
    #[Route('/newsletter', name: 'app_newsletter_subscriber')]
    public function index(Request $request): Response
    {
        $subscriber = new NewsletterSubscriber();
        $form = $this->createForm(NewsletterSubscriberType::class, $subscriber);

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $subscriber->setSubscribedAt(new \DateTimeImmutable());

            $this->entityManager->persist($subscriber);
            $this->entityManager->flush();

             $emailMessage = (new TemplatedEmail())
                ->from('no-reply@kechlotus.com')  // Adresse expéditeur stable
                ->to($subscriber->getEmail())        // Envoi au contact
                ->subject('Confirmation de souscription à la Newsletter - Kechlotus')
                ->html(
                    $this->renderView('newsletter_subscriber/newsletter_confirmation.html.twig', [
                        'contact' => $subscriber
                    ])
                )
                ->text('Merci pour votre message, nous vous répondrons rapidement.');

            $this->mailer->send($emailMessage);
            $this->addFlash('success', 'Merci pour votre inscription !');
            return $this->redirectToRoute('app_newsletter_subscriber'); // redirige vers la même page
        }

        return $this->render('newsletter_subscriber/index.html.twig', [
            'pageForm' => $form->createView(),
        ]);
    }
}
