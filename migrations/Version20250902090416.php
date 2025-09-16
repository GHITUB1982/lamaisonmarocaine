<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250902090416 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cooperative (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, address LONGTEXT NOT NULL, ville VARCHAR(255) NOT NULL, region VARCHAR(255) NOT NULL, postal VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, phone1 VARCHAR(25) NOT NULL, phone2 VARCHAR(25) NOT NULL, email VARCHAR(150) NOT NULL, website VARCHAR(255) NOT NULL, facebook VARCHAR(150) NOT NULL, instagram VARCHAR(150) NOT NULL, twitter VARCHAR(150) NOT NULL, youtube VARCHAR(150) NOT NULL, linkedin VARCHAR(150) NOT NULL, patente VARCHAR(25) NOT NULL, register_commerce VARCHAR(150) NOT NULL, identifiant_fiscal VARCHAR(150) NOT NULL, cnss VARCHAR(150) NOT NULL, date_creation DATE NOT NULL, secteur_activite VARCHAR(255) NOT NULL, nombre_membres INT NOT NULL, representant_legal VARCHAR(255) NOT NULL, latitude NUMERIC(10, 8) NOT NULL, longitude NUMERIC(11, 8) NOT NULL, horaire LONGTEXT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE cooperative');
    }
}
