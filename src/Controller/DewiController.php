<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
#use Symfony\Component\Routing\Annotation\Route;

class DewiController extends AbstractController
{

    #[Route('/dewi', name: 'app_dewi')]
    public function index(): Response
    {
        return $this->render('dewi/index.html.twig', [
            'controller_name' => 'DewiController',
        ]);
    }
}
