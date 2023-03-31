<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230330161117 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande ADD deliver_to_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D6D7914CF FOREIGN KEY (deliver_to_id) REFERENCES contact (id)');
        $this->addSql('CREATE INDEX IDX_6EEAA67D6D7914CF ON commande (deliver_to_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D6D7914CF');
        $this->addSql('DROP INDEX IDX_6EEAA67D6D7914CF ON commande');
        $this->addSql('ALTER TABLE commande DROP deliver_to_id');
    }
}
