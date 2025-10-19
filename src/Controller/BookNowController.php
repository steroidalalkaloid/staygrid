<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BookNowController extends AbstractController
{
    #[Route('/book/now', name: 'app_book_now')]
    public function index(): Response
    {
        // You can return a simple dummy response or a template here for now
        return new Response('Book Now Controller is working!');
    }
}