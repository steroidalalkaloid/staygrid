<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BookingsController extends AbstractController
{
    #[Route('/bookings', name: 'app_bookings')]
    public function index(): Response
    {
        return $this->render('rooms/index.html.twig', [
            'controller_name' => 'BookingsController',
        ]);
    }
}

