<?php

namespace App\Controller;

use App\Class\Cart;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

final class CartController extends AbstractController
{
#[Route('/cart', name: 'app_cart')]
public function index(Cart $cart): Response
{
    $user = $this->getUser();
    $wishlistItems = [];

    if ($user) {
        $wishlistItems = $user->getWishlists()->toArray();
    }

    return $this->render('cart/index.html.twig', [
        'cart' => $cart->getCart(),
        'wishlistItems' => $wishlistItems
    ]);
}

    #[Route('/cart/add/{id}', name: 'app_cart_add')]
    public function add($id, Cart $cart, ProductRepository $productRepository, Request $request): Response
    {
        // On récupère le produit en fonction de l'ID
        $product = $productRepository->find($id);

        // dd($request->headers->get('referer'));
        $cart->add($product);

        // $cart->add($product);
        // dd('Produit ajouté au panier');

        $this->addFlash('success', 'Le produit a été ajouté au panier');
        // return $this->redirectToRoute('app_product', [
        //     'slug' => $product->getSlug(),
        //     'cart' => $cart->getCart(),
        // ]);

        // On redirige vers la page précédente
        return $this->redirect($request->headers->get('referer') ?: $this->generateUrl('app_home'));
    }

#[Route('/cart/supprimer/{id}', name: 'app_cart_remove')]
public function remove(Cart $cart, ProductRepository $productRepository, int $id): Response
{
    $product = $productRepository->find($id);

    if (!$product) {
        $this->addFlash('error', 'Le produit est introuvable.');
        return $this->redirectToRoute('app_cart');
    }

    $cart->removeProduct($product->getId());

    $this->addFlash('success', 'Le produit a été retiré du panier avec succès.');

    return $this->redirectToRoute('app_cart');
}



    #[Route('/cart/vider', name: 'app_cart_clear')]
    public function clear(Cart $cart): Response
    {
        $cart->remove();
        $this->addFlash('warning', 'Votre panier a été vidé avec succès');
        return $this->redirectToRoute('app_cart');
    }



    #[Route('/cart/decrease/{id}', name: 'app_cart_decrease')]
    public function delete($id, Cart $cart, Request $request, ProductRepository $productRepository): Response
    {
        $product = $productRepository->find($id);
        $cart->decrease($product);

        $this->addFlash('danger', 'La quantité du produit a été diminuée dans le panier');

        return $this->redirect($request->headers->get('referer') ?: $this->generateUrl('app_home'));
    }
}
