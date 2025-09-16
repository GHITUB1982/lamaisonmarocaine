<?php

namespace App\Controller;

use App\Entity\Cooperative;
use App\Form\Cooperative1Type;
use App\Repository\CooperativeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/cooperative')]
final class CooperativeController extends AbstractController
{
        private CooperativeRepository $cooperativeRepository;

    public function __construct(CooperativeRepository $cooperativeRepository)
    {
        $this->cooperativeRepository = $cooperativeRepository;
    }
    #[Route(name: 'app_cooperative_index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('cooperative/index.html.twig', [
            'cooperatives' => $this->cooperativeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_cooperative_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $cooperative = new Cooperative();
        $form = $this->createForm(Cooperative1Type::class, $cooperative);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($cooperative);
            $entityManager->flush();

            return $this->redirectToRoute('app_cooperative_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('cooperative/new.html.twig', [
            'cooperative' => $cooperative,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_cooperative_show', methods: ['GET'])]
    public function show(Cooperative $cooperative): Response
    {
        return $this->render('cooperative/show.html.twig', [
            'cooperative' => $cooperative,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_cooperative_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Cooperative $cooperative, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Cooperative1Type::class, $cooperative);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_cooperative_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('cooperative/edit.html.twig', [
            'cooperative' => $cooperative,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_cooperative_delete', methods: ['POST'])]
    public function delete(Request $request, Cooperative $cooperative, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cooperative->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($cooperative);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_cooperative_index', [], Response::HTTP_SEE_OTHER);
    }
}
