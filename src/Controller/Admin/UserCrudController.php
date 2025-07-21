<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
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
            ->setDefaultSort(['id' => 'DESC']);
    }


    public function configureFields(string $pageName): iterable
    {
          $rerquired=true;
        if($pageName='edit'){
            $rerquired=false;
        }
        return [
            // IdField::new('id'),
            ChoiceField::new('title','Titre')->setLabel('Titre')->setHelp('Choisir le titre')->setChoices([
                    'Monsieur' => 'Monsieur',
                    'Madame' => 'Madame',
                    'Mademoiselle' => 'Mademoiselle'
                    
                ])->setRequired( $rerquired),
            TextField::new('firstName', 'Prénom'),
            TextField::new('lastName', 'Nom'),
            // TextField::new('email', 'Email')->onlyOnIndex(),
            TextField::new('email', 'Email')->setDisabled(true),
            // TextEditorField::new('description'),
        ];
    }

}
