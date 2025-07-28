<?php 

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class EmailService
{
    public function __construct(private MailerInterface $mailer) {}

    public function sendTestEmail(): void
    {
        $email = (new Email())
            ->from('no-reply@kechlotus.com')
            ->to('no-reply@kechlotus.com')
            ->subject('Test Service Email')
            ->text('Sent via EmailService');

        $this->mailer->send($email);
    }
}