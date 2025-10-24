<?php
// src/Entity/RoomListing.php

namespace App\Entity;

use App\Repository\RoomListingRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'roomlisting')]
#[ORM\Entity(repositoryClass: RoomListingRepository::class)]
class RoomListing
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $number = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $category = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(nullable: true)]
    private ?int $capacity = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, name: 'price')]
    private ?string $pricePerNight = null;

    #[ORM\Column]
    private ?bool $isAvailable = false;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    // Rental Duration Fields
    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $startDate = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $endDate = null;

    // Admin-blocked room flag
    #[ORM\Column(type: 'boolean')]
    private bool $isBlocked = false;

    // One Room can have many Bookings
    #[ORM\OneToMany(mappedBy: 'room', targetEntity: Booking::class, orphanRemoval: true, cascade: ['persist', 'remove'])]
    private Collection $bookings;

    public function __construct()
    {
        $this->bookings = new ArrayCollection();
    }

    // ─── BASIC FIELDS ───────────────────────────────────────────────
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(string $number): static
    {
        $this->number = $number;
        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): static
    {
        $this->category = $category;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getCapacity(): ?int
    {
        return $this->capacity;
    }

    public function setCapacity(?int $capacity): static
    {
        $this->capacity = $capacity;
        return $this;
    }

    public function getPricePerNight(): ?float
    {
        return $this->pricePerNight !== null ? (float)$this->pricePerNight : null;
    }

    public function setPricePerNight(?float $price): static
    {
        $this->pricePerNight = $price !== null ? number_format($price, 2, '.', '') : null;
        return $this;
    }

    public function isAvailable(): ?bool
    {
        return $this->isAvailable;
    }

    public function setIsAvailable(bool $isAvailable): static
    {
        $this->isAvailable = $isAvailable;
        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;
        return $this;
    }

    // ─── RENTAL DURATION ───────────────────────────────────────────
    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(?\DateTimeInterface $startDate): static
    {
        $this->startDate = $startDate;
        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTimeInterface $endDate): static
    {
        $this->endDate = $endDate;
        return $this;
    }

    // ─── ADMIN-BLOCKED ROOM ────────────────────────────────────────
    public function isBlocked(): bool
    {
        return $this->isBlocked;
    }

    public function setIsBlocked(bool $isBlocked): static
    {
        $this->isBlocked = $isBlocked;
        return $this;
    }

    // ─── HELPER FUNCTIONS ──────────────────────────────────────────
    public function getDurationDays(): ?int
    {
        if ($this->startDate && $this->endDate) {
            return $this->startDate->diff($this->endDate)->days;
        }
        return null;
    }

    // Check if the room is occupied based on current bookings
    public function isOccupied(): bool
    {
        $today = new \DateTime();

        foreach ($this->bookings as $booking) {
            if ($booking->getStartDate() <= $today && $booking->getEndDate() >= $today) {
                return true;
            }
        }

        return false;
    }

    // Get room status for dashboard: Blocked / Occupied / Available
    public function getStatus(): string
    {
        if ($this->isBlocked) {
            return 'Blocked';
        }

        if ($this->isOccupied()) {
            return 'Occupied';
        }

        return 'Available';
    }

    // ─── RELATIONSHIP WITH BOOKINGS ────────────────────────────────
    /**
     * @return Collection<int, Booking>
     */
    public function getBookings(): Collection
    {
        return $this->bookings;
    }

    public function addBooking(Booking $booking): static
    {
        if (!$this->bookings->contains($booking)) {
            $this->bookings[] = $booking;
            $booking->setRoom($this);
        }

        return $this;
    }

    public function removeBooking(Booking $booking): static
    {
        if ($this->bookings->removeElement($booking)) {
            if ($booking->getRoom() === $this) {
                $booking->setRoom(null);
            }
        }

        return $this;
    }
}
