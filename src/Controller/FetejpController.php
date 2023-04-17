<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FetejpController extends AbstractController
{
    #[Route('/fetejp', name: 'app_fetejp')]
    public function index(): Response
    {
        return $this->render('fetejp/index.html.twig', [
            'controller_name' => 'FetejpController',
        ]);
    }
}
