<?php
// src/Controller/Admin/AdminHomeController.php

namespace App\Controller\Admin;

use App\Entity\RoomListing;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminHomeController extends AbstractController
{
    #[Route('/admin', name: 'app_admin_home')]
    public function home(EntityManagerInterface $em): Response
    {
        $rooms = $em->getRepository(RoomListing::class)->findAll();

        $totalRooms = count($rooms);
        $availableRooms = count(array_filter($rooms, fn($room) => $room->isAvailable()));
        $occupiedRooms = $totalRooms - $availableRooms;

        $totalRevenue = array_sum(array_map(fn($room) => (float)($room->getPricePerNight() ?? 0), $rooms));

        // ----------------------------
        // Generate booking stats per category
        // ----------------------------
        $bookingsStats = [];
        foreach ($rooms as $room) {
            $category = $room->getCategory() ?: 'Other';
            if (!isset($bookingsStats[$category])) {
                $bookingsStats[$category] = 0;
            }
            if (!$room->isAvailable()) {
                $bookingsStats[$category]++; // count only occupied rooms as "booked"
            }
        }

        return $this->render('admin/home.html.twig', [
            'page_title' => 'Admin Dashboard',
            'rooms' => $rooms,
            'total_rooms' => $totalRooms,
            'available_rooms' => $availableRooms,
            'occupied_rooms' => $occupiedRooms,
            'total_revenue' => $totalRevenue,
            'bookingsStats' => $bookingsStats, // safe now
        ]);
    }
}
