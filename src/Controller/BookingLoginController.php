<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BookingLoginController extends AbstractController
{
    #[Route('/booking/login', name: 'app_booking_login')]
    public function index(): Response
    {
        return $this->render('booking_login/index.html.twig', [
            'controller_name' => 'BookingLoginController',
        ]);
    }
}
