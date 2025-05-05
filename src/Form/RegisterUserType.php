<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegisterUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => 'Prénom', 
                'attr' => [
                    'placeholder' => 'Entrer votre prénom'
                ]
            ]) 
            ->add('lastname', TextType::class, [
                'label' => 'Nom', 
                'attr' => [
                    'placeholder' => 'Entrer votre nom'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email', 
                'attr' => [
                    'placeholder' => 'Entrer votre email'
                ]
            ])
           ->add( 'plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options' => [
                    'label' => 'Mot de passe', 
                    'attr' => [
                        'placeholder' => 'Entrer votre mot de passe'
                    ],
                    'hash_property_path' => 'password',
                    'mapped' => false,
                ],
                'second_options' => [
                    'label' => 'Confirmer le mot de passe', 
                    'attr' => [
                        'placeholder' => 'Confirmer votre mot de passe'
                    ]
                ],
                'mapped' => false,
            ])
            // ->add('roles' , TextType::class, [
            //     'label' => 'Rôle', 
            //     'attr' => [
            //         'placeholder' => 'Entrer votre rôle'
            //     ]
            // ])
            // ->add('password', PasswordType::class, [
            //     'label' => 'Mot de passe', 
            //     'attr' => [
            //         'placeholder' => 'Entrer votre mot de passe'
            //     ]
            // ])  
            // ->add('confirm_password', PasswordType::class, [
            //     'label' => 'Confirmer le mot de passe', 
            //     'attr' => [
            //         'placeholder' => 'Confirmer votre mot de passe'
            //     ]
            // ])
            ->add('submit', SubmitType::class, [
                // 'label' => 'Register', 
                'attr' => [
                    'class' => 'btn btn-primary'
                ]
            ])
            ->add('annuler', SubmitType::class, [
                'label' => 'Annuler', 
                'attr' => [
                    'class' => 'btn btn-warning'
                ]
            ])
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            "constraints" => [
                new NotBlank([
                    'message' => 'Ce champ ne peut pas être vide !',
                ]),
                new UniqueEntity(
                    entityClass: User::class,
                    fields: ['email'],
                    message: 'Cet email est déjà utilisé !',
                ),
            ],
            'data_class' => User::class,
        ]);
    }
}
