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
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
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
            ->setPageTitle(Crud::PAGE_INDEX, 'Commandes')
            ->setPageTitle(Crud::PAGE_NEW, 'Ajouter une commande')
            ->setPageTitle(Crud::PAGE_EDIT, 'Modifier une commande')
            ->setEntityLabelInPlural('Commandes')
            ->setEntityLabelInSingular('Commande');
        // ->setSearchFields(['name'])
        // ->setDefaultSort(['id' => 'DESC']);
    }

    public function configureActions(Actions $actions): Actions
    {
            $show = Action::new('Afficher')->linkToCrudAction(crudActionName: 'show');

            // dd($order);

        return $actions
            ->remove(Crud::PAGE_INDEX, Action::NEW)
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
            IdField::new('id'),
            DateTimeField::new('createdAt'),
            NumberField::new('state')->setTemplatePath('admin/order_state.html.twig'),
            AssociationField::new('user')->setLabel('Client'),
            TextField::new('carrierName'),
            TextField::new('delivery'),
            NumberField::new('totalHT')
                    ->setLabel('Total HT (MAD)')
                    ->formatValue(function ($value, $entity) {
                        return $entity->getFormattedTotals()['ht'] . ' MAD';
                    }),
          
            TextField::new('customBlock')
                    ->setLabel('Informations complémentaires')
                    ->setTemplatePath('admin/order_show.html.twig')
                    ->onlyOnDetail(),
              NumberField::new('totalTVA')
                    ->setLabel('TVA (MAD)')
                    ->formatValue(function ($value, $entity) {
                        return $entity->getFormattedTotals()['tva'] . ' MAD';
                    }),
            NumberField::new('carrierPrice')
                    ->setLabel('Frais de livraison (MAD)')
                    ->formatValue(function ($value, $entity) {
                        return $entity->getFormattedTotals()['carrier'] . ' MAD';
                    }),
            NumberField::new('totalTTC')
                    ->setLabel('Total TTC (MAD)')
                    ->formatValue(function ($value, $entity) {
                        return $entity->getFormattedTotals()['ttc'] . ' MAD';
                    }),

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
