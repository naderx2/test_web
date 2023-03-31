<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230329231204 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, amount VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, discount VARCHAR(255) DEFAULT NULL, item VARCHAR(255) NOT NULL, item_description VARCHAR(255) DEFAULT NULL, quantity INT NOT NULL, unit_code VARCHAR(255) DEFAULT NULL, unit_description VARCHAR(255) DEFAULT NULL, unit_price VARCHAR(255) DEFAULT NULL, vat_amount VARCHAR(255) DEFAULT NULL, vatpercentage VARCHAR(255) DEFAULT NULL, vatamount VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE article');
    }
}
