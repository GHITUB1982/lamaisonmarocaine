<?php

namespace App\Controller;

use App\Repository\ReglementationRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class BaseController extends AbstractController
{
   public function __construct(private ReglementationRepository $repo) {}

    protected function renderWithReglementations(string $view, array $parameters = []): Response
    {
        $parameters['reglementations'] ??= $this->repo->findBy(['isView' => true]);
        return $this->render($view, $parameters);
    }
}
