<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240420114814 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE `admin`');
        $this->addSql('ALTER TABLE property ADD videos VARCHAR(255) DEFAULT NULL, ADD parking_available INT DEFAULT NULL, DROP video, DROP bedroom_number, DROP location, DROP avalaible_parking, CHANGE safety safety VARCHAR(255) DEFAULT NULL, CHANGE is_main_slider is_main_slider TINYINT(1) DEFAULT NULL, CHANGE is_featured is_featured TINYINT(1) DEFAULT NULL, CHANGE payment payment_method VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `admin` (id INT AUTO_INCREMENT NOT NULL, uuid VARCHAR(180) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, roles JSON NOT NULL, password VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, username VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_IDENTIFIER_UUID (uuid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE property ADD bedroom_number INT NOT NULL, ADD location VARCHAR(255) DEFAULT NULL, ADD avalaible_parking INT NOT NULL, DROP parking_available, CHANGE is_featured is_featured TINYINT(1) NOT NULL, CHANGE is_main_slider is_main_slider TINYINT(1) NOT NULL, CHANGE safety safety VARCHAR(255) NOT NULL, CHANGE videos video VARCHAR(255) DEFAULT NULL, CHANGE payment_method payment VARCHAR(255) NOT NULL');
    }
}
