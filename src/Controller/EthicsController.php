<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class EthicsController extends AbstractController
{
    #[Route('/déontologie', name: 'app_ethics')]
    public function index(): Response
    {
        return $this->render('ethics/index.html.twig');
    }
}
