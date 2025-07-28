<?php

namespace App\Controller;

use App\Entity\BlogPosts;
use App\Repository\BlogPostsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogPostsController extends AbstractController
{
    #[Route('/blog/posts', name: 'app_blog_posts')]
    public function index(BlogPostsRepository $posts): Response
    {
        $blogposts = $posts->findAll();
dd($blogposts);

        return $this->render('home/index.html.twig', [
            'posts' => $blogposts,
        ]);
    }
}
