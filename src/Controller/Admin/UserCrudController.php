<?php

namespace App\Controller\Admin;

use DateTime;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;


class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->disable('delete'); // Désactive uniquement l'action delete
            
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Utilisateurs')
            ->setPageTitle(Crud::PAGE_NEW, 'Créer un utilisateur')
            ->setPageTitle(Crud::PAGE_EDIT, 'Modifier un utilisateur')
            ->setEntityLabelInPlural('Utilisateurs')
            ->setEntityLabelInSingular('Utilisateur')
            ->setSearchFields(['username', 'email'])
            ->setDefaultSort(['id' => 'DESC'])
            
            ;
    }


    public function configureFields(string $pageName): iterable
    {
          $required=true;
        if($pageName='edit'){
            $required=false;

        }
        return [
            // IdField::new('id'),
            ChoiceField::new('title','Titre')->setLabel('Titre')->setHelp('Choisir le titre')->setChoices([
                    'Monsieur' => 'Monsieur',
                    'Madame' => 'Madame',
                    'Mademoiselle' => 'Mademoiselle'
                    
                ])->setRequired( $required),
            TextField::new('firstName', 'Prénom'),
            TextField::new('lastName', 'Nom'),
            // TextField::new('email', 'Email')->onlyOnIndex(),
            TextField::new('email', 'Email')->setRequired( $required),
            // TextEditorField::new('description'),
            ChoiceField::new('roles')
    ->setChoices([
        'Administrateur' => 'ROLE_ADMIN',
        'Utilisateur' => 'ROLE_USER',
    ])
    ->renderAsBadges([
        'ROLE_ADMIN' => 'danger',
        'ROLE_USER' => 'warning',
    ])
    ->allowMultipleChoices()
    ->setHelp('Choisir le rôle de l\'utilisateur')
    ->setRequired($required),
DateTimeField::new('lastLoginAt')->setLabel('Dernière connexion')->onlyOnIndex(),
            
        ];
    }

}
 