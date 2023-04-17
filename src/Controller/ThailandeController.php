<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ThailandeController extends AbstractController
{
    #[Route('/thailande', name: 'app_thailande')]
    public function index(): Response
    {
        return $this->render('thailande/index.html.twig', [
            'controller_name' => 'ThailandeController',
        ]);
    }
}
