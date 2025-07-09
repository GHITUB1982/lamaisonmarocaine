<?php

namespace App\Form;

use App\Entity\user;
use App\Entity\Address;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AddressUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => 'Prénom', 
                'attr' => [
                    'placeholder' => 'Entrez votre prénom',
                    'class' => 'form-control'
                ]
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Nom', 
                'attr' => [
                    'placeholder' => 'Entrez votre nom',
                    'class' => 'form-control'
                ]
            ])
            ->add('address', TextareaType::class, [
                'label' => 'Addresse', 
                'attr' => [
                    'placeholder' => 'Entrez votre addresse',
                    'class' => 'form-control'
                ]
            ])
            ->add('postal', TextType::class, [
                'label' => 'Code Postal', 
                'attr' => [
                    'placeholder' => 'Entrez votre code postal',
                    'class' => 'form-control'
                ]
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville', 
                'attr' => [
                    'placeholder' => 'Entrez votre ville',
                    'class' => 'form-control'
                ]
            ])
            ->add('country', CountryType::class, [
                'label' => 'Pays', 
                'attr' => [
                    'placeholder' => 'Entrez votre pays',
                    'class' => 'form-control'
                ]
            ])
            ->add('phone', TextType::class, [
                'label' => 'Téléphone', 
                'attr' => [
                    'placeholder' => 'Entrez votre numéro de téléphone',
                    'class' => 'form-control'
                ]
            ])
            // ->add('user', EntityType::class, [
            //     'class' => user::class,
            //     'choice_label' => 'email',
            //     'label' => 'Utilisateur',
            //     'attr' => [
            //         'class' => 'form-control'
            //     ]
            // ])
          ->add('submit', SubmitType::class, [
                'label' => 'Enregistrer l\'addresse',
                'attr' => [
                    'class' => 'btn btn-primary mt-3'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Address::class,
        ]);
    }
}
