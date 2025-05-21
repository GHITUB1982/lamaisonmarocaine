<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use BcMath\Number;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use Symfony\Component\DomCrawler\Field\FileFormField;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Produits')
            ->setPageTitle(Crud::PAGE_NEW, 'Créer un produit')
            ->setPageTitle(Crud::PAGE_EDIT, 'Modifier un produit')
            ->setEntityLabelInPlural('Produits')
            ->setEntityLabelInSingular('Produit');
            // ->setSearchFields(['name'])
            // ->setDefaultSort(['id' => 'DESC']);
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name', 'Nom'),
            SlugField::new('slug', 'Slug')->setLabel('Slug ou URL')->setTargetFieldName('name')->setHelp('Genéré automatiquement à partir du nom de la catégorie'),
            NumberField::new('price', 'Prix'),
            ChoiceField::new('tva','TVA')->setLabel('TVA')->setHelp('Choisir le taux de TVA')->setChoices([
                    '20%' => 20,
                    '10%' => 10,
                    '5,5%' => 5,5,
                    '2,1%' => 2,1,
                ])->setRequired(false),
            ImageField::new('illustration', 'Illustration')->setLabel('Image du produit')->setUploadedFileNamePattern('[day]-[month]-[year]-[slug]-[contenthash].[extension]')->setHelp('Image du produit')->setBasePath('uploads\products')->setUploadDir('public\uploads\products')->setRequired(false),
            TextareaField::new('description', 'Description'),
            AssociationField::new('category', 'Catégorie Associé'),
        ];
    }
    
}
