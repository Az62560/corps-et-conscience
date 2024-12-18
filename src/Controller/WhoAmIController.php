<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class WhoAmIController extends AbstractController
{
    #[Route('/qui-suis-je', name: 'app_who_am_i')]
    public function index(): Response
    {
        return $this->render('who_am_i/index.html.twig');
    }
}
