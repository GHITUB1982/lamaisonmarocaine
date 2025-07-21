<?php

namespace App\Controller\Account;

use App\Entity\Product;


use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


final class WishlistController extends AbstractController
{
    #[Route('/account/wishlist', name: 'app_account_wishlist')]
    public function index(): Response
    {
        $user = $this->getUser();
        $wishlistItems = $user->getWishlists()->toArray();
        // dd($wishlistItems);
        return $this->render('account/wishlist/index.html.twig', [
            'wishlistItems' => $wishlistItems,
        ]);
    }

    #[Route('/account/wishlist/add/{id}', name: 'app_account_wishlist_add')]
    public function add(Product $product, EntityManagerInterface $entityManager, ProductRepository $productRepository, $id, Request $request): Response
    {
        $product = $productRepository->findOneById($id);
        // Add the product to the user's wishlist
        $user = $this->getUser();
        if ($user && !$user->getWishlists()->contains($product)) {
            $user->getWishlists()->add($product);
            
            $entityManager->flush();
        }        

        $this->addFlash('success', 'Product added to wishlist successfully!');

        return $this->redirect(url: $request->headers->get('referer') ?: 'app_account_wishlist');
    }

    #[Route('/account/wishlist/remove/{id}', name: 'app_account_wishlist_remove')]
    public function remove(Product $product, ProductRepository $productRepository, EntityManagerInterface $entityManager,$id, Request $request): Response
    {
        $product = $productRepository->findOneById($id);
        // Remove the product from the user's wishlist
        $user = $this->getUser();
        if ($user && $product) {
            $user->removeWishlist($product);
            $entityManager->flush();            
        }

        $this->addFlash('warning', 'Product removed from wishlist successfully!');

        return $this->redirect(url: $request->headers->get('referer') ?: 'app_account_wishlist');
    }
}
