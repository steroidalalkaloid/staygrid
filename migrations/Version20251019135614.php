<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251019135614 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE crud_room (id INT AUTO_INCREMENT NOT NULL, number VARCHAR(10) NOT NULL, capacity INT NOT NULL, price DOUBLE PRECISION NOT NULL, description LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE roomlisting ADD is_available TINYINT(1) NOT NULL, CHANGE number number VARCHAR(255) NOT NULL, CHANGE capacity capacity INT DEFAULT NULL, CHANGE price price NUMERIC(10, 2) NOT NULL, CHANGE description description LONGTEXT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE crud_room');
        $this->addSql('ALTER TABLE roomlisting DROP is_available, CHANGE number number VARCHAR(10) NOT NULL, CHANGE description description LONGTEXT NOT NULL, CHANGE capacity capacity INT NOT NULL, CHANGE price price DOUBLE PRECISION NOT NULL');
    }
}
