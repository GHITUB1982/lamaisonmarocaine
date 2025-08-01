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
  #[Route('/blog/posts/{page}', name: 'app_blog_posts', requirements: ['page' => '\d+'], defaults: ['page' => 1])]
public function index(BlogPostsRepository $postsRepository, int $page = 1): Response
{
    $limit = 9; // Articles par page
    $paginatedData = $postsRepository->getPaginatedPosts($page, $limit);
    
    $totalPages = ceil($paginatedData['total'] / $limit);

    return $this->render('blog/index.html.twig', [
        'posts' => $paginatedData['items'],
        'current_page' => $page,
        'total_pages' => $totalPages
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
