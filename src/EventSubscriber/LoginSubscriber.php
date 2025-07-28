<?php

namespace Src\EventSubscriber;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Security\Http\Event\LoginSuccessEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class LoginSubscriber implements EventSubscriberInterface
{
    private $security;
    private $entityManager;
    public function __construct(Security $security, EntityManagerInterface $entityManager)
    {
        $this->security = $security;
        $this->entityManager = $entityManager;
    }

    public function onLogin(): void 
    {
            // dd('ok');   
            $user = $this->security->getUser();
            $user->setLastLoginAt(New \DateTime());
            // dd($user);
            $this->entityManager->flush();
    }

    public static function getSubscribedEvents(): array
    {
            return [
                    LoginSuccessEvent::class => 'onLogin',
            ];
    }

}