<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mailer\Transport\TransportInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    private TransportInterface $mailer;
    private EntityManagerInterface $entityManager;

    public function __construct(TransportInterface $mailer, EntityManagerInterface $entityManager)
    {
        $this->mailer = $mailer;
        $this->entityManager = $entityManager;
    }

    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request): Response
    {
        $contact = new Contact();
        $contact->setCreatedAt(new \DateTimeImmutable());

        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Persister en base d'abord
            $this->entityManager->persist($contact);
            $this->entityManager->flush();

            // Préparation du mail
            $emailMessage = (new TemplatedEmail())
                ->from('no-reply@kechlotus.com')  // Adresse expéditeur stable
                ->to($contact->getEmail())        // Envoi au contact
                ->subject('Confirmation de réception de votre message - Kechlotus')
                ->html(
                    $this->renderView('contact/contact_confirmation.html.twig', [
                        'contact' => $contact
                    ])
                )
                ->text('Merci pour votre message, nous vous répondrons rapidement.');

            $this->mailer->send($emailMessage);

            $this->addFlash('success', 'Votre message a été envoyé avec succès.');
            return $this->redirectToRoute('app_contact');
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
