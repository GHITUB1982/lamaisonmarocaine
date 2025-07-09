<?php

namespace App\Controller\Account;

use App\Form\EditAccountUserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class PasswordController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager =  $entityManager;
    }
    #[Route('/account/edit', name: 'app_account_edit')]
    public function edit(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {

        $user = $this->getUser();
        $form = $this->createForm(EditAccountUserType::class, $user, [
            'userPasswordHasher' => $userPasswordHasher,
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            $this->addFlash('success', 'Votre Mot de passe a été modifié avec succès');
        }
        return $this->render('account/password/edit.html.twig', [
            'editform' => $form->createView(),
        ]);
    }
}
