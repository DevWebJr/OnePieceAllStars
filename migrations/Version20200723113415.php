<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200723113415 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE arc (id INT AUTO_INCREMENT NOT NULL, kingdom_id INT NOT NULL, name VARCHAR(255) NOT NULL, summary LONGTEXT NOT NULL, INDEX IDX_7FE653936976FEC0 (kingdom_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `character` (id INT AUTO_INCREMENT NOT NULL, crew_id INT DEFAULT NULL, category_id INT NOT NULL, name VARCHAR(255) NOT NULL, story LONGTEXT DEFAULT NULL, portrait VARCHAR(255) NOT NULL, video VARCHAR(255) DEFAULT NULL, INDEX IDX_937AB0345FE259F6 (crew_id), INDEX IDX_937AB03412469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE crew (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fruit (id INT AUTO_INCREMENT NOT NULL, sort_of_fruit_id INT NOT NULL, name VARCHAR(255) NOT NULL, capacity LONGTEXT NOT NULL, image VARCHAR(255) DEFAULT NULL, INDEX IDX_A00BD2975EDD3CB0 (sort_of_fruit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fruit_character (fruit_id INT NOT NULL, character_id INT NOT NULL, INDEX IDX_DDA1243EBAC115F0 (fruit_id), INDEX IDX_DDA1243E1136BE75 (character_id), PRIMARY KEY(fruit_id, character_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE haki (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE haki_character (haki_id INT NOT NULL, character_id INT NOT NULL, INDEX IDX_F26FF2E7D751E3F4 (haki_id), INDEX IDX_F26FF2E71136BE75 (character_id), PRIMARY KEY(haki_id, character_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE kingdom (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ship (id INT AUTO_INCREMENT NOT NULL, crew_id INT NOT NULL, name VARCHAR(255) NOT NULL, portrait VARCHAR(255) DEFAULT NULL, flag VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_FA30EB245FE259F6 (crew_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sort_of_fruit (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE wanted (id INT AUTO_INCREMENT NOT NULL, holder_id INT DEFAULT NULL, mount INT NOT NULL, UNIQUE INDEX UNIQ_D9E3B838DEEE62D0 (holder_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE arc ADD CONSTRAINT FK_7FE653936976FEC0 FOREIGN KEY (kingdom_id) REFERENCES kingdom (id)');
        $this->addSql('ALTER TABLE `character` ADD CONSTRAINT FK_937AB0345FE259F6 FOREIGN KEY (crew_id) REFERENCES crew (id)');
        $this->addSql('ALTER TABLE `character` ADD CONSTRAINT FK_937AB03412469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE fruit ADD CONSTRAINT FK_A00BD2975EDD3CB0 FOREIGN KEY (sort_of_fruit_id) REFERENCES sort_of_fruit (id)');
        $this->addSql('ALTER TABLE fruit_character ADD CONSTRAINT FK_DDA1243EBAC115F0 FOREIGN KEY (fruit_id) REFERENCES fruit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fruit_character ADD CONSTRAINT FK_DDA1243E1136BE75 FOREIGN KEY (character_id) REFERENCES `character` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE haki_character ADD CONSTRAINT FK_F26FF2E7D751E3F4 FOREIGN KEY (haki_id) REFERENCES haki (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE haki_character ADD CONSTRAINT FK_F26FF2E71136BE75 FOREIGN KEY (character_id) REFERENCES `character` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ship ADD CONSTRAINT FK_FA30EB245FE259F6 FOREIGN KEY (crew_id) REFERENCES crew (id)');
        $this->addSql('ALTER TABLE wanted ADD CONSTRAINT FK_D9E3B838DEEE62D0 FOREIGN KEY (holder_id) REFERENCES `character` (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `character` DROP FOREIGN KEY FK_937AB03412469DE2');
        $this->addSql('ALTER TABLE fruit_character DROP FOREIGN KEY FK_DDA1243E1136BE75');
        $this->addSql('ALTER TABLE haki_character DROP FOREIGN KEY FK_F26FF2E71136BE75');
        $this->addSql('ALTER TABLE wanted DROP FOREIGN KEY FK_D9E3B838DEEE62D0');
        $this->addSql('ALTER TABLE `character` DROP FOREIGN KEY FK_937AB0345FE259F6');
        $this->addSql('ALTER TABLE ship DROP FOREIGN KEY FK_FA30EB245FE259F6');
        $this->addSql('ALTER TABLE fruit_character DROP FOREIGN KEY FK_DDA1243EBAC115F0');
        $this->addSql('ALTER TABLE haki_character DROP FOREIGN KEY FK_F26FF2E7D751E3F4');
        $this->addSql('ALTER TABLE arc DROP FOREIGN KEY FK_7FE653936976FEC0');
        $this->addSql('ALTER TABLE fruit DROP FOREIGN KEY FK_A00BD2975EDD3CB0');
        $this->addSql('DROP TABLE arc');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE `character`');
        $this->addSql('DROP TABLE crew');
        $this->addSql('DROP TABLE fruit');
        $this->addSql('DROP TABLE fruit_character');
        $this->addSql('DROP TABLE haki');
        $this->addSql('DROP TABLE haki_character');
        $this->addSql('DROP TABLE kingdom');
        $this->addSql('DROP TABLE ship');
        $this->addSql('DROP TABLE sort_of_fruit');
        $this->addSql('DROP TABLE wanted');
    }
}
