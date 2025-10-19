<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251019100546 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE room_listing ADD croom VARCHAR(255) NOT NULL, ADD description LONGTEXT DEFAULT NULL, ADD price DOUBLE PRECISION NOT NULL, ADD capacity INT NOT NULL, DROP number');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE room_listing ADD number VARCHAR(10) NOT NULL, DROP croom, DROP description, DROP price, DROP capacity');
    }
}
