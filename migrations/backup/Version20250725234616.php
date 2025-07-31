<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250725234616 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog_posts ADD author_id INT DEFAULT NULL, ADD category_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE blog_posts ADD CONSTRAINT FK_78B2F93269CCBE9A FOREIGN KEY (author_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE blog_posts ADD CONSTRAINT FK_78B2F9329777D11E FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_78B2F93269CCBE9A ON blog_posts (author_id)');
        $this->addSql('CREATE INDEX IDX_78B2F9329777D11E ON blog_posts (category_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog_posts DROP FOREIGN KEY FK_78B2F93269CCBE9A');
        $this->addSql('ALTER TABLE blog_posts DROP FOREIGN KEY FK_78B2F9329777D11E');
        $this->addSql('DROP INDEX IDX_78B2F93269CCBE9A ON blog_posts');
        $this->addSql('DROP INDEX IDX_78B2F9329777D11E ON blog_posts');
        $this->addSql('ALTER TABLE blog_posts DROP author_id, DROP category_id');
    }
}
