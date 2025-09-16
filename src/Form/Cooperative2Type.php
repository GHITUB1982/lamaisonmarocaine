<?php

namespace App\Form;

use App\Entity\Cooperative;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Cooperative2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('address')
            ->add('ville')
            ->add('region')
            ->add('postal')
            ->add('country')
            ->add('phone1')
            ->add('phone2')
            ->add('email')
            ->add('website')
            ->add('facebook')
            ->add('instagram')
            ->add('twitter')
            ->add('youtube')
            ->add('linkedin')
            ->add('patente')
            ->add('register_commerce')
            ->add('identifiant_fiscal')
            ->add('cnss')
            ->add('date_creation', null, [
                'widget' => 'single_text',
            ])
            ->add('secteur_activite')
            ->add('nombre_membres')
            ->add('representant_legal')
            ->add('latitude')
            ->add('longitude')
            ->add('horaire')
            ->add('created_at', null, [
                'widget' => 'single_text',
            ])
            ->add('updated_at', null, [
                'widget' => 'single_text',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cooperative::class,
        ]);
    }
}
