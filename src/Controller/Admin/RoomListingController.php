<?php

namespace App\Controller\Admin;

use App\Entity\RoomListing;
use App\Form\RoomListingType;
use App\Repository\RoomListingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/roomlisting', name: 'app_admin_roomlisting_')]
class RoomListingController extends AbstractController
{
    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(RoomListingRepository $roomListingRepository): Response
    {
        return $this->render('admin/roomlisting/index.html.twig', [
            'room_listings' => $roomListingRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $roomListing = new RoomListing();
        $form = $this->createForm(RoomListingType::class, $roomListing);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // --- Handle image upload ---
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $newFilename = uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('rooms_images_directory'), // defined in services.yaml
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('error', 'Failed to upload image.');
                }

                $roomListing->setImage($newFilename);
            }

            $entityManager->persist($roomListing);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_roomlisting_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/roomlisting/new.html.twig', [
            'room_listing' => $roomListing,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'show', methods: ['GET'])]
    public function show(RoomListing $roomListing): Response
    {
        return $this->render('admin/roomlisting/show.html.twig', [
            'room_listing' => $roomListing,
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, RoomListing $roomListing, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RoomListingType::class, $roomListing);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // --- Handle image upload ---
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $newFilename = uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('rooms_images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('error', 'Failed to upload image.');
                }

                $roomListing->setImage($newFilename);
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_admin_roomlisting_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/roomlisting/edit.html.twig', [
            'room_listing' => $roomListing,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'delete', methods: ['POST'])]
    public function delete(Request $request, RoomListing $roomListing, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$roomListing->getId(), $request->request->get('_token'))) {
            $entityManager->remove($roomListing);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin_roomlisting_index', [], Response::HTTP_SEE_OTHER);
    }
}
