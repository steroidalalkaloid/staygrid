<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityAdminController extends AbstractController
{
    #[Route('/admin/login', name: 'app_admin_login', methods: ['GET', 'POST'])]
    public function login(AuthenticationUtils $authenticationUtils, Request $request): Response
    {
        // Redirect logged-in admins directly to admin home
        $user = $this->getUser();
        if ($user && $this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('app_admin_profile_edit'); // redirect to profile edit page
        }

        // Get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('admin/security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route('/admin/logout', name: 'app_admin_logout')]
    public function logout(): void
    {
        // Controller can be blank: handled by firewall
        throw new \RuntimeException('This method is intercepted by the firewall.');
    }
}
