<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CategoryController extends AbstractController
{
    #[Route('/categorie', name: 'app_category')]
    public function index(CategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findAll();
           
            //   dd($categories);
              return $this->render('category/index.html.twig', [
            'categories' => $categories,
        ]);
    }


    #[Route('/categorie/{slug}', name: 'show_category')]
    public function Show($slug, CategoryRepository $categoryRepository): Response
    {
        $category = $categoryRepository->findOneBySlug($slug);
           
            //   dd($category);
              return $this->render('category/show.html.twig', [
            'category' => $category,
        ]);
    }
}
