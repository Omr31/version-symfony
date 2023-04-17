<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SenegalController extends AbstractController
{
    #[Route('/senegal', name: 'app_senegal')]
    public function index(): Response
    {
        return $this->render('senegal/index.html.twig', [
            'controller_name' => 'SenegalController',
        ]);
    }
}
