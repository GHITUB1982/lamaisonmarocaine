<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\NewsletterSubscriber;
use App\Repository\HeaderRepository;
use Mailjet\Client as MailjetClient;
use App\Repository\ProductRepository;
use App\Form\NewsletterSubscriberType;
use App\Repository\BlogPostsRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ReglementationRepository;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Mailer\Transport\TransportInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class HomeController extends AbstractController
{

    private TransportInterface $mailer;
    private EntityManagerInterface $entityManager;
    public function __construct(TransportInterface $mailer, EntityManagerInterface $entityManager)
    {
        $this->mailer = $mailer;
        $this->entityManager = $entityManager;
    }
    #[Route('/', name: 'app_home')]
    public function index(
        HeaderRepository $headers,
        ProductRepository $productRepository,
        BlogPostsRepository $posts,
        ReglementationRepository $reglementation_repository,
        Request $request,
        EntityManagerInterface $em
    ): Response {
        $reglementations = $reglementation_repository->findBy(['isView' => true], ['createdAt' => 'DESC']);

        // $smj = new MailjetClient( $_ENV['MJ_APIKEY_PUBLIC'], $_ENV['MJ_APIKEY_PRIVATE'], true, ['version' => 'v3.1'] );

        $headers = $headers->findBy(['is_home' => true]);
        $homeproducts = $productRepository->findByIsHomepage(true);
        $blogposts = $posts->findByIsHomepage(true);


        $subscriber = new NewsletterSubscriber();
        $form = $this->createForm(NewsletterSubscriberType::class, $subscriber);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $subscriber->setSubscribedAt(new \DateTimeImmutable());
            $em->persist($subscriber);
            $em->flush();
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
            return $this->redirectToRoute('app_home');
        }

        return $this->render('home/index.html.twig', [

            'headers' => $headers,
            'homeproducts' => $homeproducts,
            'blogposts' => $blogposts,
            'reglementations' => $reglementations,
            'footer_form' => $form->createView(),


        ]);
    }
}
