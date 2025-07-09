<?php

namespace App\Form;

use App\Entity\Address;
use App\Entity\Carrier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class OrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // dd($options);
        $builder
            ->add('addresses',EntityType::class,options: [
                'label' => 'Adresse de livraison',
                'required' => true,
                'class' => Address::class,
                'expanded' => true,
                'multiple' => false,
                'label_html' => true,
                'choices' => $options['addresses'],
                ])
            ->add('carrier', EntityType::class,   options: [
                'label' => 'Choisissez votre transporteur',
                'required' => true,
                'class' => Carrier::class,
                'expanded' => true,
                'multiple' => false,
                'label_html' => true,
                ])
            ->add('submit', SubmitType::class, [
                'label' => 'Valider la commande',
                'attr' => ['class' => 'btn btn-primary mt-3 w-100'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
            'addresses' => null,
            'user' => null,
        ]);
    }
}
