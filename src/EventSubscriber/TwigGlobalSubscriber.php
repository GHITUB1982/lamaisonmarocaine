<?php

// src/EventSubscriber/TwigGlobalSubscriber.php
namespace App\EventSubscriber;

use App\Repository\ReglementationRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Twig\Environment;

class TwigGlobalSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private Environment $twig,
        private ReglementationRepository $reglementationRepo
    ) {}

    public static function getSubscribedEvents(): array
    {
        return ['kernel.controller' => 'onKernelController'];
    }

    public function onKernelController(): void
    {
        $this->twig->addGlobal('reglementations', 
            $this->reglementationRepo->findBy(['isView' => true], ['createdAt' => 'DESC'])
        );
    }
}