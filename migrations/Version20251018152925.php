<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251018152925 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE roomlisting ADD main_photo_filename VARCHAR(255) DEFAULT NULL, ADD bedroom_photo_filename VARCHAR(255) DEFAULT NULL, ADD kitchen_photo_filename VARCHAR(255) DEFAULT NULL, ADD living_area_photo_filename VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE roomlisting DROP main_photo_filename, DROP bedroom_photo_filename, DROP kitchen_photo_filename, DROP living_area_photo_filename');
    }
}
