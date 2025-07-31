<?php

namespace App\Controller\Admin;

use App\Entity\Reglementation;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ReglementationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Reglementation::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('title', 'Titre'),
            TextField::new('route', 'Route'),
            TextEditorField::new('content', 'Contenu'),
            BooleanField::new('isView', 'Visible'),
            DateTimeField::new('createdAt', 'Créé le')->hideOnForm(),
            DateTimeField::new('updatedAt', 'Mis à jour')->hideOnForm(),

        ];
    }
    


}
