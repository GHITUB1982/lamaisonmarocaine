<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250725234738 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog_posts DROP FOREIGN KEY FK_78B2F93269CCBE9A');
        $this->addSql('ALTER TABLE blog_posts DROP FOREIGN KEY FK_78B2F9329777D11E');
        $this->addSql('DROP INDEX IDX_78B2F93269CCBE9A ON blog_posts');
        $this->addSql('DROP INDEX IDX_78B2F9329777D11E ON blog_posts');
        $this->addSql('ALTER TABLE blog_posts ADD author_id_id INT DEFAULT NULL, ADD category_id_id INT DEFAULT NULL, DROP author_id, DROP category_id');
        $this->addSql('ALTER TABLE blog_posts ADD CONSTRAINT FK_78B2F93269CCBE9A FOREIGN KEY (author_id_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE blog_posts ADD CONSTRAINT FK_78B2F9329777D11E FOREIGN KEY (category_id_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_78B2F93269CCBE9A ON blog_posts (author_id_id)');
        $this->addSql('CREATE INDEX IDX_78B2F9329777D11E ON blog_posts (category_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog_posts DROP FOREIGN KEY FK_78B2F93269CCBE9A');
        $this->addSql('ALTER TABLE blog_posts DROP FOREIGN KEY FK_78B2F9329777D11E');
        $this->addSql('DROP INDEX IDX_78B2F93269CCBE9A ON blog_posts');
        $this->addSql('DROP INDEX IDX_78B2F9329777D11E ON blog_posts');
        $this->addSql('ALTER TABLE blog_posts ADD author_id INT DEFAULT NULL, ADD category_id INT DEFAULT NULL, DROP author_id_id, DROP category_id_id');
        $this->addSql('ALTER TABLE blog_posts ADD CONSTRAINT FK_78B2F93269CCBE9A FOREIGN KEY (author_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE blog_posts ADD CONSTRAINT FK_78B2F9329777D11E FOREIGN KEY (category_id) REFERENCES category (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_78B2F93269CCBE9A ON blog_posts (author_id)');
        $this->addSql('CREATE INDEX IDX_78B2F9329777D11E ON blog_posts (category_id)');
    }
}
