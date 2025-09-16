<?php

namespace App\Controller\Admin;

use DateTime;
use App\Entity\Cooperative;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CooperativeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Cooperative::class;
    }

    public function configureFields(string $pageName): iterable
    {
            if ($pageName === Crud::PAGE_INDEX) {

        return [
            TextField::new('name', 'Nom de la coopérative'),
            TextareaField::new('description', 'Description'),
            // TextareaField::new('address', 'Adresse'),
            // TextField::new('ville', 'Ville'),
            // TextField::new('region', 'Région'),
            // TextField::new('postal', 'Code postal'),
            // TextField::new('country', 'Pays'),
            // TelephoneField::new('phone1', 'Téléphone principal'),
            // TelephoneField::new('phone2', 'Téléphone secondaire'),
            // EmailField::new('email', 'Email'),
            // UrlField::new('website', 'Site web'),
            // UrlField::new('facebook', 'Facebook'),
            // UrlField::new('instagram', 'Instagram'),
            // UrlField::new('twitter', 'Twitter'),
            // UrlField::new('linkedin', 'LinkedIn'),
            // UrlField::new('youtube', 'YouTube'),
            TextField::new('patente', 'Patente'),
            TextField::new('register_commerce', 'Registre de commerce'),
            TextField::new('identifiant_fiscal', 'Identifiant fiscal'),
            TextField::new('forme_juridique', 'Forme juridique'),
            TextField::new('cnss', 'CNSS'),
            DateField::new('date_creation', 'Date de création'),
            TextField::new('secteur_activite', 'Secteur d\'activité'),
            IntegerField::new('nombre_membres', 'Nombre de membres'),
            TextField::new('representant_legal', 'Représentant légal'),
            // TextField::new('latitude', 'Latitude'),
            // TextField::new('longitude', 'Longitude'),
            // TextareaField::new('horaire', 'Horaires'),
            DateTimeField::new('created_at', 'Date de création'),
            // DateTimeField::new('updated_at', 'Date de modification'),
        ];
    }
     return [
            TextField::new('name', 'Nom de la coopérative'),
            TextareaField::new('description', 'Description'),
            TextareaField::new('address', 'Adresse'),
            TextField::new('ville', 'Ville'),
            TextField::new('region', 'Région'),
            TextField::new('postal', 'Code postal'),
            TextField::new('country', 'Pays'),
            TelephoneField::new('phone1', 'Téléphone principal'),
            TelephoneField::new('phone2', 'Téléphone secondaire'),
            EmailField::new('email', 'Email'),
            UrlField::new('website', 'Site web'),
            UrlField::new('facebook', 'Facebook'),
            UrlField::new('instagram', 'Instagram'),
            UrlField::new('twitter', 'Twitter'),
            UrlField::new('linkedin', 'LinkedIn'),
            UrlField::new('youtube', 'YouTube'),
            TextField::new('patente', 'Patente'),
            TextField::new('register_commerce', 'Registre de commerce'),
            TextField::new('identifiant_fiscal', 'Identifiant fiscal'),
            TextField::new('forme_juridique', 'Forme juridique'),
            TextField::new('cnss', 'CNSS'),
            DateField::new('date_creation', 'Date de création'),
            TextField::new('secteur_activite', 'Secteur d\'activité'),
            IntegerField::new('nombre_membres', 'Nombre de membres'),
            TextField::new('representant_legal', 'Représentant légal'),
            TextField::new('latitude', 'Latitude'),
            TextField::new('longitude', 'Longitude'),
            TextareaField::new('horaire', 'Horaires'),
            DateTimeField::new('created_at', 'Date de création'),
            DateTimeField::new('updated_at', 'Date de modification'),
        ];

    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle('index', 'Gestion des coopératives')
            ->setPageTitle('new', 'Créer une nouvelle coopérative')
            ->setPageTitle('edit', 'Modifier la coopérative')
            ->setPageTitle('detail', 'Détails de la coopérative')
            ->setSearchFields(['name', 'ville', 'secteur_activite'])
            ->setDefaultSort(['name' => 'ASC'])
            ->setPaginatorPageSize(20);
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->update(Crud::PAGE_INDEX, Action::NEW, function (Action $action) {
                return $action->setLabel('Créer une coopérative');
            });
    }
}