<?php

namespace App\Twig;

use App\Class\Cart;
use Twig\TwigFilter;
use Twig\Extension\GlobalsInterface;
use Twig\Extension\AbstractExtension;
use App\Repository\CategoryRepository;

class AppExtensions extends AbstractExtension implements GlobalsInterface
{
    private $categoryRepository;
    private $cart;

    public function __construct(CategoryRepository $categoryRepository, Cart $cart)
    {
        $this->categoryRepository = $categoryRepository;
        $this->cart = $cart;
    }

    public function getFilters(): array
    {
        return [
            new TwigFilter('format_price', [$this, 'formatPrice']),
        ];
    }

    public function formatPrice($pricewithtax): string
    {
        if (!is_numeric($pricewithtax)) {
            return '0 Dhs';
        }
        $pricewithtax = (float)$pricewithtax;
        return number_format($pricewithtax, 2, ',', ' ') . ' Dhs';
    }

    public function getGlobals(): array
    {
        return [
            'categories' => $this->categoryRepository->findAll(),
            'fullQuantity' => $this->cart->getFullQuantity(),
        ];
    }
}