<?php 

namespace App\Service;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class PhpMailerService
{
    private PHPMailer $mailer;
    private array $config;


    public function __construct(ParameterBagInterface $params)
    {
        $this->mailer = new PHPMailer(true);
        $this->configureMailer(
            $params->get('mailtrap_host'),
            $params->get('mailtrap_port'),
            $params->get('mailtrap_username'),
            $params->get('mailtrap_password'),
            $params->get('mailer_from'),
            $params->get('mailtrap_from_name')
        );
    }

    private function configureMailer($host, $port, $username, $password, $from, $fromName): void
    {
$this->mailer->SMTPOptions = [
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    ]
];        $this->mailer->Host = $host;
        $this->mailer->SMTPAuth = true;
        $this->mailer->Port = $port;
        $this->mailer->Username = $username;
        $this->mailer->Password = $password;
        $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mailer->setFrom($from, $fromName);
    }

    public function sendEmail(
        string $to,
        string $subject,
        string $body,
        bool $isHtml = true,
        array $attachments = []
    ): bool {
        try {
            $this->mailer->clearAddresses();
            $this->mailer->addAddress($to);
            $this->mailer->Subject = $subject;
            
            if ($isHtml) {
                $this->mailer->isHTML(true);
                $this->mailer->Body = $body;
                $this->mailer->AltBody = strip_tags($body);
            } else {
                $this->mailer->isHTML(false);
                $this->mailer->Body = $body;
            }

            foreach ($attachments as $attachment) {
                $this->mailer->addAttachment($attachment['path'], $attachment['name']);
            }

            return $this->mailer->send();
        } catch (PHPMailerException $e) {
            throw new \RuntimeException("Erreur d'envoi d'email: {$e->getMessage()}");
        }
    }
}