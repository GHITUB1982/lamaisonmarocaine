<?php
// src/Controller/MailerController.php
namespace App\Controller;

use App\Entity\User;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Uid\Uuid;
use Symfony\Component\Mailer\Transport\TransportInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MailerController extends AbstractController
{

#[Route('/email')]
public function sendEmail(
    TransportInterface $mailer,
    UrlGeneratorInterface $urlGenerator
): Response
{
    $user = new User();
    $user->setResetToken(Uuid::v4()->toRfc4122());
    $resetLink = $urlGenerator->generate('app_reset_password', [
        'token' => $user->getResetToken(),
    ], UrlGeneratorInterface::ABSOLUTE_URL);
        $email = (new TemplatedEmail())
            ->from('no-reply@mailtrap.io')
            ->to('adil.zougarhi@gmail.com')
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

        $mailer->send($email);

        return new Response('Email sent successfully!');
    }
}