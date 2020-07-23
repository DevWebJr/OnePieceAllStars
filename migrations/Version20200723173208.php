<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200723173208 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE place (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE kingdom ADD place_id INT NOT NULL');
        $this->addSql('ALTER TABLE kingdom ADD CONSTRAINT FK_256D9614DA6A219 FOREIGN KEY (place_id) REFERENCES place (id)');
        $this->addSql('CREATE INDEX IDX_256D9614DA6A219 ON kingdom (place_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE kingdom DROP FOREIGN KEY FK_256D9614DA6A219');
        $this->addSql('DROP TABLE place');
        $this->addSql('DROP INDEX IDX_256D9614DA6A219 ON kingdom');
        $this->addSql('ALTER TABLE kingdom DROP place_id');
    }
}
