<?php

namespace App\Controller;

use App\Entity\BlogPosts;
use App\Repository\HeaderRepository;
use App\Repository\BlogPostsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class BlogPostsController extends AbstractController
{
    #[Route('/blog/posts', name: 'app_blog_posts')]
    public function index(HeaderRepository $headers,BlogPostsRepository $posts): Response
    {
        $posts = $posts->findByIsHomepage(True);

        
    if (!$posts) {
        throw $this->createNotFoundException("Article non trouvé.");
    }

        return $this->render('blog/index.html.twig', [
            'posts' => $posts,
            'blog' => $posts,
            'headers' => $headers->findAll(), 
        ]);
    }


   #[Route('/blog/{slug}', name: 'app_blog_show')]
public function show(
    string $slug,
    BlogPostsRepository $blogPostsRepository,
    EntityManagerInterface $em
): Response {
    $post = $blogPostsRepository->findOneBySlug($slug);
    $blog = $blogPostsRepository->findOneBySlug($slug);
    $posts = $blogPostsRepository->findAll();
    
    if (!$post) {
        throw $this->createNotFoundException("Article non trouvé.");
    }

    $post->incrementViewsCount();
    $em->flush();

    return $this->render('blog/show.html.twig', [
        'post' => $post,
        'blog' => $blog, 
        'posts' => $posts
    ]);
}
}
