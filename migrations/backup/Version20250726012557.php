<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250726012557 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog_posts CHANGE featured_image featured_image VARCHAR(255) DEFAULT NULL, CHANGE meta_title meta_title VARCHAR(60) DEFAULT NULL, CHANGE meta_description meta_description VARCHAR(160) DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_78B2F932989D9B62 ON blog_posts (slug)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_78B2F932989D9B62 ON blog_posts');
        $this->addSql('ALTER TABLE blog_posts CHANGE featured_image featured_image VARCHAR(255) NOT NULL, CHANGE meta_title meta_title VARCHAR(60) NOT NULL, CHANGE meta_description meta_description VARCHAR(160) NOT NULL');
    }
}
