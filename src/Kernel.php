<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    protected function initializeResponseCharset(Request $request, Response $response): void
    {
        $response->setCharset('UTF-8');
        $response->headers->set('Content-Type', 'text/html; charset=UTF-8');
    }
}   