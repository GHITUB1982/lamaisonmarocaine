<?php

namespace App\Controller\Admin;

use App\Entity\BlogPosts;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
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
            TextField::new('title', 'Titre'),
            SlugField::new('slug')
                ->setTargetFieldName('title')
                ->hideOnIndex(),

            // Contenu et extrait
            TextEditorField::new('content', 'Contenu')
                ->hideOnIndex()
                ->setNumOfRows(15),
            TextareaField::new('excerpt', 'Extrait')
                ->hideOnIndex()
                ->setNumOfRows(5),

            // Gestion de l'image
            ImageField::new('featured_image', 'Image de couverture')
                ->setLabel('Image du produit')
                ->setUploadedFileNamePattern('[day]-[month]-[year]-[slug]-[contenthash].[extension]')
                ->setHelp('Image du produit')
                ->setBasePath('uploads\products\blog\img')
                ->setUploadDir('public\uploads\products\blog\img')
                ->setRequired(true),

            // SEO
            TextField::new('meta_title', 'Meta Title')
                ->hideOnIndex()
                ->setMaxLength(60),
            TextareaField::new('meta_description', 'Meta Description')
                ->hideOnIndex()
                ->setMaxLength(160),

            // Statistiques
            IntegerField::new('viewsCount', 'Vues')
                ->onlyOnIndex()
                ->formatValue(function ($value) {
                    return sprintf('<span class="badge badge-info"><i class="fa fa-eye"></i> %s</span>', $value);
                }),

            // Status avec badges colorés
            ChoiceField::new('status', 'Statut')
                ->setChoices([
                    'Brouillon' => 'draft',
                    'Publié' => 'published',
                    'Archivé' => 'archived'
                ])
                ->renderAsBadges([
                    'draft' => 'warning',
                    'published' => 'success',
                    'archivé' => 'secondary'
                ])
                ->allowMultipleChoices(false),

            // Associations
            AssociationField::new('author')
                ->setLabel('Auteur')
                ->setCrudController(UserCrudController::class)
                ->setFormTypeOption('choice_label', 'email') // ou 'username' selon votre entité User
                ->formatValue(function ($value, BlogPosts $post) {
                    return $post->getAuthor() ? $post->getAuthor()->getEmail() : 'Aucun auteur';
                }),

            AssociationField::new('category')
                ->setLabel('Catégorie')
                ->setCrudController(CategoryCrudController::class)
                ->setFormTypeOption('choice_label', 'name')
                ->setRequired(false),

            // Dates
            DateTimeField::new('created_at', 'Créé le')
                ->setFormat('dd/MM/Y HH:mm')
                ->onlyOnDetail(),
            DateTimeField::new('updated_at', 'Modifié le')
                ->setFormat('dd/MM/Y HH:mm')
                ->onlyOnDetail(),

            // Champ virtuel pour l'affichage dans l'index
            TextField::new('short_content', 'Aperçu')
                ->onlyOnIndex()
                ->setVirtual(true)
                ->formatValue(function ($value, $entity) {
                    return substr(strip_tags($entity->getContent()), 0, 100) . '...';
                })
        ];
    }
}
