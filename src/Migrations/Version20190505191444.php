<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190505191444 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE new_comment');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE test_time');
        $this->addSql('DROP TABLE user_sin');
        $this->addSql('ALTER TABLE user ADD locale VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user_review CHANGE pub_date pub_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE new_comment (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci, price NUMERIC(10, 2) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE test_time (id INT AUTO_INCREMENT NOT NULL, t1 TIME NOT NULL, t2 TIME NOT NULL COMMENT \'(DC2Type:time_immutable)\', t3 DATETIME NOT NULL, t4 DATETIME NOT NULL, t5 DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', t6 VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, t7 DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', t8 DATETIME NOT NULL COMMENT \'(DC2Type:datetimetz_immutable)\', t9 VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user_sin (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, password VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, email VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE user DROP locale');
        $this->addSql('ALTER TABLE user_review CHANGE pub_date pub_date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
    }
}
