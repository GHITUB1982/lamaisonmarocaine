<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvents;

class EditAccountUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('email')
            // ->add('roles')
            // ->add('password')
        //     ->add('firstname')
        //     ->add('lastname')
        // 
        ->add('actual_password', PasswordType::class, [
            'label' => 'Mot de passe Actuel', 
            'attr' => [
                'placeholder' => 'Entrer votre mot de passe actuel'
            ],
            'mapped' => false,

        ])
        ->add( 'plainPassword', RepeatedType::class, [
            'type' => PasswordType::class,
            'first_options' => [
                'label' => 'Nouveau Mot de passe', 
                'attr' => [
                    'placeholder' => 'Entrer votre nouveau mot de passe'
                ],
                'hash_property_path' => 'password',
                'mapped' => false,
            ],
            'second_options' => [
                'label' => 'Confirmer le nouveau mot de passe', 
                'attr' => [
                    'placeholder' => 'Confirmer votre nouveau mot de passe'
                ]
            ],
            'mapped' => false,
        ])
        ->add('submit', SubmitType::class, [
            'label' => 'Modifier le mot de passe',

            'attr' => [
                'class' => 'btn btn-primary'
            ]
        ])
        
        ->addEventListener(FormEvents::SUBMIT, function(FormEvent $formEvent){
            // dd($formEvent);
            $form= $formEvent->getForm();
            $user = $form->getConfig()->getOptions()['data'];
            $userPasswordHasher = $form->getConfig()->getOptions()['userPasswordHasher'];

            $isValid = $userPasswordHasher->isPasswordValid(
                $user,
                $form->get('actual_password')->getData(),
            );

            if(!$isValid){
                $form->get('actual_password')->addError(new FormError('Mot de passe incorrect'));
                return;
            }
        })
        ;
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'userPasswordHasher' => null,
        ]);
    }
}
