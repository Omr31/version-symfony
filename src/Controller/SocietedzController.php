<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SocietedzController extends AbstractController
{
    #[Route('/societedz', name: 'app_societedz')]
    public function index(): Response
    {
        return $this->render('societedz/index.html.twig', [
            'controller_name' => 'SocietedzController',
        ]);
    }
}
