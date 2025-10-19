<?php

namespace App\Controller;

use App\Entity\RoomListing;
use App\Form\RoomListingType;
use App\Repository\RoomListingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/roomlisting')]
class RoomListingController extends AbstractController
{
    #[Route('/', name: 'app_roomlisting_index', methods: ['GET'])]
    public function index(RoomListingRepository $roomListingRepository): Response
    {
        return $this->render('roomlisting/index.html.twig', [
            'room_listings' => $roomListingRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_roomlisting_new', methods: ['GET', 'POST'])]
    // Cleaned up the method signature (removed FileUploader)
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $roomListing = new RoomListing();
        $form = $this->createForm(RoomListingType::class, $roomListing);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // File upload logic removed entirely

            $entityManager->persist($roomListing);
            $entityManager->flush();

            return $this->redirectToRoute('app_roomlisting_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('roomlisting/new.html.twig', [
            'room_listing' => $roomListing,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_roomlisting_show', methods: ['GET'])]
    public function show(RoomListing $roomListing): Response
    {
        return $this->render('roomlisting/show.html.twig', [
            'room_listing' => $roomListing,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_roomlisting_edit', methods: ['GET', 'POST'])]
    // Cleaned up the method signature (removed FileUploader)
    public function edit(Request $request, RoomListing $roomListing, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RoomListingType::class, $roomListing);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // File upload logic removed entirely
            
            $entityManager->flush();

            return $this->redirectToRoute('app_roomlisting_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('roomlisting/edit.html.twig', [
            'room_listing' => $roomListing,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_roomlisting_delete', methods: ['POST'])]
    public function delete(Request $request, RoomListing $roomListing, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$roomListing->getId(), $request->getPayload()->getString('_token'))) {
            // File deletion logic removed
            
            $entityManager->remove($roomListing);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_roomlisting_index', [], Response::HTTP_SEE_OTHER);
    }
}