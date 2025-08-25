<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AccompaniementController extends AbstractController
{
    #[Route('/accompagnement', name: 'app_accompaniement')]
    public function index(): Response
    {
        return $this->render('accompaniement/index.html.twig');
    }
}
