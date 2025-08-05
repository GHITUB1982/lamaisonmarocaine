<?php

namespace App\Controller\Admin;

use PharIo\Manifest\Email;
use App\Entity\NewsletterSubscriber;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class NewsletterSubscriberCrudController extends AbstractCrudController
{
        public static function getEntityFqcn(): string
    {
        return NewsletterSubscriber::class;
    }

    public function configureActions(Actions $actions): Actions
{
    return $actions
                ->disable( Action::NEW, Action::DELETE);
}


    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            EmailField::new('email', 'Email')->setDisabled(true),
            DateTimeField::new('subscribedAt', 'Date de creation')->setDisabled(true)  ,
            ChoiceField::new('status')
                    ->setChoices([
                        'Nouveau' => 'new',
                        'Publié' => 'published',
                        'Renvoyé' => 'resent',
                    ])
                    ->renderAsBadges([
                        'new' => 'warning',
                        'published' => 'success',
                        'resent' => 'primary',
                    ]),
        ];
    }
    
}
