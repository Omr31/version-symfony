<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MdvsaharaController extends AbstractController
{
    #[Route('/mdvsahara', name: 'app_mdvsahara')]
    public function index(): Response
    {
        return $this->render('mdvsahara/index.html.twig', [
            'controller_name' => 'MdvsaharaController',
        ]);
    }
}
