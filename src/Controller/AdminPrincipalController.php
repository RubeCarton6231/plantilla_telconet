<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminPrincipalController extends AbstractController
{
    #[Route('/admin/principal', name: 'app_admin_principal')]
    public function index(): Response
    {
        return $this->render('admin_principal/index.html.twig', [
            'controller_name' => 'AdminPrincipalController',
        ]);
    }
}
