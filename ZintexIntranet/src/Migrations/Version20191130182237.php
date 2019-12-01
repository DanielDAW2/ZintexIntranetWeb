<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191130182237 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE t_comanda_prov (Id_Comanda_Prov INT AUTO_INCREMENT NOT NULL, Ref_Comanda_Prov VARCHAR(255) DEFAULT NULL, Num_Proveidor_Comanda INT DEFAULT NULL, Descrip_Comanda VARCHAR(255) DEFAULT NULL, Data_Comanda DATETIME DEFAULT NULL, Autor_Comanda INT DEFAULT NULL, Demana_Comanda INT DEFAULT NULL, Facturat TINYINT(1) DEFAULT NULL, PRIMARY KEY(Id_Comanda_Prov)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_comanda_prov_aux (Id_Comanda_Prov_Aux INT AUTO_INCREMENT NOT NULL, Num_Comanda_Prov INT DEFAULT NULL, Num_Prod_Prov INT DEFAULT NULL, Descrip_Prod_Prov VARCHAR(50) DEFAULT NULL, Num_Unit_Prod DOUBLE PRECISION DEFAULT NULL, Preu_Unit_Prod DOUBLE PRECISION DEFAULT NULL, Preu_Total_Prod DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(Id_Comanda_Prov_Aux)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_comercials (Id_Comercial INT AUTO_INCREMENT NOT NULL, Codi_Comercial VARCHAR(50) DEFAULT NULL, Nom_Comercial VARCHAR(255) DEFAULT NULL, PRIMARY KEY(Id_Comercial)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_comptador_comanda (Id_Comptador_Comanda INT AUTO_INCREMENT NOT NULL, Comptador_Comanda SMALLINT DEFAULT NULL, PRIMARY KEY(Id_Comptador_Comanda)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_comunitats_autonomes (Id_Comunitat INT AUTO_INCREMENT NOT NULL, Comunitat VARCHAR(50) DEFAULT NULL, PRIMARY KEY(Id_Comunitat)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_empreses (Id INT AUTO_INCREMENT NOT NULL, Marca VARCHAR(50) DEFAULT NULL, Empresa VARCHAR(50) DEFAULT NULL, Titular VARCHAR(50) DEFAULT NULL, NIF VARCHAR(50) DEFAULT NULL, Direccio VARCHAR(50) DEFAULT NULL, CodPos VARCHAR(50) DEFAULT NULL, Poblacio VARCHAR(50) DEFAULT NULL, Telefon VARCHAR(50) DEFAULT NULL, Fax VARCHAR(50) DEFAULT NULL, Email VARCHAR(50) DEFAULT NULL, Web VARCHAR(50) DEFAULT NULL, Num_Presup INT DEFAULT NULL, Num_Proforma INT DEFAULT NULL, Num_Albara INT DEFAULT NULL, Num_Fra INT DEFAULT NULL, Num_Client INT DEFAULT NULL, Num_FraRectif INT DEFAULT NULL, Path_Logo VARCHAR(200) DEFAULT NULL, PRIMARY KEY(Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_empreses_path (Id_Empresa_Path INT AUTO_INCREMENT NOT NULL, Id_Empresa INT DEFAULT NULL, Num_Any VARCHAR(50) DEFAULT NULL, Carpeta_Pressupost VARCHAR(200) DEFAULT NULL, Carpeta_Proforma VARCHAR(200) DEFAULT NULL, Carpeta_Factura VARCHAR(200) DEFAULT NULL, PRIMARY KEY(Id_Empresa_Path)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_factura_aux (Id_Factura_Aux INT AUTO_INCREMENT NOT NULL, Num_Linia INT DEFAULT NULL, DescripProd_Factura VARCHAR(1000) DEFAULT NULL, DescripParamImp_Factura VARCHAR(255) DEFAULT NULL, NumUnit_Factura DOUBLE PRECISION DEFAULT NULL, PreuUnit_Factura DOUBLE PRECISION DEFAULT NULL, Preu_Factura DOUBLE PRECISION DEFAULT NULL, Baixa TINYINT(1) DEFAULT NULL, Codi_Factura VARCHAR(255) DEFAULT NULL, Num_Factura INT NOT NULL, CodProd_Factura INT DEFAULT NULL, CodParamImp_Factura INT DEFAULT NULL, Grup_Producte INT DEFAULT NULL, INDEX IDX_7A63433675C90CAB (Num_Factura), INDEX IDX_7A634336843C001E (CodProd_Factura), INDEX IDX_7A63433626893C53 (CodParamImp_Factura), INDEX IDX_7A63433681669A0 (Grup_Producte), PRIMARY KEY(Id_Factura_Aux)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_factura_prov (Id_Factura_Prov INT AUTO_INCREMENT NOT NULL, Num_FraProv VARCHAR(50) DEFAULT NULL, Data_FraProv DATETIME DEFAULT NULL, Data_Vto_FraProv DATETIME DEFAULT NULL, Data_Entrada_Prov DATETIME DEFAULT NULL, BImp_FraProv DOUBLE PRECISION DEFAULT NULL, IVA_FraProv DOUBLE PRECISION DEFAULT NULL, Total_FraProv DOUBLE PRECISION DEFAULT NULL, IVA_Inclos TINYINT(1) DEFAULT NULL, Import_Pendent DOUBLE PRECISION DEFAULT NULL, Import_Pagat DOUBLE PRECISION DEFAULT NULL, RE_DTO DOUBLE PRECISION DEFAULT NULL, Exent_IVA DOUBLE PRECISION DEFAULT NULL, Proveidor INT NOT NULL, INDEX IDX_4CCD6FB7DEE755D5 (Proveidor), PRIMARY KEY(Id_Factura_Prov)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_factura_prov_vto (Id_Factura_Prov_Vto INT AUTO_INCREMENT NOT NULL, Data_FraProv_Vto DATETIME DEFAULT NULL, Concepte_FraProv_Vto VARCHAR(200) DEFAULT NULL, InstPag_Aux_FraProv_Vto VARCHAR(255) DEFAULT NULL, Import_FraProv_Vto DOUBLE PRECISION DEFAULT NULL, DataPag_FraProv_Vto DATETIME DEFAULT NULL, OKBanc_FraProv_Vto DATETIME DEFAULT NULL, Num_FraProv_Vto INT DEFAULT NULL, InstPag_FraProv_Vto INT DEFAULT NULL, INDEX IDX_B6184AB7D21EC69D (Num_FraProv_Vto), INDEX IDX_B6184AB762419F3B (InstPag_FraProv_Vto), PRIMARY KEY(Id_Factura_Prov_Vto)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_factura_vto_aux (Id_Factura_Vto_Aux INT AUTO_INCREMENT NOT NULL, Data_Factura DATETIME DEFAULT NULL, Num_Factura VARCHAR(50) DEFAULT NULL, Total_Fra DOUBLE PRECISION DEFAULT NULL, Import_Pendent DOUBLE PRECISION DEFAULT NULL, Import_Pagat DOUBLE PRECISION DEFAULT NULL, Data_Vto_1 DATETIME DEFAULT NULL, DataPag_Vto_1 DATETIME DEFAULT NULL, Inst_Pag_Vto_1 INT DEFAULT NULL, Import_Vto_1 DOUBLE PRECISION DEFAULT NULL, Import_Pag_Vto_1 DOUBLE PRECISION DEFAULT NULL, OKBanc_Vto_1 DATETIME DEFAULT NULL, Id_Factura_Vto_2 INT DEFAULT NULL, Data_Vto_2 DATETIME DEFAULT NULL, DataPag_Vto_2 DATETIME DEFAULT NULL, Inst_Pag_Vto_2 INT DEFAULT NULL, Import_Vto_2 DOUBLE PRECISION DEFAULT NULL, Import_Pag_Vto_2 DOUBLE PRECISION DEFAULT NULL, OKBanc_Vto_2 DATETIME DEFAULT NULL, Id_Factura_Vto_3 INT DEFAULT NULL, Data_Vto_3 DATETIME DEFAULT NULL, DataPag_Vto_3 DATETIME DEFAULT NULL, Inst_Pag_Vto_3 INT DEFAULT NULL, Import_Vto_3 DOUBLE PRECISION DEFAULT NULL, Import_Pag_Vto_3 DOUBLE PRECISION DEFAULT NULL, OKBanc_Vto_3 DATETIME DEFAULT NULL, Id_Factura INT DEFAULT NULL, Client_Factura INT DEFAULT NULL, Id_Factura_Vto_1 INT DEFAULT NULL, INDEX IDX_15D01B97A7963335 (Id_Factura), INDEX IDX_15D01B97A90FA530 (Client_Factura), INDEX IDX_15D01B97C6487A48 (Id_Factura_Vto_1), PRIMARY KEY(Id_Factura_Vto_Aux)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_fitxers_tarifes (Id_Fitxer INT AUTO_INCREMENT NOT NULL, Producte VARCHAR(50) DEFAULT NULL, Path_Fitxer VARCHAR(255) DEFAULT NULL, Nom_Fitxer VARCHAR(50) DEFAULT NULL, PRIMARY KEY(Id_Fitxer)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_fitxers_tarifes_esp (Id_Fitxer INT AUTO_INCREMENT NOT NULL, Producte VARCHAR(50) DEFAULT NULL, Path_Fitxer VARCHAR(255) DEFAULT NULL, Nom_Fitxer VARCHAR(50) DEFAULT NULL, PRIMARY KEY(Id_Fitxer)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_fraproforma (Id_FraProf INT AUTO_INCREMENT NOT NULL, Persona_FraProf VARCHAR(50) DEFAULT NULL, Data_FraProf DATETIME DEFAULT NULL, Num_FraProf VARCHAR(255) DEFAULT NULL, Ref_Presup VARCHAR(255) DEFAULT NULL, Ref_Albara VARCHAR(255) DEFAULT NULL, Ref_Factura VARCHAR(255) DEFAULT NULL, NRef VARCHAR(255) DEFAULT NULL, SRef VARCHAR(255) DEFAULT NULL, Valorada TINYINT(1) DEFAULT NULL, Base_Imp DOUBLE PRECISION DEFAULT NULL, IVA DOUBLE PRECISION DEFAULT NULL, REQ DOUBLE PRECISION DEFAULT NULL, IVA_VAR DOUBLE PRECISION DEFAULT NULL, REQ_VAR DOUBLE PRECISION DEFAULT NULL, Total_Fra DOUBLE PRECISION DEFAULT NULL, Import_Pendent DOUBLE PRECISION DEFAULT NULL, Import_Pagat DOUBLE PRECISION DEFAULT NULL, MetPag_Aux VARCHAR(1000) DEFAULT NULL, Observ_FraProf VARCHAR(1200) DEFAULT NULL, Seguiment VARCHAR(1000) DEFAULT NULL, Data_Gravacio DATETIME DEFAULT NULL, Hora_Gravacio DATETIME DEFAULT NULL, Acceptada TINYINT(1) DEFAULT NULL, Data_Acceptacio DATETIME DEFAULT NULL, Hora_Acceptacio DATETIME DEFAULT NULL, Ultim_Pagament DATETIME DEFAULT NULL, Facturar TINYINT(1) DEFAULT NULL, Data_Produccio DATETIME DEFAULT NULL, Hora_Produccio DATETIME DEFAULT NULL, Produccio TINYINT(1) DEFAULT NULL, Client_FraProf INT DEFAULT NULL, Metode_Pag INT DEFAULT NULL, Num_Autor INT DEFAULT NULL, Num_Autor_Proforma INT DEFAULT NULL, INDEX IDX_DCB2796B1D9A5136 (Client_FraProf), INDEX IDX_DCB2796B598BA9C3 (Metode_Pag), INDEX IDX_DCB2796B35B4426B (Num_Autor), INDEX IDX_DCB2796B6136AFA4 (Num_Autor_Proforma), PRIMARY KEY(Id_FraProf)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_fraproforma_aux (Id_FraProforma_Aux INT AUTO_INCREMENT NOT NULL, Num_Linia INT DEFAULT NULL, DescripProd_Proforma VARCHAR(1000) DEFAULT NULL, DescripParamImp_Proforma VARCHAR(255) DEFAULT NULL, NumUnit_Proforma DOUBLE PRECISION DEFAULT NULL, PreuUnit_Proforma DOUBLE PRECISION DEFAULT NULL, Preu_Proforma DOUBLE PRECISION DEFAULT NULL, Baixa TINYINT(1) DEFAULT NULL, Marcat TINYINT(1) DEFAULT NULL, Prod_Principal TINYINT(1) DEFAULT NULL, Codi_FraProforma VARCHAR(255) DEFAULT NULL, Num_Proforma INT NOT NULL, Grup_Producte INT DEFAULT NULL, CodProd_Proforma INT DEFAULT NULL, CodParamImp_Proforma INT DEFAULT NULL, INDEX IDX_1938645ABBD74FBE (Num_Proforma), INDEX IDX_1938645A81669A0 (Grup_Producte), INDEX IDX_1938645A2DFDB1 (CodProd_Proforma), INDEX IDX_1938645A8E275A0 (CodParamImp_Proforma), PRIMARY KEY(Id_FraProforma_Aux)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_fraproforma_plazos (Id_FraProforma_Plazo INT AUTO_INCREMENT NOT NULL, DescripProd_FraProf_Plazo VARCHAR(255) DEFAULT NULL, Baixa TINYINT(1) DEFAULT NULL, Num_FraProforma INT DEFAULT NULL, CodProd_FraProf_Plazo INT DEFAULT NULL, INDEX IDX_4D9DE2E0129C39D (Num_FraProforma), INDEX IDX_4D9DE2E02081527 (CodProd_FraProf_Plazo), PRIMARY KEY(Id_FraProforma_Plazo)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_fraproforma_vto (Id_FraProforma_Vto INT AUTO_INCREMENT NOT NULL, Concepte_Vto VARCHAR(200) DEFAULT NULL, InstPag_Aux VARCHAR(1000) DEFAULT NULL, Import_Vto DOUBLE PRECISION DEFAULT NULL, DataPag_Vto DATETIME DEFAULT NULL, ImportPag_Vto DOUBLE PRECISION DEFAULT NULL, OKBanc_Vto DATETIME DEFAULT NULL, Num_Proforma INT DEFAULT NULL, InstPag INT DEFAULT NULL, INDEX IDX_9A996529BBD74FBE (Num_Proforma), INDEX IDX_9A996529E7A2AC87 (InstPag), PRIMARY KEY(Id_FraProforma_Vto)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_grup_gral (Id_Grupo INT AUTO_INCREMENT NOT NULL, Nom_Grupo VARCHAR(50) DEFAULT NULL, PRIMARY KEY(Id_Grupo)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_grup_producte (Id_GrupProducte INT AUTO_INCREMENT NOT NULL, Num_Grup_Producte INT DEFAULT NULL, Descrip_Grup_Producte VARCHAR(50) DEFAULT NULL, Admet_Marcatge TINYINT(1) DEFAULT NULL, Grup_Gral INT DEFAULT NULL, INDEX IDX_6706C5C2D4EAEDF5 (Grup_Gral), PRIMARY KEY(Id_GrupProducte)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_instrument_pag (Id_Inst_Pag INT AUTO_INCREMENT NOT NULL, Cod_Inst_Pag VARCHAR(6) DEFAULT NULL, Nom_Inst_Pag VARCHAR(40) DEFAULT NULL, Descripcio_Instrument VARCHAR(1000) DEFAULT NULL, Baixa TINYINT(1) DEFAULT NULL, PRIMARY KEY(Id_Inst_Pag)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_instrument_pag_prov (Id_Inst_Pag INT AUTO_INCREMENT NOT NULL, Cod_Inst_Pag VARCHAR(6) DEFAULT NULL, Nom_Inst_Pag VARCHAR(40) DEFAULT NULL, Descripcio_Instrument VARCHAR(255) DEFAULT NULL, Descripcio2_Instrument VARCHAR(255) DEFAULT NULL, PRIMARY KEY(Id_Inst_Pag)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_metode_pag (Id_Metode INT AUTO_INCREMENT NOT NULL, Metode VARCHAR(5) DEFAULT NULL, Nom_Metode VARCHAR(20) DEFAULT NULL, Temps INT DEFAULT NULL, Descripcio VARCHAR(1000) DEFAULT NULL, PRIMARY KEY(Id_Metode)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_observ_plazo_entrega (Id_Observ_Plazo_Entrega INT AUTO_INCREMENT NOT NULL, Titol_PlazoEntrega VARCHAR(1000) DEFAULT NULL, NoUrgente_Titol VARCHAR(1000) DEFAULT NULL, NoUrgente_Descrip VARCHAR(1000) DEFAULT NULL, Urgente_Titol VARCHAR(1000) DEFAULT NULL, Urgente_Descrip1 VARCHAR(1000) DEFAULT NULL, Urgente_Recargo VARCHAR(1000) DEFAULT NULL, Urgente_Descrip2 VARCHAR(1000) DEFAULT NULL, Urgente_Descrip3 VARCHAR(1000) DEFAULT NULL, PedidoSup_Titol VARCHAR(1000) DEFAULT NULL, PedidoSup_Descrip VARCHAR(1000) DEFAULT NULL, Valle_Recargo VARCHAR(255) DEFAULT NULL, PRIMARY KEY(Id_Observ_Plazo_Entrega)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_observ_presup (Id_Observ_Presup INT AUTO_INCREMENT NOT NULL, Observ_Presup VARCHAR(2000) DEFAULT NULL, Observ_Presup_Vto VARCHAR(1000) DEFAULT NULL, PRIMARY KEY(Id_Observ_Presup)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_observ_proforma (Id_Observ_Proforma INT AUTO_INCREMENT NOT NULL, Observ_Proforma VARCHAR(1000) DEFAULT NULL, PRIMARY KEY(Id_Observ_Proforma)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_ordre_treball (Id_Ordre INT AUTO_INCREMENT NOT NULL, Nom_Client VARCHAR(150) DEFAULT NULL, Num_SubOrdre VARCHAR(255) DEFAULT NULL, Campanya VARCHAR(255) DEFAULT NULL, Descrip_Ordre_Treball VARCHAR(255) DEFAULT NULL, Proveidor VARCHAR(100) DEFAULT NULL, Entrega_Disseny DATETIME DEFAULT NULL, Sortida_Calandra DATETIME DEFAULT NULL, Sortida_Impressio DATETIME DEFAULT NULL, Sortida_Produccio DATETIME DEFAULT NULL, Entrega_Client DATETIME DEFAULT NULL, Dissenyador VARCHAR(50) DEFAULT NULL, Posta_Marxa VARCHAR(50) DEFAULT NULL, Calandra VARCHAR(50) DEFAULT NULL, Anonim TINYINT(1) DEFAULT NULL, Adreça_Entrega TINYINT(1) DEFAULT NULL, Recull_Client TINYINT(1) DEFAULT NULL, Ports_Deguts TINYINT(1) DEFAULT NULL, Servei_Urgent_8_30 TINYINT(1) DEFAULT NULL, Servei_Urgent_10 TINYINT(1) DEFAULT NULL, Servei_Urgent_12 TINYINT(1) DEFAULT NULL, Servei_Urgent_14 TINYINT(1) DEFAULT NULL, Observacions_Disseny VARCHAR(255) DEFAULT NULL, Observacions_Produccio VARCHAR(255) DEFAULT NULL, Persona VARCHAR(50) DEFAULT NULL, Resum_Unitats VARCHAR(255) DEFAULT NULL, Resum_Productes VARCHAR(255) DEFAULT NULL, Unitats INT DEFAULT NULL, Num_Client INT DEFAULT NULL, Grup_Producte INT DEFAULT NULL, Num_FraProforma INT DEFAULT NULL, INDEX IDX_19B471553694550B (Num_Client), INDEX IDX_19B4715581669A0 (Grup_Producte), INDEX IDX_19B47155129C39D (Num_FraProforma), PRIMARY KEY(Id_Ordre)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_ordre_treball_aux (Id_Ordre_Treball_Aux INT AUTO_INCREMENT NOT NULL, Num_Linia INT DEFAULT NULL, DescripProd_Ordre_Treball VARCHAR(1000) DEFAULT NULL, DescripParamImp_Ordre_Treball VARCHAR(1000) DEFAULT NULL, NumUnit_Ordre_Treball DOUBLE PRECISION DEFAULT NULL, Metres INT DEFAULT NULL, Longitud INT DEFAULT NULL, Departament VARCHAR(50) DEFAULT NULL, Baixa TINYINT(1) DEFAULT NULL, Ample VARCHAR(4) DEFAULT NULL, Cares VARCHAR(10) DEFAULT NULL, Codi_Ordre_Treball VARCHAR(255) DEFAULT NULL, Codi_FraProforma VARCHAR(255) DEFAULT NULL, Linia_Proforma INT DEFAULT NULL, Principal TINYINT(1) DEFAULT NULL, Num_Ordre_Treball INT NOT NULL, Id_FraProforma_Aux INT DEFAULT NULL, Grup_Producte INT DEFAULT NULL, CodParamImp_Ordre_Treball INT DEFAULT NULL, CodProd_Ordre_Treball INT DEFAULT NULL, INDEX IDX_BA8B2BC9F0068A2B (Num_Ordre_Treball), INDEX IDX_BA8B2BC94AAA08DC (Id_FraProforma_Aux), INDEX IDX_BA8B2BC981669A0 (Grup_Producte), INDEX IDX_BA8B2BC95D08610D (CodParamImp_Ordre_Treball), INDEX IDX_BA8B2BC97A4F1A9E (CodProd_Ordre_Treball), PRIMARY KEY(Id_Ordre_Treball_Aux)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_ordre_treball_dream_ribbons_shop (Id_OT_DRS INT AUTO_INCREMENT NOT NULL, Comanda VARCHAR(255) DEFAULT NULL, Data_Comanda DATETIME DEFAULT NULL, Data_Entrega DATETIME DEFAULT NULL, PRIMARY KEY(Id_OT_DRS)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_paisos (Id_Pais INT AUTO_INCREMENT NOT NULL, Pais VARCHAR(35) DEFAULT NULL, Preftel_Pais VARCHAR(4) DEFAULT NULL, PRIMARY KEY(Id_Pais)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_paramimp (Id_ParamImp INT AUTO_INCREMENT NOT NULL, Codi_ParamImp VARCHAR(50) DEFAULT NULL, Nom_ParamImp VARCHAR(50) DEFAULT NULL, Nom_ParamImp_Cat VARCHAR(50) DEFAULT NULL, PRIMARY KEY(Id_ParamImp)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_personal (Id INT AUTO_INCREMENT NOT NULL, DNI VARCHAR(50) DEFAULT NULL, Nom VARCHAR(50) DEFAULT NULL, Cognom1 VARCHAR(50) DEFAULT NULL, Cognom2 VARCHAR(50) DEFAULT NULL, Direccio VARCHAR(50) DEFAULT NULL, CodPos VARCHAR(50) DEFAULT NULL, Poblacio VARCHAR(50) DEFAULT NULL, Provincia VARCHAR(50) DEFAULT NULL, Telefon VARCHAR(50) DEFAULT NULL, Mobil VARCHAR(50) DEFAULT NULL, Email VARCHAR(50) DEFAULT NULL, NumSS VARCHAR(50) DEFAULT NULL, CtaCte VARCHAR(20) DEFAULT NULL, PRIMARY KEY(Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_precios_cantidad (producto_id VARCHAR(255) DEFAULT NULL, Id INT AUTO_INCREMENT NOT NULL, cantidad INT DEFAULT NULL, precio DOUBLE PRECISION DEFAULT NULL, INDEX IDX_5737A40A7645698E (producto_id), PRIMARY KEY(Id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_presup (Id_Presup INT AUTO_INCREMENT NOT NULL, Num_Presup VARCHAR(50) DEFAULT NULL, Marca_Cli VARCHAR(255) DEFAULT NULL, Persona_Presup VARCHAR(255) DEFAULT NULL, Dades_Client_Presup VARCHAR(1000) DEFAULT NULL, Data_Presup DATETIME DEFAULT NULL, Text_Data_Presup VARCHAR(50) DEFAULT NULL, FraProf_Presup VARCHAR(50) DEFAULT NULL, Fra_Presup VARCHAR(50) DEFAULT NULL, Deneg_Presup TINYINT(1) DEFAULT NULL, NRef1 VARCHAR(150) DEFAULT NULL, NRef2 VARCHAR(150) DEFAULT NULL, TerminiE_Presup VARCHAR(200) DEFAULT NULL, MetPag_Aux VARCHAR(200) DEFAULT NULL, ObservAux_Presup VARCHAR(1000) DEFAULT NULL, ObservVto_Presup VARCHAR(1000) DEFAULT NULL, Titol_PlazoEntrega_Aux VARCHAR(1000) DEFAULT NULL, NoUrgente_Titol_Aux VARCHAR(1000) DEFAULT NULL, NoUrgente_Descrip_Aux VARCHAR(1000) DEFAULT NULL, Urgente_Titol_Aux VARCHAR(1000) DEFAULT NULL, Urgente_Descrip1_Aux VARCHAR(1000) DEFAULT NULL, Urgente_Recargo_Aux VARCHAR(1000) DEFAULT NULL, Urgente_Descrip2_Aux VARCHAR(1000) DEFAULT NULL, Urgente_Descrip3_Aux VARCHAR(1000) DEFAULT NULL, PedidoSup_Titol_Aux VARCHAR(1000) DEFAULT NULL, PedidoSup_Descrip_Aux VARCHAR(1000) DEFAULT NULL, Data_Alta DATETIME DEFAULT NULL, Hora_Alta DATETIME DEFAULT NULL, Seguiment VARCHAR(1000) DEFAULT NULL, Total_Presup DOUBLE PRECISION DEFAULT NULL, Client_Presup INT NOT NULL, Comercial INT NOT NULL, MetPag_Presup INT NOT NULL, Autor_Presup INT NOT NULL, INDEX IDX_48974A848084370A (Client_Presup), INDEX IDX_48974A846FE046CF (Comercial), INDEX IDX_48974A8421FE3882 (MetPag_Presup), INDEX IDX_48974A84CF68318A (Autor_Presup), PRIMARY KEY(Id_Presup)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_presup_aux (Id_Presup_Aux INT AUTO_INCREMENT NOT NULL, Num_Linia INT DEFAULT NULL, DescripProd_Presup VARCHAR(1000) DEFAULT NULL, DescripParamImp_Presup VARCHAR(255) DEFAULT NULL, NumUnit_Presup DOUBLE PRECISION DEFAULT NULL, PreuUnit_Presup DOUBLE PRECISION DEFAULT NULL, Baixa TINYINT(1) DEFAULT NULL, Num_Presup INT NOT NULL, CodParamImp_Presup INT NOT NULL, CodProd_Presup INT NOT NULL, INDEX IDX_AE98E94790206324 (Num_Presup), INDEX IDX_AE98E9476383ABD6 (CodParamImp_Presup), INDEX IDX_AE98E947B1CE94F5 (CodProd_Presup), PRIMARY KEY(Id_Presup_Aux)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_presup_vto (Id_Presup_Vto INT AUTO_INCREMENT NOT NULL, Concepte_Vto VARCHAR(200) DEFAULT NULL, InstPag_Aux VARCHAR(1000) DEFAULT NULL, Num_Presup INT NOT NULL, InstPag INT NOT NULL, INDEX IDX_2D39E83490206324 (Num_Presup), INDEX IDX_2D39E834E7A2AC87 (InstPag), PRIMARY KEY(Id_Presup_Vto)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_productes (Id_Prod INT AUTO_INCREMENT NOT NULL, Ordre SMALLINT DEFAULT NULL, Ref_Prod VARCHAR(255) DEFAULT NULL, ETIQUETA VARCHAR(255) DEFAULT NULL, Nom_Prod VARCHAR(1000) DEFAULT NULL, Nom_Prod_Curt VARCHAR(1000) DEFAULT NULL, DESCRIPOT VARCHAR(255) DEFAULT NULL, DESCRIPAL VARCHAR(255) DEFAULT NULL, Baixa TINYINT(1) DEFAULT NULL, Disseny TINYINT(1) DEFAULT NULL, Produccio TINYINT(1) DEFAULT NULL, FOTO VARCHAR(255) DEFAULT NULL, Grup_Producte INT DEFAULT NULL, Color INT DEFAULT NULL, INDEX IDX_7F1219A81669A0 (Grup_Producte), INDEX IDX_7F1219AA79767ED (Color), INDEX ref_prod_index (Ref_Prod), PRIMARY KEY(Id_Prod)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_productes_prov (Id_Prod_Prov INT AUTO_INCREMENT NOT NULL, Codi_Producte VARCHAR(255) DEFAULT NULL, Descrip_Producte VARCHAR(50) DEFAULT NULL, PreuUnit_Producte DOUBLE PRECISION DEFAULT NULL, Num_Proveidor INT NOT NULL, INDEX IDX_6357680E1F476AFC (Num_Proveidor), PRIMARY KEY(Id_Prod_Prov)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_productes_tarifa (Id_Prod_Tarifa INT AUTO_INCREMENT NOT NULL, Marca VARCHAR(5) DEFAULT NULL, Path_Excel VARCHAR(255) DEFAULT NULL, Sheet_Excel VARCHAR(255) DEFAULT NULL, Columna_Ample VARCHAR(4) DEFAULT NULL, Columna_Rang VARCHAR(4) DEFAULT NULL, Fila_Rang1 INT DEFAULT NULL, Fila_Rang2 INT DEFAULT NULL, Id_Producte INT DEFAULT NULL, INDEX IDX_9CF9ECE8685FEE1F (Id_Producte), PRIMARY KEY(Id_Prod_Tarifa)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_proveidors (Id_Prov INT AUTO_INCREMENT NOT NULL, Codi_Prov VARCHAR(50) DEFAULT NULL, NIF_Prov VARCHAR(50) DEFAULT NULL, Proveidor VARCHAR(75) DEFAULT NULL, Proveidor_Com VARCHAR(75) DEFAULT NULL, Nom_Prov VARCHAR(50) DEFAULT NULL, Cognom_Prov VARCHAR(50) DEFAULT NULL, Carrec_Prov VARCHAR(50) DEFAULT NULL, Dir_Prov VARCHAR(1000) DEFAULT NULL, CodP_Prov VARCHAR(10) DEFAULT NULL, Pob_Prov VARCHAR(50) DEFAULT NULL, Tel_Prov VARCHAR(12) DEFAULT NULL, Fax_Prov VARCHAR(12) DEFAULT NULL, Mob_Prov VARCHAR(12) DEFAULT NULL, Email_Prov VARCHAR(100) DEFAULT NULL, Web_Prov VARCHAR(50) DEFAULT NULL, Dia_Pag VARCHAR(2) DEFAULT NULL, CC_Prov VARCHAR(20) DEFAULT NULL, Observacions_Prov VARCHAR(2000) DEFAULT NULL, Activitat_Prov VARCHAR(1000) DEFAULT NULL, Mailing TINYINT(1) DEFAULT NULL, Stock TINYINT(1) DEFAULT NULL, Tract_Prov INT DEFAULT NULL, Inst_Pag INT DEFAULT NULL, Met_Pag INT DEFAULT NULL, Pais_Prov INT DEFAULT NULL, INDEX IDX_F66130A5C6B4547A (Tract_Prov), INDEX IDX_F66130A5597F972E (Inst_Pag), INDEX IDX_F66130A5BC398C78 (Met_Pag), INDEX IDX_F66130A566BACB43 (Pais_Prov), PRIMARY KEY(Id_Prov)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_provincies (Id_Provincia INT AUTO_INCREMENT NOT NULL, Provincia VARCHAR(30) DEFAULT NULL, CodPos VARCHAR(2) DEFAULT NULL, CodTel VARCHAR(3) DEFAULT NULL, Id_Comunitat INT DEFAULT NULL, INDEX IDX_AF5AEC53390D1119 (Id_Comunitat), PRIMARY KEY(Id_Provincia)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_tractaments (Id_Tract INT AUTO_INCREMENT NOT NULL, Tractament VARCHAR(50) DEFAULT NULL, PRIMARY KEY(Id_Tract)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE t_factura_aux ADD CONSTRAINT FK_7A63433675C90CAB FOREIGN KEY (Num_Factura) REFERENCES t_factura (Id_Factura)');
        $this->addSql('ALTER TABLE t_factura_aux ADD CONSTRAINT FK_7A634336843C001E FOREIGN KEY (CodProd_Factura) REFERENCES t_productes (Id_Prod)');
        $this->addSql('ALTER TABLE t_factura_aux ADD CONSTRAINT FK_7A63433626893C53 FOREIGN KEY (CodParamImp_Factura) REFERENCES t_paramimp (Id_ParamImp)');
        $this->addSql('ALTER TABLE t_factura_aux ADD CONSTRAINT FK_7A63433681669A0 FOREIGN KEY (Grup_Producte) REFERENCES t_grup_producte (Id_GrupProducte)');
        $this->addSql('ALTER TABLE t_factura_prov ADD CONSTRAINT FK_4CCD6FB7DEE755D5 FOREIGN KEY (Proveidor) REFERENCES t_proveidors (Id_Prov)');
        $this->addSql('ALTER TABLE t_factura_prov_vto ADD CONSTRAINT FK_B6184AB7D21EC69D FOREIGN KEY (Num_FraProv_Vto) REFERENCES t_factura_prov (Id_Factura_Prov)');
        $this->addSql('ALTER TABLE t_factura_prov_vto ADD CONSTRAINT FK_B6184AB762419F3B FOREIGN KEY (InstPag_FraProv_Vto) REFERENCES t_instrument_pag_prov (Id_Inst_Pag)');
        $this->addSql('ALTER TABLE t_factura_vto_aux ADD CONSTRAINT FK_15D01B97A7963335 FOREIGN KEY (Id_Factura) REFERENCES t_factura (Id_Factura)');
        $this->addSql('ALTER TABLE t_factura_vto_aux ADD CONSTRAINT FK_15D01B97A90FA530 FOREIGN KEY (Client_Factura) REFERENCES t_clients (Id_Cli)');
        $this->addSql('ALTER TABLE t_factura_vto_aux ADD CONSTRAINT FK_15D01B97C6487A48 FOREIGN KEY (Id_Factura_Vto_1) REFERENCES t_factura_vto (Id_Factura_Vto)');
        $this->addSql('ALTER TABLE t_fraproforma ADD CONSTRAINT FK_DCB2796B1D9A5136 FOREIGN KEY (Client_FraProf) REFERENCES t_clients (Id_Cli)');
        $this->addSql('ALTER TABLE t_fraproforma ADD CONSTRAINT FK_DCB2796B598BA9C3 FOREIGN KEY (Metode_Pag) REFERENCES t_metode_pag (Id_Metode)');
        $this->addSql('ALTER TABLE t_fraproforma ADD CONSTRAINT FK_DCB2796B35B4426B FOREIGN KEY (Num_Autor) REFERENCES t_autors_presup (Id_AutPresup)');
        $this->addSql('ALTER TABLE t_fraproforma ADD CONSTRAINT FK_DCB2796B6136AFA4 FOREIGN KEY (Num_Autor_Proforma) REFERENCES t_autors_presup (Id_AutPresup)');
        $this->addSql('ALTER TABLE t_fraproforma_aux ADD CONSTRAINT FK_1938645ABBD74FBE FOREIGN KEY (Num_Proforma) REFERENCES t_fraproforma (Id_FraProf)');
        $this->addSql('ALTER TABLE t_fraproforma_aux ADD CONSTRAINT FK_1938645A81669A0 FOREIGN KEY (Grup_Producte) REFERENCES t_grup_producte (Id_GrupProducte)');
        $this->addSql('ALTER TABLE t_fraproforma_aux ADD CONSTRAINT FK_1938645A2DFDB1 FOREIGN KEY (CodProd_Proforma) REFERENCES t_productes (Id_Prod)');
        $this->addSql('ALTER TABLE t_fraproforma_aux ADD CONSTRAINT FK_1938645A8E275A0 FOREIGN KEY (CodParamImp_Proforma) REFERENCES t_paramimp (Id_ParamImp)');
        $this->addSql('ALTER TABLE t_fraproforma_plazos ADD CONSTRAINT FK_4D9DE2E0129C39D FOREIGN KEY (Num_FraProforma) REFERENCES t_fraproforma (Id_FraProf)');
        $this->addSql('ALTER TABLE t_fraproforma_plazos ADD CONSTRAINT FK_4D9DE2E02081527 FOREIGN KEY (CodProd_FraProf_Plazo) REFERENCES t_productes (Id_Prod)');
        $this->addSql('ALTER TABLE t_fraproforma_vto ADD CONSTRAINT FK_9A996529BBD74FBE FOREIGN KEY (Num_Proforma) REFERENCES t_fraproforma (Id_FraProf)');
        $this->addSql('ALTER TABLE t_fraproforma_vto ADD CONSTRAINT FK_9A996529E7A2AC87 FOREIGN KEY (InstPag) REFERENCES t_instrument_pag (Id_Inst_Pag)');
        $this->addSql('ALTER TABLE t_grup_producte ADD CONSTRAINT FK_6706C5C2D4EAEDF5 FOREIGN KEY (Grup_Gral) REFERENCES t_grup_gral (Id_Grupo)');
        $this->addSql('ALTER TABLE t_ordre_treball ADD CONSTRAINT FK_19B471553694550B FOREIGN KEY (Num_Client) REFERENCES t_clients (Id_Cli)');
        $this->addSql('ALTER TABLE t_ordre_treball ADD CONSTRAINT FK_19B4715581669A0 FOREIGN KEY (Grup_Producte) REFERENCES t_grup_producte (Id_GrupProducte)');
        $this->addSql('ALTER TABLE t_ordre_treball ADD CONSTRAINT FK_19B47155129C39D FOREIGN KEY (Num_FraProforma) REFERENCES t_fraproforma (Id_FraProf)');
        $this->addSql('ALTER TABLE t_ordre_treball_aux ADD CONSTRAINT FK_BA8B2BC9F0068A2B FOREIGN KEY (Num_Ordre_Treball) REFERENCES t_ordre_treball (Id_Ordre)');
        $this->addSql('ALTER TABLE t_ordre_treball_aux ADD CONSTRAINT FK_BA8B2BC94AAA08DC FOREIGN KEY (Id_FraProforma_Aux) REFERENCES t_fraproforma_aux (Id_FraProforma_Aux)');
        $this->addSql('ALTER TABLE t_ordre_treball_aux ADD CONSTRAINT FK_BA8B2BC981669A0 FOREIGN KEY (Grup_Producte) REFERENCES t_grup_producte (Id_GrupProducte)');
        $this->addSql('ALTER TABLE t_ordre_treball_aux ADD CONSTRAINT FK_BA8B2BC95D08610D FOREIGN KEY (CodParamImp_Ordre_Treball) REFERENCES t_paramimp (Id_ParamImp)');
        $this->addSql('ALTER TABLE t_ordre_treball_aux ADD CONSTRAINT FK_BA8B2BC97A4F1A9E FOREIGN KEY (CodProd_Ordre_Treball) REFERENCES t_productes (Id_Prod)');
        $this->addSql('ALTER TABLE t_precios_cantidad ADD CONSTRAINT FK_5737A40A7645698E FOREIGN KEY (producto_id) REFERENCES t_productes (Ref_Prod)');
        $this->addSql('ALTER TABLE t_presup ADD CONSTRAINT FK_48974A848084370A FOREIGN KEY (Client_Presup) REFERENCES t_clients (Id_Cli)');
        $this->addSql('ALTER TABLE t_presup ADD CONSTRAINT FK_48974A846FE046CF FOREIGN KEY (Comercial) REFERENCES t_comercials (Id_Comercial)');
        $this->addSql('ALTER TABLE t_presup ADD CONSTRAINT FK_48974A8421FE3882 FOREIGN KEY (MetPag_Presup) REFERENCES t_metode_pag (Id_Metode)');
        $this->addSql('ALTER TABLE t_presup ADD CONSTRAINT FK_48974A84CF68318A FOREIGN KEY (Autor_Presup) REFERENCES t_autors_presup (Id_AutPresup)');
        $this->addSql('ALTER TABLE t_presup_aux ADD CONSTRAINT FK_AE98E94790206324 FOREIGN KEY (Num_Presup) REFERENCES t_presup (Id_Presup)');
        $this->addSql('ALTER TABLE t_presup_aux ADD CONSTRAINT FK_AE98E9476383ABD6 FOREIGN KEY (CodParamImp_Presup) REFERENCES t_paramimp (Id_ParamImp)');
        $this->addSql('ALTER TABLE t_presup_aux ADD CONSTRAINT FK_AE98E947B1CE94F5 FOREIGN KEY (CodProd_Presup) REFERENCES t_productes (Id_Prod)');
        $this->addSql('ALTER TABLE t_presup_vto ADD CONSTRAINT FK_2D39E83490206324 FOREIGN KEY (Num_Presup) REFERENCES t_presup (Id_Presup)');
        $this->addSql('ALTER TABLE t_presup_vto ADD CONSTRAINT FK_2D39E834E7A2AC87 FOREIGN KEY (InstPag) REFERENCES t_instrument_pag (Id_Inst_Pag)');
        $this->addSql('ALTER TABLE t_productes ADD CONSTRAINT FK_7F1219A81669A0 FOREIGN KEY (Grup_Producte) REFERENCES t_grup_producte (Id_GrupProducte)');
        $this->addSql('ALTER TABLE t_productes ADD CONSTRAINT FK_7F1219AA79767ED FOREIGN KEY (Color) REFERENCES t_colors (Id_Color)');
        $this->addSql('ALTER TABLE t_productes_prov ADD CONSTRAINT FK_6357680E1F476AFC FOREIGN KEY (Num_Proveidor) REFERENCES t_proveidors (Id_Prov)');
        $this->addSql('ALTER TABLE t_productes_tarifa ADD CONSTRAINT FK_9CF9ECE8685FEE1F FOREIGN KEY (Id_Producte) REFERENCES t_productes (Id_Prod)');
        $this->addSql('ALTER TABLE t_proveidors ADD CONSTRAINT FK_F66130A5C6B4547A FOREIGN KEY (Tract_Prov) REFERENCES t_tractaments (Id_Tract)');
        $this->addSql('ALTER TABLE t_proveidors ADD CONSTRAINT FK_F66130A5597F972E FOREIGN KEY (Inst_Pag) REFERENCES t_instrument_pag (Id_Inst_Pag)');
        $this->addSql('ALTER TABLE t_proveidors ADD CONSTRAINT FK_F66130A5BC398C78 FOREIGN KEY (Met_Pag) REFERENCES t_metode_pag (Id_Metode)');
        $this->addSql('ALTER TABLE t_proveidors ADD CONSTRAINT FK_F66130A566BACB43 FOREIGN KEY (Pais_Prov) REFERENCES t_paisos (Id_Pais)');
        $this->addSql('ALTER TABLE t_provincies ADD CONSTRAINT FK_AF5AEC53390D1119 FOREIGN KEY (Id_Comunitat) REFERENCES t_comunitats_autonomes (Id_Comunitat)');
        $this->addSql('ALTER TABLE t_factura ADD CONSTRAINT FK_A3C7186AA90FA530 FOREIGN KEY (Client_Factura) REFERENCES t_clients (Id_Cli)');
        $this->addSql('ALTER TABLE t_factura ADD CONSTRAINT FK_A3C7186A598BA9C3 FOREIGN KEY (Metode_Pag) REFERENCES t_metode_pag (Id_Metode)');
        $this->addSql('ALTER TABLE t_factura_vto ADD CONSTRAINT FK_F9C2424575C90CAB FOREIGN KEY (Num_Factura) REFERENCES t_factura (Id_Factura)');
        $this->addSql('ALTER TABLE t_factura_vto ADD CONSTRAINT FK_F9C24245E7A2AC87 FOREIGN KEY (InstPag) REFERENCES t_instrument_pag (Id_Inst_Pag)');
        $this->addSql('ALTER TABLE t_clients ADD CONSTRAINT FK_5AE4961794A53FA9 FOREIGN KEY (Tract_Cli) REFERENCES t_tractaments (Id_Tract)');
        $this->addSql('ALTER TABLE t_clients ADD CONSTRAINT FK_5AE4961734F40D3E FOREIGN KEY (Activitat_1) REFERENCES t_activitat_client (Id)');
        $this->addSql('ALTER TABLE t_clients ADD CONSTRAINT FK_5AE4961726F4C144 FOREIGN KEY (PaisFra_Cli) REFERENCES t_paisos (Id_Pais)');
        $this->addSql('ALTER TABLE t_clients ADD CONSTRAINT FK_5AE49617A53CA2AA FOREIGN KEY (TractEnt_Cli) REFERENCES t_tractaments (Id_Tract)');
        $this->addSql('ALTER TABLE t_clients ADD CONSTRAINT FK_5AE49617CB0801CB FOREIGN KEY (PaisEnt_Cli) REFERENCES t_paisos (Id_Pais)');
        $this->addSql('ALTER TABLE t_clients ADD CONSTRAINT FK_5AE49617BC398C78 FOREIGN KEY (Met_Pag) REFERENCES t_metode_pag (Id_Metode)');
        $this->addSql('ALTER TABLE t_clients ADD CONSTRAINT FK_5AE49617597F972E FOREIGN KEY (Inst_Pag) REFERENCES t_instrument_pag (Id_Inst_Pag)');
        $this->addSql('ALTER TABLE t_albara ADD CONSTRAINT FK_F8494BCB305A3645 FOREIGN KEY (Client_Albara) REFERENCES t_clients (Id_Cli)');
        $this->addSql('ALTER TABLE t_albara_aux ADD CONSTRAINT FK_B8F7900620FE626B FOREIGN KEY (Num_Albara) REFERENCES t_albara (Id_Albara)');
        $this->addSql('ALTER TABLE t_clients_mails ADD CONSTRAINT FK_91C351031D898556 FOREIGN KEY (Id_Cli_Mail) REFERENCES t_clients (Id_Cli)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE t_presup DROP FOREIGN KEY FK_48974A846FE046CF');
        $this->addSql('ALTER TABLE t_provincies DROP FOREIGN KEY FK_AF5AEC53390D1119');
        $this->addSql('ALTER TABLE t_factura_prov_vto DROP FOREIGN KEY FK_B6184AB7D21EC69D');
        $this->addSql('ALTER TABLE t_fraproforma_aux DROP FOREIGN KEY FK_1938645ABBD74FBE');
        $this->addSql('ALTER TABLE t_fraproforma_plazos DROP FOREIGN KEY FK_4D9DE2E0129C39D');
        $this->addSql('ALTER TABLE t_fraproforma_vto DROP FOREIGN KEY FK_9A996529BBD74FBE');
        $this->addSql('ALTER TABLE t_ordre_treball DROP FOREIGN KEY FK_19B47155129C39D');
        $this->addSql('ALTER TABLE t_ordre_treball_aux DROP FOREIGN KEY FK_BA8B2BC94AAA08DC');
        $this->addSql('ALTER TABLE t_grup_producte DROP FOREIGN KEY FK_6706C5C2D4EAEDF5');
        $this->addSql('ALTER TABLE t_factura_aux DROP FOREIGN KEY FK_7A63433681669A0');
        $this->addSql('ALTER TABLE t_fraproforma_aux DROP FOREIGN KEY FK_1938645A81669A0');
        $this->addSql('ALTER TABLE t_ordre_treball DROP FOREIGN KEY FK_19B4715581669A0');
        $this->addSql('ALTER TABLE t_ordre_treball_aux DROP FOREIGN KEY FK_BA8B2BC981669A0');
        $this->addSql('ALTER TABLE t_productes DROP FOREIGN KEY FK_7F1219A81669A0');
        $this->addSql('ALTER TABLE t_factura_vto DROP FOREIGN KEY FK_F9C24245E7A2AC87');
        $this->addSql('ALTER TABLE t_clients DROP FOREIGN KEY FK_5AE49617597F972E');
        $this->addSql('ALTER TABLE t_fraproforma_vto DROP FOREIGN KEY FK_9A996529E7A2AC87');
        $this->addSql('ALTER TABLE t_presup_vto DROP FOREIGN KEY FK_2D39E834E7A2AC87');
        $this->addSql('ALTER TABLE t_proveidors DROP FOREIGN KEY FK_F66130A5597F972E');
        $this->addSql('ALTER TABLE t_factura_prov_vto DROP FOREIGN KEY FK_B6184AB762419F3B');
        $this->addSql('ALTER TABLE t_factura DROP FOREIGN KEY FK_A3C7186A598BA9C3');
        $this->addSql('ALTER TABLE t_clients DROP FOREIGN KEY FK_5AE49617BC398C78');
        $this->addSql('ALTER TABLE t_fraproforma DROP FOREIGN KEY FK_DCB2796B598BA9C3');
        $this->addSql('ALTER TABLE t_presup DROP FOREIGN KEY FK_48974A8421FE3882');
        $this->addSql('ALTER TABLE t_proveidors DROP FOREIGN KEY FK_F66130A5BC398C78');
        $this->addSql('ALTER TABLE t_ordre_treball_aux DROP FOREIGN KEY FK_BA8B2BC9F0068A2B');
        $this->addSql('ALTER TABLE t_clients DROP FOREIGN KEY FK_5AE4961726F4C144');
        $this->addSql('ALTER TABLE t_clients DROP FOREIGN KEY FK_5AE49617CB0801CB');
        $this->addSql('ALTER TABLE t_proveidors DROP FOREIGN KEY FK_F66130A566BACB43');
        $this->addSql('ALTER TABLE t_factura_aux DROP FOREIGN KEY FK_7A63433626893C53');
        $this->addSql('ALTER TABLE t_fraproforma_aux DROP FOREIGN KEY FK_1938645A8E275A0');
        $this->addSql('ALTER TABLE t_ordre_treball_aux DROP FOREIGN KEY FK_BA8B2BC95D08610D');
        $this->addSql('ALTER TABLE t_presup_aux DROP FOREIGN KEY FK_AE98E9476383ABD6');
        $this->addSql('ALTER TABLE t_presup_aux DROP FOREIGN KEY FK_AE98E94790206324');
        $this->addSql('ALTER TABLE t_presup_vto DROP FOREIGN KEY FK_2D39E83490206324');
        $this->addSql('ALTER TABLE t_factura_aux DROP FOREIGN KEY FK_7A634336843C001E');
        $this->addSql('ALTER TABLE t_fraproforma_aux DROP FOREIGN KEY FK_1938645A2DFDB1');
        $this->addSql('ALTER TABLE t_fraproforma_plazos DROP FOREIGN KEY FK_4D9DE2E02081527');
        $this->addSql('ALTER TABLE t_ordre_treball_aux DROP FOREIGN KEY FK_BA8B2BC97A4F1A9E');
        $this->addSql('ALTER TABLE t_precios_cantidad DROP FOREIGN KEY FK_5737A40A7645698E');
        $this->addSql('ALTER TABLE t_presup_aux DROP FOREIGN KEY FK_AE98E947B1CE94F5');
        $this->addSql('ALTER TABLE t_productes_tarifa DROP FOREIGN KEY FK_9CF9ECE8685FEE1F');
        $this->addSql('ALTER TABLE t_factura_prov DROP FOREIGN KEY FK_4CCD6FB7DEE755D5');
        $this->addSql('ALTER TABLE t_productes_prov DROP FOREIGN KEY FK_6357680E1F476AFC');
        $this->addSql('ALTER TABLE t_clients DROP FOREIGN KEY FK_5AE4961794A53FA9');
        $this->addSql('ALTER TABLE t_clients DROP FOREIGN KEY FK_5AE49617A53CA2AA');
        $this->addSql('ALTER TABLE t_proveidors DROP FOREIGN KEY FK_F66130A5C6B4547A');
        $this->addSql('DROP TABLE t_comanda_prov');
        $this->addSql('DROP TABLE t_comanda_prov_aux');
        $this->addSql('DROP TABLE t_comercials');
        $this->addSql('DROP TABLE t_comptador_comanda');
        $this->addSql('DROP TABLE t_comunitats_autonomes');
        $this->addSql('DROP TABLE t_empreses');
        $this->addSql('DROP TABLE t_empreses_path');
        $this->addSql('DROP TABLE t_factura_aux');
        $this->addSql('DROP TABLE t_factura_prov');
        $this->addSql('DROP TABLE t_factura_prov_vto');
        $this->addSql('DROP TABLE t_factura_vto_aux');
        $this->addSql('DROP TABLE t_fitxers_tarifes');
        $this->addSql('DROP TABLE t_fitxers_tarifes_esp');
        $this->addSql('DROP TABLE t_fraproforma');
        $this->addSql('DROP TABLE t_fraproforma_aux');
        $this->addSql('DROP TABLE t_fraproforma_plazos');
        $this->addSql('DROP TABLE t_fraproforma_vto');
        $this->addSql('DROP TABLE t_grup_gral');
        $this->addSql('DROP TABLE t_grup_producte');
        $this->addSql('DROP TABLE t_instrument_pag');
        $this->addSql('DROP TABLE t_instrument_pag_prov');
        $this->addSql('DROP TABLE t_metode_pag');
        $this->addSql('DROP TABLE t_observ_plazo_entrega');
        $this->addSql('DROP TABLE t_observ_presup');
        $this->addSql('DROP TABLE t_observ_proforma');
        $this->addSql('DROP TABLE t_ordre_treball');
        $this->addSql('DROP TABLE t_ordre_treball_aux');
        $this->addSql('DROP TABLE t_ordre_treball_dream_ribbons_shop');
        $this->addSql('DROP TABLE t_paisos');
        $this->addSql('DROP TABLE t_paramimp');
        $this->addSql('DROP TABLE t_personal');
        $this->addSql('DROP TABLE t_precios_cantidad');
        $this->addSql('DROP TABLE t_presup');
        $this->addSql('DROP TABLE t_presup_aux');
        $this->addSql('DROP TABLE t_presup_vto');
        $this->addSql('DROP TABLE t_productes');
        $this->addSql('DROP TABLE t_productes_prov');
        $this->addSql('DROP TABLE t_productes_tarifa');
        $this->addSql('DROP TABLE t_proveidors');
        $this->addSql('DROP TABLE t_provincies');
        $this->addSql('DROP TABLE t_tractaments');
        $this->addSql('ALTER TABLE t_albara DROP FOREIGN KEY FK_F8494BCB305A3645');
        $this->addSql('ALTER TABLE t_albara_aux DROP FOREIGN KEY FK_B8F7900620FE626B');
        $this->addSql('ALTER TABLE t_clients DROP FOREIGN KEY FK_5AE4961734F40D3E');
        $this->addSql('ALTER TABLE t_clients_mails DROP FOREIGN KEY FK_91C351031D898556');
        $this->addSql('ALTER TABLE t_factura DROP FOREIGN KEY FK_A3C7186AA90FA530');
        $this->addSql('ALTER TABLE t_factura_vto DROP FOREIGN KEY FK_F9C2424575C90CAB');
    }
}
