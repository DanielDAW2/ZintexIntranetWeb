<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191216195114 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE t_clients ADD CONSTRAINT FK_5AE49617CEA560CE FOREIGN KEY (Num_Agent_Comercial) REFERENCES t_comercials (Id_Comercial)');
        $this->addSql('CREATE INDEX IDX_5AE49617CEA560CE ON t_clients (Num_Agent_Comercial)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE t_clients DROP FOREIGN KEY FK_5AE49617CEA560CE');
        $this->addSql('DROP INDEX IDX_5AE49617CEA560CE ON t_clients');
    }
}
