<?php

namespace App\Controller; 


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Controller extends AbstractController
{
    // 🚨 Ensure the 'name' is exactly 'app_homepage'
    #[Route('/', name: 'app_homepage')] 
    public function index(): Response
    {
        // Change this back to render your base.html.twig
        return $this->render('base.html.twig', [
            'title' => 'Home', 
        ]);
    }
}
