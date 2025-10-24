<?php

namespace App\Entity;

use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class Admin implements UserInterface, PasswordAuthenticatedUserInterface
{
    private ?string $email = null;
    private ?string $password = null;

    /**
     * Get the email (used as username)
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get the hashed password
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Required by UserInterface: getRoles
     */
    public function getRoles(): array
    {
        // Every admin has at least ROLE_ADMIN
        return ['ROLE_ADMIN'];
    }

    /**
     * Required by UserInterface: returns the identifier (username/email)
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * Required by UserInterface: clears any temporary sensitive data
     */
    public function eraseCredentials(): void
    {
        // If you store temporary sensitive data, clear it here
    }
}
