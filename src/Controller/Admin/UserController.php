<?php

namespace App\Controller\Admin;

use App\Repository\LogInUsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/users')]
class UserController extends AbstractController
{
    #[Route('/', name: 'app_admin_users_index')]
    public function index(LogInUsersRepository $userRepository): Response
    {
        // Option A (simple): show all users
        $users = $userRepository->findAll();

        // Option B (if you have isVerified field)
        // $users = $userRepository->findBy(['isVerified' => true]);

        return $this->render('admin/users/index.html.twig', [
            'users' => $users,
        ]);
    }
}
