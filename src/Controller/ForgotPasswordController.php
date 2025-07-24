<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\Uid\Uuid;
use App\Repository\UserRepository;
use Psr\Log\LoggerInterface;
use App\Form\ForgotPasswordFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Mailer\Transport\TransportInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


final class ForgotPasswordController extends AbstractController
{
    public function __construct(
        private TransportInterface $mailer,
        private LoggerInterface $logger,
        private EntityManagerInterface $entityManager,
    private UrlGeneratorInterface $urlGenerator

    ) {}

    #[Route('/password', name: 'app_forgot_password')]
    public function index(Request $request, UserRepository $userRepository): Response
    {
        $form = $this->createForm(ForgotPasswordFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $email = $form->get('email')->getData();
            $user = $userRepository->findOneBy(['email' => mb_strtolower(trim($email))]);

            if ($user) {
                try {
                    if (!$user->getResetToken()) {
                        $user->setResetToken(Uuid::v4()->toRfc4122());
                        $this->entityManager->persist($user);
                        $this->entityManager->flush();
                    }

                  $user = new User();
    $user->setResetToken(Uuid::v4()->toRfc4122());
    $resetLink = $this->urlGenerator->generate('app_reset_password', [
        'token' => $user->getResetToken(),
    ], UrlGeneratorInterface::ABSOLUTE_URL);
        $email = (new TemplatedEmail())
            ->from('no-reply@mailtrap.io')
            ->to($email)
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Demande de réinitialisation de votre Mot de passe ')
            ->text('Sending emails is fun again!')
            ->html('<p>See Twig integration for better HTML integration!</p>')
             // path of the Twig template to render
            ->htmlTemplate('password/reset_password.html.twig')

            // change locale used in the template, e.g. to match user's locale
            ->locale('de')

            // pass variables (name => value) to the template
            ->context([
                'resetLink' => $resetLink,
                'expiration_date' => new \DateTime('+7 days'),
                'username' => 'foo',
            ]); 

        $this->mailer->send($email);

                    $this->logger->info('Email envoyé', ['to' => $user->getEmail()]);

                } catch (\Throwable $e) {
                    $this->logger->critical('Erreur d\'envoi', ['error' => $e->getMessage()]);
                    $this->addFlash('error', 'Une erreur technique est survenue');
                    return $this->redirectToRoute('app_forgot_password');
                }
            }

            $this->addFlash('success', 'Si cet email existe, vous recevrez un lien sous peu.');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('password/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/password/reset/{token}', name: 'app_reset_password')]
    public function resetPassword(
        string $token,
        Request $request,
        UserRepository $userRepository,
        LoggerInterface $logger,
        EntityManagerInterface $entityManager  // injection ajoutée ici

    ): Response {
        $user = $userRepository->findOneBy(['resetToken' => $token]);

        if (!$user) {
            $this->addFlash('error', 'Cet utilisateur n\'existe pas');
            return $this->redirectToRoute('app_forgot_password');
        }

        $form = $this->createForm(ForgotPasswordFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword($form->get('password')->getData());
            $user->setResetToken(null);
            $entityManager->persist($user);
            $entityManager->flush();

            $logger->info('Mot de passe mis à jour', [
                'email' => $user->getEmail(),
                'ip' => $request->getClientIp()
            ]);

            $this->addFlash('success', 'Votre mot de passe a été mis à jour.');
            return $this->redirectToRoute('app_login'); // Par exemple, redirection après changement
        }

        return $this->render('password/reset_password.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
