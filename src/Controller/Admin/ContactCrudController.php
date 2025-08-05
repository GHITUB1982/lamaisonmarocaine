<?php

namespace App\Controller\Admin;

use App\Entity\Contact;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use Symfony\Component\Validator\Constraints\Date;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use Symfony\Component\Validator\Constraints\Choice;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ContactCrudController extends AbstractCrudController
{

    public static function getEntityFqcn(): string
    {
        return Contact::class;
    }

    public function configureActions(Actions $actions): Actions
{
    return $actions
                ->disable( Action::NEW)
                ->add(Crud::PAGE_INDEX, Action::DETAIL)
                ;
}



    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Contacts')
            ->setPageTitle(Crud::PAGE_NEW, 'Créer un contact')
            // ->setPageTitle(Crud::PAGE_EDIT, 'Modifier un contact')
            ->setEntityLabelInPlural('Cotntacts')
            ->setEntityLabelInSingular('Contact');
        // ->setSearchFields(['name'])
        // ->setDefaultSort(['id' => 'DESC']);
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('nom', 'Nom')->setDisabled(true),
            EmailField::new('email', 'Email')->setDisabled(true),
            TextField::new('sujet', 'Sujet')->setDisabled(true),
            TextEditorField::new('message', 'Message')->onlyOnDetail(),
           ChoiceField::new('status')
                    ->setChoices([
                        'Nouveau' => 'new',
                        'Répondu' => 'answered',
                        'Traiter' => 'treated',
                    ])
                    ->renderAsBadges([
                        'new' => 'warning',
                        'answered' => 'success',
                        'treated' => 'primary',
                    ]),
            DateTimeField::new('createdAt', 'Date de creation')->setDisabled(true),
        ];
    }
    
}
