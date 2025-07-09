<?php

namespace App\Controller\Account;

use App\Class\Cart;
use App\Entity\Address;
use App\Form\AddressUserType;
use App\Repository\AddressRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AddressController extends AbstractController
{
    private  $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        // Constructor can be used for dependency injection if needed
        $this->entityManager = $entityManager;
    }
    #[Route('/account/addresses', name: 'app_address')]
    public function index(): Response
    {
        return $this->render('account/address/index.html.twig');
    }

    // Dans cette méthode, nous allons créer un formulaire poour ajouter une addresse,
    // et aussi pour modifier une addresse si l'id est fourni.
    #[Route('/account/addresses/ajouter/{id}', name: 'app_account_address_form', defaults: ['id' => null])]
    public function Form(Request $request, $id, AddressRepository $addressRepository, Cart $cart): Response
    {
        if ($id) {
            $address_user = $addressRepository->find($id);
            if (!$address_user || $address_user->getUser() !== $this->getUser()) {
                $this->addFlash('danger', 'Addresse non trouvée ou vous n\'êtes pas autorisé à la modifier.');
                return $this->redirectToRoute('app_address');
            }
        } else {
            $address_user = new Address();
            $address_user->setUser($this->getUser());
        }
        //Create a new address entity
        //Create a new Address object
        //Get the current user
        // and set the user to the address
        // Create a form for adding an address
        $form =  $this->createForm(AddressUserType::class, $address_user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($form->getData());
            $this->entityManager->flush();
            $this->addFlash('success', 'Votre addresse a été ajoutée avec succès');

            if($cart->getFullQuantity() > 0){

                return $this->redirectToRoute('app_order');

            }
            else {
                return $this->redirectToRoute('app_address');
            }
        }

        return $this->render('account/address/form.html.twig', [
            'addressform' => $form->createView(),
        ]);
    }

    #[Route('/account/addresses/delete/{id}', name: 'app_account_address_delete')]
    public function delete($id, AddressRepository $addressRepository): Response
    {
        $address_user = $addressRepository->find($id);
        if (!$address_user || $address_user->getUser() !== $this->getUser()) {
            $this->addFlash('danger', 'Addresse ne appartient pas à votre compte pour la supprimer');
            return $this->redirectToRoute('app_address');
        } else {
            $this->entityManager->remove($address_user);
            $this->entityManager->flush();
            $this->addFlash('success', 'Votre addresse a été supprimée avec succès!');
            return $this->redirectToRoute('app_address');
        }
        // $entityManager->remove($address_user);
    }
}
