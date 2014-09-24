<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20140919120433 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        
        $this->addSql('CREATE TABLE user_account2user_group (fk_user_account_id INT NOT NULL, fk_user_group_id INT NOT NULL, INDEX IDX_449D70FDE5AFCD63 (fk_user_account_id), INDEX IDX_449D70FD7A934885 (fk_user_group_id), PRIMARY KEY(fk_user_account_id, fk_user_group_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_account2user_group ADD CONSTRAINT FK_449D70FDE5AFCD63 FOREIGN KEY (fk_user_account_id) REFERENCES user_account (id)');
        $this->addSql('ALTER TABLE user_account2user_group ADD CONSTRAINT FK_449D70FD7A934885 FOREIGN KEY (fk_user_group_id) REFERENCES user_account_group (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        
        $this->addSql('DROP TABLE user_account2user_group');
    }
}
