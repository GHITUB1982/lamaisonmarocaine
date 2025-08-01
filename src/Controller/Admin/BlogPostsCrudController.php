<?php

namespace App\Controller\Admin;

use App\Entity\BlogPosts;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class BlogPostsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return BlogPosts::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),

            TextField::new('title', 'Titre')
                ->setMaxLength(100),
            BooleanField::new('isHomepage')->setLabel('A la une')->setHelp('Article affiché sur la page d\'accueil'),

            SlugField::new('slug')
                ->setTargetFieldName('title')
                ->hideOnIndex(),

            TextEditorField::new('content', 'Contenu')
                ->hideOnIndex()
                ->setNumOfRows(15),

            TextareaField::new('excerpt', 'Extrait')
                ->hideOnIndex()
                ->setNumOfRows(5)
                ->setMaxLength(255),

           ImageField::new('featuredImage', 'Image de couverture')
                ->setBasePath('uploads/products/blog/img')
                ->setUploadDir('public/uploads/products/blog/img')
                ->setUploadedFileNamePattern('[day]-[month]-[year]-[slug]-[contenthash].[extension]')
                ->setRequired(false)
                ->setHelp('Image du produit'),

            TextField::new('meta_title', 'Meta Title')
                ->hideOnIndex()
                ->setMaxLength(60),

            TextareaField::new('meta_description', 'Meta Description')
                ->hideOnIndex()
                ->setMaxLength(160),

            IntegerField::new('viewsCount', 'Vues')
                ->onlyOnIndex()
                ->formatValue(function ($value) {
                    return sprintf('<span class="badge badge-info"><i class="fa fa-eye"></i> %s</span>', $value);
                }),

            ChoiceField::new('status', 'Statut')
                ->setChoices([
                    'Brouillon' => 'draft',
                    'Publié' => 'published',
                    'Archivé' => 'archived'
                ])
                ->renderAsBadges([
                    'draft' => 'warning',
                    'published' => 'success',
                    'archived' => 'secondary'
                ])
                ->allowMultipleChoices(false),

            AssociationField::new('author')
                ->setLabel('Auteur')
                ->setCrudController(UserCrudController::class)
                ->setFormTypeOption('choice_label', 'email')
                ->formatValue(function ($value, BlogPosts $post) {
                    return $post->getAuthor() ? $post->getAuthor()->getLastname() : 'Aucun auteur';
                }),

            AssociationField::new('category')
                ->setLabel('Catégorie')
                ->setCrudController(CategoryCrudController::class)
                ->setFormTypeOption('choice_label', 'name')
                ->setRequired(false),

            DateTimeField::new('created_at', 'Créé le')
                ->setFormat('dd/MM/Y HH:mm')
                ->hideOnForm(),

            DateTimeField::new('updated_at', 'Modifié le')
                ->setFormat('dd/MM/Y HH:mm')
                ->hideOnForm(),

            // TextField::new('short_content', 'Aperçu')
            //     ->onlyOnIndex()
            //     ->setVirtual(true)
            //     ->formatValue(function ($value, BlogPosts $post) {
            //         return substr(strip_tags($post->getContent()), 0, 100) . '...';
            //     }),
        ];
    }
}
