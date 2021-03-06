<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201206135453 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE season CHANGE program_id program_id INT NOT NULL');
        $this->addSql('ALTER TABLE season RENAME INDEX idx_f0e45ba9e12deda1 TO IDX_F0E45BA93EB8070A');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE season CHANGE program_id program_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE season RENAME INDEX idx_f0e45ba93eb8070a TO IDX_F0E45BA9E12DEDA1');
    }
}
