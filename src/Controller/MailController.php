<?php 

namespace App\Controller;

use Symfony\Component\Uid\Uuid;
use Psr\Log\LoggerInterface;
use App\Service\PhpMailerService;
use App\Repository\UserRepository;
use App\Form\ForgotPasswordFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MailController extends AbstractController
{
    public function __construct(
        private MailerInterface $mailer,
        private LoggerInterface $logger,
        private EntityManagerInterface $entityManager,
        private UrlGeneratorInterface $urlGenerator
    ) {}

    #[Route('/send-test-email', name: 'app_send_test_email')]
   public function sendTestEmail(
    Request $request, // <-- Ajoutez ce paramètre
    PhpMailerService $mailer, 
    UserRepository $userRepository
): Response {
    $form = $this->createForm(ForgotPasswordFormType::class);
    $form->handleRequest($request); // <-- Traitez la soumission

    if ($form->isSubmitted() && $form->isValid()) {
        $email = $form->get('email')->getData(); // <-- Récupérez l'e-mail du formulaire
        $user = $userRepository->findOneBy(['email' => mb_strtolower(trim($email))]);

        if (!$user) {
            $this->addFlash('error', 'Aucun utilisateur trouvé avec cet e-mail.');
            return $this->redirectToRoute('app_forgot_password');
        }

        if (!$user->getResetToken()) {
            $user->setResetToken(Uuid::v4()->toRfc4122());
            $this->entityManager->flush();
        }

        $resetLink = $this->urlGenerator->generate('app_reset_password', [
            'token' => $user->getResetToken(),
        ], UrlGeneratorInterface::ABSOLUTE_URL);

        $htmlContent = $this->renderView('email/test.html.twig', [
            'resetLink' => $resetLink,
            'user' => $user
        ]);

        // Envoi à l'e-mail du formulaire (et non plus une adresse en dur)
        $mailer->sendEmail(
            $user->getEmail(), // <-- Utilisation de l'e-mail de l'utilisateur
            'Réinitialisation de votre mot de passe',
            $htmlContent
        );

        $this->addFlash('success', 'Un e-mail de réinitialisation a été envoyé.');
        return $this->redirectToRoute('app_home');
    }

    return $this->render('password/index.html.twig', [
        'form' => $form->createView()
    ]);
}
}