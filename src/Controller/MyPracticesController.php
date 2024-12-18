<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MyPracticesController extends AbstractController
{
    #[Route('/mes-pratiques', name: 'app_my_practices')]
    public function index(): Response
    {
        return $this->render('my_practices/index.html.twig');
    }
}
