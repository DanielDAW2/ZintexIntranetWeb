<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191202164013 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE talbarra_aux (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE t_ordre_treball_dream_ribbons_ shop');
        $this->addSql('ALTER TABLE t_albara CHANGE Facturable_Albara Facturable_Albara TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE t_albara_aux CHANGE codprod_albara codprod_albara_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE t_albara_aux ADD CONSTRAINT FK_B8F79006DE3F184D FOREIGN KEY (codprod_albara_id) REFERENCES t_productes (Id_Prod)');
        $this->addSql('CREATE INDEX IDX_B8F79006DE3F184D ON t_albara_aux (codprod_albara_id)');
        $this->addSql('ALTER TABLE t_clients_mails DROP FOREIGN KEY FK_91C351031D898556');
        $this->addSql('ALTER TABLE t_clients_mails ADD Num_Client_Mail INT NOT NULL');
        $this->addSql('ALTER TABLE t_clients_mails ADD CONSTRAINT FK_91C3510354343CB5 FOREIGN KEY (Num_Client_Mail) REFERENCES t_clients (Id_Cli)');
        $this->addSql('CREATE INDEX IDX_91C3510354343CB5 ON t_clients_mails (Num_Client_Mail)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE t_ordre_treball_dream_ribbons_ shop (Id_OT_DRS INT AUTO_INCREMENT NOT NULL, Comanda VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci`, Data_Comanda DATETIME DEFAULT NULL, Data_Entrega DATETIME DEFAULT NULL, PRIMARY KEY(Id_OT_DRS)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE talbarra_aux');
        $this->addSql('ALTER TABLE t_albara CHANGE Facturable_Albara Facturable_Albara INT DEFAULT NULL');
        $this->addSql('ALTER TABLE t_albara_aux DROP FOREIGN KEY FK_B8F79006DE3F184D');
        $this->addSql('DROP INDEX IDX_B8F79006DE3F184D ON t_albara_aux');
        $this->addSql('ALTER TABLE t_albara_aux CHANGE codprod_albara_id CodProd_Albara INT DEFAULT NULL');
        $this->addSql('ALTER TABLE t_clients_mails DROP FOREIGN KEY FK_91C3510354343CB5');
        $this->addSql('DROP INDEX IDX_91C3510354343CB5 ON t_clients_mails');
        $this->addSql('ALTER TABLE t_clients_mails DROP Num_Client_Mail');
        $this->addSql('ALTER TABLE t_clients_mails ADD CONSTRAINT FK_91C351031D898556 FOREIGN KEY (Id_Cli_Mail) REFERENCES t_clients (Id_Cli) ON UPDATE NO ACTION ON DELETE NO ACTION');
    }
}
