<?php

// src/EventSubscriber/TwigGlobalSubscriber.php
namespace App\EventSubscriber;

use App\Repository\CooperativeRepository;
use App\Repository\ReglementationRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Twig\Environment;

class TwigGlobalSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private Environment $twig,
        private ReglementationRepository $reglementationRepo,
        private CooperativeRepository $cooperativeRepository
    ) {}

    public function onKernelController(ControllerEvent $event): void
    {
        // Ajouter les réglementations
        $this->twig->addGlobal('reglementations', 
            $this->reglementationRepo->findBy(['isView' => true], ['createdAt' => 'DESC'])
        );

        // Ajouter la coopérative
        $cooperatives = $this->cooperativeRepository->findAll();
        $cooperative = !empty($cooperatives) ? $cooperatives[0] : null;
        $this->twig->addGlobal('cooperative', $cooperative);
    }
    

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::CONTROLLER => 'onKernelController',
        ];
    }
}