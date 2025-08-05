<?php

namespace App\Controller;

use App\Repository\ReglementationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReglementationController extends AbstractController
{
    #[Route('/reglementations', name: 'app_reglementations_index')]
    public function index(ReglementationRepository $repository): Response
    {
        $reglementations = $repository->findBy(
            ['isView' => true],
            ['created_at' => 'DESC']  // Notez que j'utilise created_at au lieu de createdAt
        );

        return $this->render('reglementation/index.html.twig', [
            'reglementations' => $reglementations
        ]);
    }

    #[Route('/reglementation/{route}', name: 'app_reglementation_show')]
    public function show(string $route, ReglementationRepository $repository): Response
    {
        // Récupère toutes les réglementations visibles triées
        $reglementations = $repository->findBy(['isView' => true], ['createdAt' => 'ASC']);

        // Trouve la position de la réglementation courante
        $currentKey = null;
        foreach ($reglementations as $key => $reglement) {
            if ($reglement->getRoute() === $route) {
                $currentKey = $key;
                break;
            }
        }

        if ($currentKey === null) {
            throw $this->createNotFoundException('Réglementation non trouvée');
        }

        return $this->render('reglementation/show.html.twig', [
            'reglementation' => $reglementations[$currentKey],
            'reglementations' => $reglementations, // Tout le tableau
            'currentKey' => $currentKey // Clé courante
        ]);
    }
}
