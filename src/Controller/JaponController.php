<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JaponController extends AbstractController
{
    #[Route('/japon', name: 'app_japon')]
    public function index(): Response
    {
        return $this->render('japon/index.html.twig', [
            'controller_name' => 'JaponController',
        ]);
    }
}
