<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OmotenashiController extends AbstractController
{
    #[Route('/omotenashi', name: 'app_omotenashi')]
    public function index(): Response
    {
        return $this->render('omotenashi/index.html.twig', [
            'controller_name' => 'OmotenashiController',
        ]);
    }
}
