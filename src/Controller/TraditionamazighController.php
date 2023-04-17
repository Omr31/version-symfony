<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TraditionamazighController extends AbstractController
{
    #[Route('/traditionamazigh', name: 'app_traditionamazigh')]
    public function index(): Response
    {
        return $this->render('traditionamazigh/index.html.twig', [
            'controller_name' => 'TraditionamazighController',
        ]);
    }
}
