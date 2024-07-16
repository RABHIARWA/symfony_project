<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class NomDuControleurController extends AbstractController
{
    #[Route('/nom/du/controleur', name: 'app_nom_du_controleur')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/NomDuControleurController.php',
        ]);
    }
}
