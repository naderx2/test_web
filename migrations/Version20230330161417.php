<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230330161417 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article_commande (id INT AUTO_INCREMENT NOT NULL, article_id INT DEFAULT NULL, commande_id INT DEFAULT NULL, INDEX IDX_3B0252167294869C (article_id), INDEX IDX_3B02521682EA2E54 (commande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article_commande ADD CONSTRAINT FK_3B0252167294869C FOREIGN KEY (article_id) REFERENCES article (id)');
        $this->addSql('ALTER TABLE article_commande ADD CONSTRAINT FK_3B02521682EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article_commande DROP FOREIGN KEY FK_3B0252167294869C');
        $this->addSql('ALTER TABLE article_commande DROP FOREIGN KEY FK_3B02521682EA2E54');
        $this->addSql('DROP TABLE article_commande');
    }
}
