<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NomDuControleuController extends AbstractController
{
    #[Route('/nom/du/controleu', name: 'app_nom_du_controleu')]
    public function index(): Response
    {
        return $this->render('nom_du_controleu/index.html.twig', [
            'controller_name' => 'NomDuControleuController',
        ]);
    }
}
