<?php

namespace App\DataFixtures;

use App\Entity\Reglementation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ReglementationFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $reglementations = [
            [
                'title' => 'Conditions Générales de Vente',
                'route' => 'cgv',
                'content' => '<h2>Article 1 - Objet</h2><p>Les présentes conditions générales...</p>',
                'isView' => true
            ],
            [
                'title' => 'Mentions Légales',
                'route' => 'mentions-legales',
                'content' => '<h2>Éditeur du site</h2><p>Nom de l\'entreprise...</p>',
                'isView' => true
            ],
            [
                'title' => 'Politique de Confidentialité',
                'route' => 'confidentialite',
                'content' => '<h2>Données personnelles</h2><p>Nous nous engageons à protéger...</p>',
                'isView' => true
            ],
            [
                'title' => 'FAQ',
                'route' => 'faq',
                'content' => '<h2>Questions fréquentes</h2><p>Comment passer commande...</p>',
                'isView' => true
            ]
        ];

        foreach ($reglementations as $reglementationData) {
            $reglementation = new Reglementation();
            $reglementation->setTitle($reglementationData['title']);
            $reglementation->setRoute($reglementationData['route']);
            $reglementation->setContent($reglementationData['content']);
            $reglementation->setIsView($reglementationData['isView']);
            $reglementation->setCreatedAt(new \DateTime());
            $reglementation->setUpdatedAT(new \DateTime());
            
            $manager->persist($reglementation);
        }

        $manager->flush();
    }
}