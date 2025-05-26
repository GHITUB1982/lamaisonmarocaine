<?php

namespace App\Class;

use Symfony\Component\HttpFoundation\RequestStack;

class Cart
{
    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    private function getSession()
    {
        $session = $this->requestStack->getSession();
        if (!$session->isStarted()) {
            $session->start();
        }
        return $session;
    }

    public function add($product): void
    {
        $cart = $this->getSession()->get('cart', []);
        $id = $product->getId();

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'product' => $product,
                'quantity' => 1
            ];
        }

        $this->getSession()->set('cart', $cart);
    }

    public function remove(): void
    {
        $this->getSession()->remove('cart');
    }

    public function getCart(): array
    {
        return $this->getSession()->get('cart', []);
    }

    public function decrease($product): void
    {
        $cart = $this->getSession()->get('cart', []);
        $id = $product->getId();

        if (isset($cart[$id])) {
            if ($cart[$id]['quantity'] > 1) {
                $cart[$id]['quantity']--;
            } else {
                unset($cart[$id]);
            }
            $this->getSession()->set('cart', $cart);
        }
    }

    public function getFullQuantity(): int
    {
        $cart = $this->getSession()->get('cart', []);
        $quantity = 0;

        foreach ($cart as $item) {
            $quantity += $item['quantity'];
        }

        return $quantity;
    }
}