<?php
// src/Controller/SecurityController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * This route is used to DISPLAY the login form (GET) 
     * and PROCESS the form submission (POST) via the firewall.
     * * @Route("/login", name="app_login", methods={"GET", "POST"})
     */
#[Route('/login', name: 'app_login', methods: ['GET', 'POST'])]
public function login(AuthenticationUtils $authenticationUtils): Response
{
    $error = $authenticationUtils->getLastAuthenticationError();
    $lastUsername = $authenticationUtils->getLastUsername();

    return $this->render('security/login.html.twig', [
        'last_username' => $lastUsername,
        'error'         => $error,
    ]);
}

#[Route('/logout', name: 'app_logout')]
public function logout(): void
{
    throw new \Exception('This will be intercepted by the firewall.');
}
}