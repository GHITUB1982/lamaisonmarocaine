<?php

namespace App\Controller\Admin;

use App\Entity\Order;
use App\Repository\OrderRepository;
use App\Repository\OrederDetailsRepository;
use Symfony\Component\HttpFoundation\Response;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use Symfony\Component\Validator\Constraints\Choice;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class OrderCrudController extends AbstractCrudController
{

    private OrderRepository $orderRepository;
    private OrederDetailsRepository $orderDetailsRepository;

    public function __construct(OrderRepository $orderRepository, OrederDetailsRepository $orderDetailsRepository)
    {
        $this->orderRepository = $orderRepository;
        $this->orderDetailsRepository = $orderDetailsRepository;
    }

    public static function getEntityFqcn(): string
    {
        return Order::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Liste des Commandes')->setDefaultSort(['id' => 'DESC'])  
            ->setPageTitle(Crud::PAGE_NEW, 'Ajouter une commande')
            ->setPageTitle(Crud::PAGE_EDIT, 'Modifier une commande')
            ->setEntityLabelInPlural('Commandes')
            ->setEntityLabelInSingular('Commande');
        // ->setSearchFields(['name'])
        // ->setDefaultSort(['id' => 'DESC']);
    }

    public function configureActions(Actions $actions): Actions
    {
             // Action pour générer la facture
             $generateInvoice = Action::new('generateInvoice', 'Facture', 'fa fa-file-invoice')
                ->linkToRoute('app_invoice_admin', function (Order $order) {
                    return ['id_order' => $order->getId()];
                })
                  ->displayIf(function (Order $order) {
                return $order->getState() >= 1; // Seulement si commande payée (state >= 1)
                 })
                ->setHtmlAttributes(['target' => '_blank']); // Ouvre dans un nouvel onglet
                    // dd($order);

        return $actions
            ->remove(Crud::PAGE_INDEX, Action::NEW )
            ->remove(Crud::PAGE_INDEX, Action::DELETE)
            ->remove(Crud::PAGE_INDEX, Action::EDIT)
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->update(Crud::PAGE_INDEX, Action::DETAIL, function (Action $action) {
            return $action->setLabel('Afficher');
        });
    }

public function show(AdminContext $context): Response
    {
        $entity = $context->getEntity();
        // $orders = $this->orderDetailsRepository->findAll();
// dd($entity);
        return $this->render('admin/order/show.html.twig', [
            'order' => $entity,
            // 'orders' => $orders
        ]);
}

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
             TextField::new('invoice', 'Facture')
            ->setTemplatePath('admin/order/invoice_button.html.twig')
            ->onlyOnDetail(),
            DateTimeField::new('createdAt')->setDisabled(true),
            TextField::new('stripe_session_id')->setDisabled(true),
            ChoiceField::new('state')->setTemplatePath('admin/order_state.html.twig')->setChoices([
                'En attente de paiement' => 0,
                'Paiement Effectué' => 1,
                'Préparation en cours' => 2,
                'Livraison en cours' => 3,
                'Livrée' => 4,
                'Annulée' => 5,
            ])->setDisabled('state' === 0), // Disable the field if state is '0'
            AssociationField::new('user')->setLabel('Client')->setDisabled(true),
            TextField::new('carrierName')->setDisabled(true),
            TextField::new('delivery')->setDisabled(true),
            NumberField::new('totalHT')
                    ->setLabel('Total HT (MAD)')
                    ->formatValue(function ($value, $entity) {
                        return $entity->getFormattedTotals()['ht'] . ' MAD';
                    })->setDisabled(true),
          
            TextField::new('customBlock')
                    ->setLabel('Informations complémentaires')
                    ->setTemplatePath('admin/order_show.html.twig')
                    ->onlyOnDetail(),
              NumberField::new('totalTVA')
                    ->setLabel('TVA (MAD)')
                    ->formatValue(function ($value, $entity) {
                        return $entity->getFormattedTotals()['tva'] . ' MAD';
                    })->setDisabled(true),
            NumberField::new('carrierPrice')
                    ->setLabel('Frais de livraison (MAD)')
                    ->formatValue(function ($value, $entity) {
                        return $entity->getFormattedTotals()['carrier'] . ' MAD';
                    })->setDisabled(true),
            NumberField::new('totalTTC')
                    ->setLabel('Total TTC (MAD)')
                    ->formatValue(function ($value, $entity) {
                        return $entity->getFormattedTotals()['ttc'] . ' MAD';
                    })->setDisabled(true),

            //     ];
            // }
            //Functions dans Order.php pour formater les valeurs
            // NumberField::new('totalHT')
            //     ->setLabel('Total HT (MAD)')
            //     ->formatValue(fn($value, $entity) => $entity->getFormattedTotalHT())
            //     ->onlyOnDetail(),

            // NumberField::new('totalTVA')
            //     ->setLabel('TVA (MAD)')
            //     ->formatValue(fn($value, $entity) => $entity->getFormattedTotalTVA())
            //     ->onlyOnDetail(),

            // NumberField::new('carrierPrice')
            //     ->setLabel('Frais de livraison (MAD)')
            //     ->formatValue(fn($value, $entity) => $entity->getFormattedCarrierPrice())
            //     ->onlyOnDetail(),

            // NumberField::new('totalTTC')
            //     ->setLabel('Total TTC (MAD)')
            //     ->formatValue(fn($value, $entity) => $entity->getFormattedTotalTTC())
            //     ->onlyOnDetail()
        ];
    }



}
