<?php

namespace App\Controller\Admin;

use App\Entity\Carrier;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;

class CarrierCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Carrier::class;
    }

        public function configureCrud(Crud $crud): Crud
        {
            return $crud
                ->setPageTitle(Crud::PAGE_INDEX, 'Transporteurs')
                ->setPageTitle(Crud::PAGE_NEW, 'Créer un transporteur')
                ->setPageTitle(Crud::PAGE_EDIT, 'Modifier un transporteur')
                ->setEntityLabelInPlural('Transporteurs')
                ->setEntityLabelInSingular('Transporteur')
                ->setSearchFields(['name'])
                ->setDefaultSort(['id' => 'DESC']);
        }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name', 'Nom')->setHelp('Nom du transporteur'),
            TextEditorField::new('description', 'Description')->setHelp('Description du transporteur'),
            NumberField::new(propertyName: 'price', label: 'Prix')
                ->setHelp('Prix du transporteur, peut être un montant fixe ou un pourcentage'),
        ];
    }

}
