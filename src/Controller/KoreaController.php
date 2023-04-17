<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class KoreaController extends AbstractController
{
    #[Route('/korea', name: 'app_korea')]
    public function index(): Response
    {
        return $this->render('korea/index.html.twig', [
            'controller_name' => 'KoreaController',
        ]);
    }
}
