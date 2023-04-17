<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FetedzController extends AbstractController
{
    #[Route('/fetedz', name: 'app_fetedz')]
    public function index(): Response
    {
        return $this->render('fetedz/index.html.twig', [
            'controller_name' => 'FetedzController',
        ]);
    }
}
