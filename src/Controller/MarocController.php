<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MarocController extends AbstractController
{
    #[Route('/maroc', name: 'app_maroc')]
    public function index(): Response
    {
        return $this->render('maroc/index.html.twig', [
            'controller_name' => 'MarocController',
        ]);
    }
}
