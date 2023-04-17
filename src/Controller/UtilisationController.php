<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UtilisationController extends AbstractController
{
    #[Route('/utilisation', name: 'app_utilisation')]
    public function index(): Response
    {
        return $this->render('utilisation/index.html.twig', [
            'controller_name' => 'UtilisationController',
        ]);
    }
}
