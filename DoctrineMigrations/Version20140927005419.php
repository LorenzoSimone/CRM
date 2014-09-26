<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20140927005419 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        
        $this->addSql('CREATE TABLE administration_system_module (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, active TINYINT(1) DEFAULT NULL, showInMenu TINYINT(1) DEFAULT NULL, required TINYINT(1) NOT NULL, menu_item_text VARCHAR(255) NOT NULL, menu_order INT DEFAULT NULL, developer_name VARCHAR(255) DEFAULT NULL, developer_url VARCHAR(255) DEFAULT NULL, system_main_route VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE SystemModule');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        
        $this->addSql('CREATE TABLE SystemModule (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, active TINYINT(1) DEFAULT NULL, menu_item_text VARCHAR(255) NOT NULL, required TINYINT(1) NOT NULL, developer_name VARCHAR(255) DEFAULT NULL, developer_url VARCHAR(255) DEFAULT NULL, menu_order INT DEFAULT NULL, system_main_route VARCHAR(255) NOT NULL, showInMenu TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE administration_system_module');
    }
}
