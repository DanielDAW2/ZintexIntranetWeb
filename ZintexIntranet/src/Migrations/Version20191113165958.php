<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191113165958 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE t_ordre_treball_dream_ribbons_shop (Id_OT_DRS INT AUTO_INCREMENT NOT NULL, Comanda VARCHAR(255) DEFAULT NULL, Data_Comanda DATETIME DEFAULT NULL, Data_Entrega DATETIME DEFAULT NULL, PRIMARY KEY(Id_OT_DRS)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE t_ordre_treball_dream_ribbons_ shop');
        $this->addSql('ALTER TABLE t_clients ADD tract_cli_id INT DEFAULT NULL, ADD activitat1_id INT DEFAULT NULL, ADD paisfra_cli_id INT DEFAULT NULL, ADD tractent_cli_id INT DEFAULT NULL, ADD paisent_cli_id INT DEFAULT NULL, ADD met_pag_id INT DEFAULT NULL, ADD inst_pag_id INT DEFAULT NULL, DROP Tract_Cli, DROP PaisFra_Cli, DROP TractEnt_Cli, DROP PaisEnt_Cli, DROP Met_Pag, DROP Inst_Pag, DROP Activitat_1');
        $this->addSql('ALTER TABLE t_clients ADD CONSTRAINT FK_5AE49617511700DE FOREIGN KEY (tract_cli_id) REFERENCES t_tractaments (Id_Tract)');
        $this->addSql('ALTER TABLE t_clients ADD CONSTRAINT FK_5AE49617AA83198B FOREIGN KEY (activitat1_id) REFERENCES t_activitat_client (id)');
        $this->addSql('ALTER TABLE t_clients ADD CONSTRAINT FK_5AE49617FC764E3E FOREIGN KEY (paisfra_cli_id) REFERENCES t_paisos (Id_Pais)');
        $this->addSql('ALTER TABLE t_clients ADD CONSTRAINT FK_5AE49617C1C487B7 FOREIGN KEY (tractent_cli_id) REFERENCES t_tractaments (Id_Tract)');
        $this->addSql('ALTER TABLE t_clients ADD CONSTRAINT FK_5AE4961769EE7B17 FOREIGN KEY (paisent_cli_id) REFERENCES t_paisos (Id_Pais)');
        $this->addSql('ALTER TABLE t_clients ADD CONSTRAINT FK_5AE49617BC61A5CD FOREIGN KEY (met_pag_id) REFERENCES t_metode_pag (Id_Metode)');
        $this->addSql('ALTER TABLE t_clients ADD CONSTRAINT FK_5AE496172B185412 FOREIGN KEY (inst_pag_id) REFERENCES t_instrument_pag (Id_Inst_Pag)');
        $this->addSql('CREATE INDEX IDX_5AE49617511700DE ON t_clients (tract_cli_id)');
        $this->addSql('CREATE INDEX IDX_5AE49617AA83198B ON t_clients (activitat1_id)');
        $this->addSql('CREATE INDEX IDX_5AE49617FC764E3E ON t_clients (paisfra_cli_id)');
        $this->addSql('CREATE INDEX IDX_5AE49617C1C487B7 ON t_clients (tractent_cli_id)');
        $this->addSql('CREATE INDEX IDX_5AE4961769EE7B17 ON t_clients (paisent_cli_id)');
        $this->addSql('CREATE INDEX IDX_5AE49617BC61A5CD ON t_clients (met_pag_id)');
        $this->addSql('CREATE INDEX IDX_5AE496172B185412 ON t_clients (inst_pag_id)');
        $this->addSql('ALTER TABLE t_albara CHANGE client_albara client_albara_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE t_albara ADD CONSTRAINT FK_F8494BCB877C5A6A FOREIGN KEY (client_albara_id) REFERENCES t_clients (Id_Cli)');
        $this->addSql('CREATE INDEX IDX_F8494BCB877C5A6A ON t_albara (client_albara_id)');
        $this->addSql('ALTER TABLE t_albara_aux ADD num_albara_id INT NOT NULL, DROP Num_Albara');
        $this->addSql('ALTER TABLE t_albara_aux ADD CONSTRAINT FK_B8F790061E82FEB9 FOREIGN KEY (num_albara_id) REFERENCES t_albara (Id_Albara)');
        $this->addSql('CREATE INDEX IDX_B8F790061E82FEB9 ON t_albara_aux (num_albara_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE t_ordre_treball_dream_ribbons_ shop (Id_OT_DRS INT AUTO_INCREMENT NOT NULL, Comanda VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_0900_ai_ci, Data_Comanda DATETIME DEFAULT NULL, Data_Entrega DATETIME DEFAULT NULL, PRIMARY KEY(Id_OT_DRS)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE t_ordre_treball_dream_ribbons_shop');
        $this->addSql('ALTER TABLE t_albara DROP FOREIGN KEY FK_F8494BCB877C5A6A');
        $this->addSql('DROP INDEX IDX_F8494BCB877C5A6A ON t_albara');
        $this->addSql('ALTER TABLE t_albara CHANGE client_albara_id Client_Albara INT DEFAULT NULL');
        $this->addSql('ALTER TABLE t_albara_aux DROP FOREIGN KEY FK_B8F790061E82FEB9');
        $this->addSql('DROP INDEX IDX_B8F790061E82FEB9 ON t_albara_aux');
        $this->addSql('ALTER TABLE t_albara_aux ADD Num_Albara INT DEFAULT NULL, DROP num_albara_id');
        $this->addSql('ALTER TABLE t_clients DROP FOREIGN KEY FK_5AE49617511700DE');
        $this->addSql('ALTER TABLE t_clients DROP FOREIGN KEY FK_5AE49617AA83198B');
        $this->addSql('ALTER TABLE t_clients DROP FOREIGN KEY FK_5AE49617FC764E3E');
        $this->addSql('ALTER TABLE t_clients DROP FOREIGN KEY FK_5AE49617C1C487B7');
        $this->addSql('ALTER TABLE t_clients DROP FOREIGN KEY FK_5AE4961769EE7B17');
        $this->addSql('ALTER TABLE t_clients DROP FOREIGN KEY FK_5AE49617BC61A5CD');
        $this->addSql('ALTER TABLE t_clients DROP FOREIGN KEY FK_5AE496172B185412');
        $this->addSql('DROP INDEX IDX_5AE49617511700DE ON t_clients');
        $this->addSql('DROP INDEX IDX_5AE49617AA83198B ON t_clients');
        $this->addSql('DROP INDEX IDX_5AE49617FC764E3E ON t_clients');
        $this->addSql('DROP INDEX IDX_5AE49617C1C487B7 ON t_clients');
        $this->addSql('DROP INDEX IDX_5AE4961769EE7B17 ON t_clients');
        $this->addSql('DROP INDEX IDX_5AE49617BC61A5CD ON t_clients');
        $this->addSql('DROP INDEX IDX_5AE496172B185412 ON t_clients');
        $this->addSql('ALTER TABLE t_clients ADD Tract_Cli INT DEFAULT NULL, ADD PaisFra_Cli INT DEFAULT NULL, ADD TractEnt_Cli INT DEFAULT NULL, ADD PaisEnt_Cli INT DEFAULT NULL, ADD Met_Pag INT DEFAULT NULL, ADD Inst_Pag INT DEFAULT NULL, ADD Activitat_1 INT DEFAULT NULL, DROP tract_cli_id, DROP activitat1_id, DROP paisfra_cli_id, DROP tractent_cli_id, DROP paisent_cli_id, DROP met_pag_id, DROP inst_pag_id');
    }
}
