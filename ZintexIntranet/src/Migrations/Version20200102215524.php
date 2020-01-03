<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200102215524 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE t_precios_cantidad DROP FOREIGN KEY FK_5737A40A7645698E');
        $this->addSql('DROP INDEX IDX_5737A40A7645698E ON t_precios_cantidad');
        $this->addSql('ALTER TABLE t_precios_cantidad CHANGE producto_id Ref_Prod VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE t_precios_cantidad CHANGE ref_prod producto_id VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE t_precios_cantidad ADD CONSTRAINT FK_5737A40A7645698E FOREIGN KEY (producto_id) REFERENCES t_productes (Ref_Prod) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_5737A40A7645698E ON t_precios_cantidad (producto_id)');
    }
}
