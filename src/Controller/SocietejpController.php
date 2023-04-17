<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SocietejpController extends AbstractController
{
    #[Route('/societejp', name: 'app_societejp')]
    public function index(): Response
    {
        return $this->render('societejp/index.html.twig', [
            'controller_name' => 'SocietejpController',
        ]);
    }
}
