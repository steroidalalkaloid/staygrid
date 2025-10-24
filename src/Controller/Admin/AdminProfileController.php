<?php

namespace App\Controller\Admin;

use App\Entity\LogInUsers;
use App\Form\AdminProfileType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/profile')]
class AdminProfileController extends AbstractController
{
    #[Route('/edit', name: 'app_admin_profile_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $userPasswordHasher
    ): Response {
        /** @var LogInUsers|null $adminUser */
        $adminUser = $this->getUser();

        // Only ROLE_ADMIN can access
        if (!$adminUser || !$this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('app_admin_login');
        }

        // Create the form using the correct entity
        $form = $this->createForm(AdminProfileType::class, $adminUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Update password only if a new password is provided
            $plainPassword = $form->get('plainPassword')->getData();
            if ($plainPassword) {
                $adminUser->setPassword(
                    $userPasswordHasher->hashPassword($adminUser, $plainPassword)
                );
            }

            $entityManager->flush();

            $this->addFlash('success', 'Profile updated successfully.');

            // Redirect back to profile edit page
            return $this->redirectToRoute('app_admin_profile_edit');
        }

        // Render the form view
        return $this->render('admin/profile/edit.html.twig', [
            'profileForm' => $form->createView(),
        ]);
    }
}
