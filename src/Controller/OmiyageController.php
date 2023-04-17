<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OmiyageController extends AbstractController
{
    #[Route('/omiyage', name: 'app_omiyage')]
    public function index(): Response
    {
        return $this->render('omiyage/index.html.twig', [
            'controller_name' => 'OmiyageController',
        ]);
    }
}
