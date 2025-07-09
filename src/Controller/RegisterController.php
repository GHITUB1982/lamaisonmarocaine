<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\RegisterUserType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

final class RegisterController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route('/register', name: 'app_register')]
    public function index(Request $request): Response
    {

        $user = new User();
        $form = $this->createForm(RegisterUserType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
           
            $this->entityManager->persist($user);
            $this->entityManager->flush();
            $this->addFlash('success', 'Votre compte a été créé avec succès');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('register/index.html.twig',[
            'form' => $form->createView(),
        ]);
    }
}
