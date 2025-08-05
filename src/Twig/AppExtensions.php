<?php

namespace App\Twig;

use App\Class\Cart;
use Twig\TwigFilter;
use Twig\Extension\GlobalsInterface;
use Twig\Extension\AbstractExtension;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\RequestStack;

class AppExtensions extends AbstractExtension implements GlobalsInterface
{
    private $categoryRepository;
    private $cart;
    private $requestStack;

    public function __construct(CategoryRepository $categoryRepository, Cart $cart, RequestStack $requestStack)
    {
        $this->categoryRepository = $categoryRepository;
        $this->cart = $cart;
        $this->requestStack = $requestStack;
    }

    public function getFilters(): array
    {
        return [
            new TwigFilter('format_price', [$this, 'formatPrice']),
        ];
    }

    public function formatPrice($priceWithTax): string
    {
        if (!is_numeric($priceWithTax)) {
            return '0 Dhs';
        }

        $session = $this->requestStack->getSession();
        $currency = $session->get('currency', 'MAD');

        // $conversionRates = [
        //     'MAD' => 1,
        //     'EUR' => 1, // Exemple : 1 Dhs = 0.09 €
        // ];

        $symbols = [
            'MAD' => 'Dhs',
            'EUR' => '€',
        ];

        $rate = $conversionRates[$currency] ?? 1;
        $symbol = $symbols[$currency] ?? 'Dhs';

        $converted = (float)$priceWithTax * $rate;

        return number_format($converted, 2, ',', ' ') . ' ' . $symbol;
    }

    public function getGlobals(): array
    {
        return [
            'categories' => $this->categoryRepository->findAll(),
            'fullQuantity' => $this->cart->getFullQuantity(),
        ];
    }
}
