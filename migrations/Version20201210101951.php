<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201210101951 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tbl_theme ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE tbl_theme ADD CONSTRAINT FK_F8D08213A76ED395 FOREIGN KEY (user_id) REFERENCES tbl_User (id)');
        $this->addSql('CREATE INDEX IDX_F8D08213A76ED395 ON tbl_theme (user_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tbl_Theme DROP FOREIGN KEY FK_F8D08213A76ED395');
        $this->addSql('DROP INDEX IDX_F8D08213A76ED395 ON tbl_Theme');
        $this->addSql('ALTER TABLE tbl_Theme DROP user_id');
    }
}
