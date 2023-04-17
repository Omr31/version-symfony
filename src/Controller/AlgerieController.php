<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlgerieController extends AbstractController
{
    #[Route('/algerie', name: 'app_algerie')]
    public function index(): Response
    {
        return $this->render('algerie/index.html.twig', [
            'controller_name' => 'AlgerieController',
        ]);
    }
}
