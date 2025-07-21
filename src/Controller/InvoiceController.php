<?php

namespace App\Controller;

use App\Repository\OrderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Dompdf\Dompdf;

final class InvoiceController extends AbstractController
{
    /**
     * Impression d'une facture PDF pour un utilisateur connecté
     * Vérification de la commande pour un utilisateur donné
     */
    #[Route('/compte/facture/impression/{id_order}', name: 'app_invoice_user')]
    public function generateForUser(OrderRepository $orderRepository, $id_order): Response
    {
        // Verification de l'objet commande pour l'utilisateur connecté
        $order = $orderRepository->findOneById($id_order);
        
        if (!$order || $order->getUser() !== $this->getUser()) {
            return $this->redirectToRoute('app_home');
        }

        return $this->generatePdf($order);
    }

    /**
     * Impression d'une facture PDF pour un administrateur
     * Accès sans restriction utilisateur
     */
    #[Route('/admin/facture/impression/{id_order}', name: 'app_invoice_admin')]
    public function generateForAdmin(OrderRepository $orderRepository, $id_order): Response
    {
        // Vérification que la commande existe
        $order = $orderRepository->findOneById($id_order);
        
        if (!$order) {
            throw $this->createNotFoundException('Commande non trouvée');
        }

        return $this->generatePdf($order);
    }

    /**
     * Méthode privée pour générer le PDF
     */
    private function generatePdf($order): Response
    {
        $dompdf = new Dompdf();
        
        $html = $this->renderView('invoice/index.html.twig', [
            'order' => $order
        ]);

        $dompdf->loadHtml($html, 'UTF-8');
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $dompdf->stream('Facture_'.$order->getId().'.pdf', [
            'Attachment' => false,
        ]);

        exit();
    }
}