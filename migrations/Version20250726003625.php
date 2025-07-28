<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250726003625 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog_posts ADD category_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE blog_posts ADD CONSTRAINT FK_78B2F93212469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_78B2F93212469DE2 ON blog_posts (category_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog_posts DROP FOREIGN KEY FK_78B2F93212469DE2');
        $this->addSql('DROP INDEX IDX_78B2F93212469DE2 ON blog_posts');
        $this->addSql('ALTER TABLE blog_posts DROP category_id');
    }
}
