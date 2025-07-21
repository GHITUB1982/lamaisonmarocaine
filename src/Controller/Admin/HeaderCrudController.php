<?php

namespace App\Controller\Admin;

use App\Entity\Header;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class HeaderCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Header::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
          $rerquired=true;
        if($pageName='edit'){
            $rerquired=false;
        }
        return [
            TextField::new(propertyName: 'title',label: 'Titre'),
            TextareaField::new(propertyName: 'content',label: 'Contenu'),
            TextField::new(propertyName: 'button_title',label: 'Button Titre'),
            TextField::new(propertyName: 'button_link',label: 'Button URL'),
            ImageField::new('illustration', 'Illustration')
                            ->setLabel('Image Entête')
                            ->setUploadedFileNamePattern('[day]-[month]-[year]-[slug]-[contenthash].[extension]')
                            ->setHelp('Image du Fond du Header de la page Acceuil')
                            ->setBasePath('uploads\products')
                            ->setUploadDir('public\uploads\products')
                            ->setRequired( $rerquired),
        ];  
    }


}
