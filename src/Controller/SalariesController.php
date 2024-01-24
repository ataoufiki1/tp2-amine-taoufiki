<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SalariesController extends AbstractController
{
    #[Route('/salaries', name: 'app_salaries')]
    public function index(): Response
    {
        return $this->render('salaries/index.html.twig', [
            'controller_name' => 'SalariesController',
        ]);
    }
}
