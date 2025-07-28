<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250725233908 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog_posts ADD meta_title VARCHAR(60) NOT NULL, ADD meta_description VARCHAR(160) NOT NULL, ADD views_count INT NOT NULL, ADD author_id INT NOT NULL');
        $this->addSql('ALTER TABLE category ADD blogposts_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C148CE17D7 FOREIGN KEY (blogposts_id) REFERENCES blog_posts (id)');
        $this->addSql('CREATE INDEX IDX_64C19C148CE17D7 ON category (blogposts_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog_posts DROP meta_title, DROP meta_description, DROP views_count, DROP author_id');
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C148CE17D7');
        $this->addSql('DROP INDEX IDX_64C19C148CE17D7 ON category');
        $this->addSql('ALTER TABLE category DROP blogposts_id');
    }
}
