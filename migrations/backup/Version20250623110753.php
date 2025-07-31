<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250623110753 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // // this up() migration is auto-generated, please modify it to your needs
        // $this->addSql('DROP INDEX IDX_845CA2C18C0FA77 ON order_details');
        // $this->addSql('ALTER TABLE order_details ADD order_id INT NOT NULL, DROP order_details_id');
        // $this->addSql('ALTER TABLE order_details ADD CONSTRAINT FK_845CA2C18D9F6D38 FOREIGN KEY (order_id) REFERENCES `order` (id)');
        // $this->addSql('CREATE INDEX IDX_845CA2C18D9F6D38 ON order_details (order_id)');
    }

    public function down(Schema $schema): void
    {
        // // this down() migration is auto-generated, please modify it to your needs
        // $this->addSql('ALTER TABLE order_details DROP FOREIGN KEY FK_845CA2C18D9F6D38');
        // $this->addSql('DROP INDEX IDX_845CA2C18D9F6D38 ON order_details');
        // $this->addSql('ALTER TABLE order_details ADD order_details_id INT DEFAULT NULL, DROP order_id');
        // $this->addSql('CREATE INDEX IDX_845CA2C18C0FA77 ON order_details (order_details_id)');
    }
}
