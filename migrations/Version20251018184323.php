<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251018184323 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tasks (id INT AUTO_INCREMENT NOT NULL, user_id_id INT NOT NULL, content VARCHAR(255) DEFAULT NULL, status TINYINT(1) NOT NULL, color VARCHAR(20) DEFAULT NULL, INDEX IDX_505865979D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tasks ADD CONSTRAINT FK_505865979D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user ADD username VARCHAR(64) NOT NULL, ADD first_name VARCHAR(32) DEFAULT NULL, ADD last_name VARCHAR(32) DEFAULT NULL, ADD phone VARCHAR(20) DEFAULT NULL, ADD country VARCHAR(50) DEFAULT NULL, ADD image VARCHAR(2048) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tasks DROP FOREIGN KEY FK_505865979D86650F');
        $this->addSql('DROP TABLE tasks');
        $this->addSql('ALTER TABLE user DROP username, DROP first_name, DROP last_name, DROP phone, DROP country, DROP image');
    }
}
