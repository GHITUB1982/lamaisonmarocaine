<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\HeaderRepository;
use Mailjet\Client as MailjetClient;
use App\Repository\ProductRepository;
use App\Repository\BlogPostsRepository;
use App\Repository\ReglementationRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(HeaderRepository $headers, ProductRepository $productRepository, BlogPostsRepository $posts, ReglementationRepository $reglementation_repository): Response
    {
    $reglementations = $reglementation_repository->findBy(['isView' => true], ['createdAt' => 'DESC']);

        // $smj = new MailjetClient( $_ENV['MJ_APIKEY_PUBLIC'], $_ENV['MJ_APIKEY_PRIVATE'], true, ['version' => 'v3.1'] );

         $headers = $headers->findAll();
            $homeproducts = $productRepository->findByIsHomepage(true);
            $blogposts = $posts->findByIsHomepage(true);

        return $this->render('home/index.html.twig', [

            'headers' => $headers,
            'homeproducts' => $homeproducts,
            'blogposts' => $blogposts,
            'reglementations' => $reglementations
        ]);
    }
}
