<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191114160606 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE t_ordre_treball_dream_ribbons_ shop');
        $this->addSql('DROP INDEX Ref_Prod_UNIQUE ON t_productes');
        $this->addSql('ALTER TABLE t_productes ADD grup_producte_id INT DEFAULT NULL, ADD color_id INT DEFAULT NULL, DROP Color, DROP Grup_Producte');
        $this->addSql('ALTER TABLE t_productes ADD CONSTRAINT FK_7F1219A6E71094D FOREIGN KEY (grup_producte_id) REFERENCES t_grup_producte (Id_GrupProducte)');
        $this->addSql('ALTER TABLE t_productes ADD CONSTRAINT FK_7F1219A7ADA1FB5 FOREIGN KEY (color_id) REFERENCES t_colors (Id_Color)');
        $this->addSql('CREATE INDEX IDX_7F1219A6E71094D ON t_productes (grup_producte_id)');
        $this->addSql('CREATE INDEX IDX_7F1219A7ADA1FB5 ON t_productes (color_id)');
        $this->addSql('ALTER TABLE t_productes_prov ADD num_proveidor_id INT NOT NULL, DROP Num_Proveidor');
        $this->addSql('ALTER TABLE t_productes_prov ADD CONSTRAINT FK_6357680EA23BB800 FOREIGN KEY (num_proveidor_id) REFERENCES t_proveidors (Id_Prov)');
        $this->addSql('CREATE INDEX IDX_6357680EA23BB800 ON t_productes_prov (num_proveidor_id)');
        $this->addSql('ALTER TABLE t_productes_tarifa CHANGE id_producte id_producte_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE t_productes_tarifa ADD CONSTRAINT FK_9CF9ECE81EA441D FOREIGN KEY (id_producte_id) REFERENCES t_productes (Id_Prod)');
        $this->addSql('CREATE INDEX IDX_9CF9ECE81EA441D ON t_productes_tarifa (id_producte_id)');
        $this->addSql('ALTER TABLE t_proveidors ADD tract_prov_id INT DEFAULT NULL, ADD inst_pag_id INT DEFAULT NULL, ADD met_pag_id INT DEFAULT NULL, ADD pais_prov_id INT DEFAULT NULL, DROP Tract_Prov, DROP Pais_Prov, DROP Met_Pag, DROP Inst_Pag');
        $this->addSql('ALTER TABLE t_proveidors ADD CONSTRAINT FK_F66130A5513FB5DC FOREIGN KEY (tract_prov_id) REFERENCES t_tractaments (Id_Tract)');
        $this->addSql('ALTER TABLE t_proveidors ADD CONSTRAINT FK_F66130A52B185412 FOREIGN KEY (inst_pag_id) REFERENCES t_instrument_pag (Id_Inst_Pag)');
        $this->addSql('ALTER TABLE t_proveidors ADD CONSTRAINT FK_F66130A5BC61A5CD FOREIGN KEY (met_pag_id) REFERENCES t_metode_pag (Id_Metode)');
        $this->addSql('ALTER TABLE t_proveidors ADD CONSTRAINT FK_F66130A5C0AB40BC FOREIGN KEY (pais_prov_id) REFERENCES t_paisos (Id_Pais)');
        $this->addSql('CREATE INDEX IDX_F66130A5513FB5DC ON t_proveidors (tract_prov_id)');
        $this->addSql('CREATE INDEX IDX_F66130A52B185412 ON t_proveidors (inst_pag_id)');
        $this->addSql('CREATE INDEX IDX_F66130A5BC61A5CD ON t_proveidors (met_pag_id)');
        $this->addSql('CREATE INDEX IDX_F66130A5C0AB40BC ON t_proveidors (pais_prov_id)');
        $this->addSql('ALTER TABLE t_provincies CHANGE id_comunitat id_comunitat_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE t_provincies ADD CONSTRAINT FK_AF5AEC53C82AE73D FOREIGN KEY (id_comunitat_id) REFERENCES t_comunitats_autonomes (Id_Comunitat)');
        $this->addSql('CREATE INDEX IDX_AF5AEC53C82AE73D ON t_provincies (id_comunitat_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE t_ordre_treball_dream_ribbons_ shop (Id_OT_DRS INT AUTO_INCREMENT NOT NULL, Comanda VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_0900_ai_ci, Data_Comanda DATETIME DEFAULT NULL, Data_Entrega DATETIME DEFAULT NULL, PRIMARY KEY(Id_OT_DRS)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE t_productes DROP FOREIGN KEY FK_7F1219A6E71094D');
        $this->addSql('ALTER TABLE t_productes DROP FOREIGN KEY FK_7F1219A7ADA1FB5');
        $this->addSql('DROP INDEX IDX_7F1219A6E71094D ON t_productes');
        $this->addSql('DROP INDEX IDX_7F1219A7ADA1FB5 ON t_productes');
        $this->addSql('ALTER TABLE t_productes ADD Color INT DEFAULT NULL, ADD Grup_Producte INT DEFAULT NULL, DROP grup_producte_id, DROP color_id');
        $this->addSql('CREATE UNIQUE INDEX Ref_Prod_UNIQUE ON t_productes (Ref_Prod)');
        $this->addSql('ALTER TABLE t_productes_prov DROP FOREIGN KEY FK_6357680EA23BB800');
        $this->addSql('DROP INDEX IDX_6357680EA23BB800 ON t_productes_prov');
        $this->addSql('ALTER TABLE t_productes_prov ADD Num_Proveidor INT DEFAULT NULL, DROP num_proveidor_id');
        $this->addSql('ALTER TABLE t_productes_tarifa DROP FOREIGN KEY FK_9CF9ECE81EA441D');
        $this->addSql('DROP INDEX IDX_9CF9ECE81EA441D ON t_productes_tarifa');
        $this->addSql('ALTER TABLE t_productes_tarifa CHANGE id_producte_id Id_Producte INT DEFAULT NULL');
        $this->addSql('ALTER TABLE t_proveidors DROP FOREIGN KEY FK_F66130A5513FB5DC');
        $this->addSql('ALTER TABLE t_proveidors DROP FOREIGN KEY FK_F66130A52B185412');
        $this->addSql('ALTER TABLE t_proveidors DROP FOREIGN KEY FK_F66130A5BC61A5CD');
        $this->addSql('ALTER TABLE t_proveidors DROP FOREIGN KEY FK_F66130A5C0AB40BC');
        $this->addSql('DROP INDEX IDX_F66130A5513FB5DC ON t_proveidors');
        $this->addSql('DROP INDEX IDX_F66130A52B185412 ON t_proveidors');
        $this->addSql('DROP INDEX IDX_F66130A5BC61A5CD ON t_proveidors');
        $this->addSql('DROP INDEX IDX_F66130A5C0AB40BC ON t_proveidors');
        $this->addSql('ALTER TABLE t_proveidors ADD Tract_Prov INT DEFAULT NULL, ADD Pais_Prov INT DEFAULT NULL, ADD Met_Pag INT DEFAULT NULL, ADD Inst_Pag INT DEFAULT NULL, DROP tract_prov_id, DROP inst_pag_id, DROP met_pag_id, DROP pais_prov_id');
        $this->addSql('ALTER TABLE t_provincies DROP FOREIGN KEY FK_AF5AEC53C82AE73D');
        $this->addSql('DROP INDEX IDX_AF5AEC53C82AE73D ON t_provincies');
        $this->addSql('ALTER TABLE t_provincies CHANGE id_comunitat_id Id_Comunitat INT DEFAULT NULL');
    }
}
