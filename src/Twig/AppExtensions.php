<?php

namespace App\Twig;

use App\Class\Cart;
use App\Repository\CooperativeRepository;
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
    private $cooperativeRepository;

    public function __construct(
        CategoryRepository $categoryRepository, 
        Cart $cart, 
        RequestStack $requestStack,
        CooperativeRepository $cooperativeRepository
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->cart = $cart;
        $this->requestStack = $requestStack;
        $this->cooperativeRepository = $cooperativeRepository;
    }

    public function getFilters(): array
    {
        return [
            new TwigFilter('format_price', [$this, 'formatPrice']),
            new TwigFilter('replace_variables', [$this, 'replaceVariables']), // Nouveau filtre
        ];
    }

    public function formatPrice($priceWithTax): string
    {
        if (!is_numeric($priceWithTax)) {
            return '0 Dhs';
        }

        $session = $this->requestStack->getSession();
        $currency = $session->get('currency', 'MAD');

        $symbols = [
            'MAD' => 'Dhs',
            'EUR' => '€',
        ];

        $symbol = $symbols[$currency] ?? 'Dhs';

        return number_format((float)$priceWithTax, 2, ',', ' ') . ' ' . $symbol;
    }

    public function replaceVariables($content): string
    {
        $cooperatives = $this->cooperativeRepository->findAll();
        $cooperative = !empty($cooperatives) ? $cooperatives[0] : null;
        
        if (!$cooperative) {
            return $content;
        }
        
        $replacements = [
            '[name]' => $cooperative->getName(),
            '[address]' => $cooperative->getAddress(),
            '[email]' => $cooperative->getEmail(),
            '[description]' => $cooperative->getDescription(),
            '[ville]' => $cooperative->getVille(),
            '[region]' => $cooperative->getRegion(),
            '[postal]' => $cooperative->getPostal(),
            '[country]' => $cooperative->getCountry(),
            '[phone1]' => $cooperative->getPhone1(),
            '[phone2]' => $cooperative->getPhone2(),
            '[website]' => $cooperative->getWebsite(),
            '[facebook]' => $cooperative->getFacebook(),
            '[instagram]' => $cooperative->getInstagram(),
            '[twitter]' => $cooperative->getTwitter(),
            '[linkedin]' => $cooperative->getLinkedin(),
            '[youtube]' => $cooperative->getYoutube(),
            '[patente]' => $cooperative->getPatente(),
            '[register_commerce]' => $cooperative->getRegisterCommerce(),
            '[identifiant_fiscal]' => $cooperative->getIdentifiantFiscal(),
            '[forme_juridique]' => $cooperative->getFormeJuridique(),
            '[cnss]' => $cooperative->getCnss(),
            '[date_creation]' => $cooperative->getDateCreation() ? $cooperative->getDateCreation()->format('d/m/Y') : '',
            '[secteur_activite]' => $cooperative->getSecteurActivite(),
            '[nombre_membres]' => $cooperative->getNombreMembres(),
            '[representant_legal]' => $cooperative->getRepresentantLegal(),
            '[latitude]' => $cooperative->getLatitude(),
            '[longitude]' => $cooperative->getLongitude(),
            '[horaire]' => $cooperative->getHoraire(),
            '[created_at]' => $cooperative->getCreatedAt() ? $cooperative->getCreatedAt()->format('d/m/Y') : '',
            '[updated_at]' => $cooperative->getUpdatedAt() ? $cooperative->getUpdatedAt()->format('d/m/Y') : '',
        ];
        
        return str_replace(array_keys($replacements), array_values($replacements), $content);
    }

    public function getGlobals(): array
    {
        return [
            'categories' => $this->categoryRepository->findAll(),
            'fullQuantity' => $this->cart->getFullQuantity(),
        ];
    }
}