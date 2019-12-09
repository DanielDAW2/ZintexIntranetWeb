-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: localhost    Database: zintex
-- ------------------------------------------------------
-- Server version	8.0.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `t_activitat_client`
--

DROP TABLE IF EXISTS `t_activitat_client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_activitat_client` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Codi_Activitat` int(11) DEFAULT NULL,
  `Tipus_Client` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Coef_Recarrec` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_albara`
--

DROP TABLE IF EXISTS `t_albara`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_albara` (
  `Id_Albara` int(11) NOT NULL AUTO_INCREMENT,
  `Descrip_Client_Albara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nom_Client_Albara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Direccio_Client_Albara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Num_Albara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Data_Albara` datetime DEFAULT NULL,
  `Data_Sortida_Albara` datetime DEFAULT NULL,
  `NRef_Albara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SRef_Albara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Facturable_Albara` tinyint(1) DEFAULT NULL,
  `NumFraProforma_Albara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NumFactura_Albara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Client_Albara` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Albara`),
  KEY `IDX_F8494BCB305A3645` (`Client_Albara`),
  CONSTRAINT `FK_F8494BCB305A3645` FOREIGN KEY (`Client_Albara`) REFERENCES `t_clients` (`Id_Cli`)
) ENGINE=InnoDB AUTO_INCREMENT=2931 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_albara_aux`
--

DROP TABLE IF EXISTS `t_albara_aux`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_albara_aux` (
  `Id_Albara_Aux` int(11) NOT NULL AUTO_INCREMENT,
  `Num_Linia` int(11) DEFAULT NULL,
  `codprod_albara_id` int(11) DEFAULT NULL,
  `DescripProd_Albara` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CodParamImp_Albara` int(11) DEFAULT NULL,
  `DescripParamImp_Albara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NumUnit_Albara` double DEFAULT NULL,
  `PreuUnit_Albara` double DEFAULT NULL,
  `Preu_Albara` double DEFAULT NULL,
  `Num_Albara` int(11) NOT NULL,
  PRIMARY KEY (`Id_Albara_Aux`),
  KEY `IDX_B8F7900620FE626B` (`Num_Albara`),
  KEY `IDX_B8F79006DE3F184D` (`codprod_albara_id`),
  CONSTRAINT `FK_B8F7900620FE626B` FOREIGN KEY (`Num_Albara`) REFERENCES `t_albara` (`Id_Albara`),
  CONSTRAINT `FK_B8F79006DE3F184D` FOREIGN KEY (`codprod_albara_id`) REFERENCES `t_productes` (`Id_Prod`)
) ENGINE=InnoDB AUTO_INCREMENT=14622 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_autor_comanda`
--

DROP TABLE IF EXISTS `t_autor_comanda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_autor_comanda` (
  `Id_Autor_Comanda` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Autor_Comanda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id_Autor_Comanda`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_autors_presup`
--

DROP TABLE IF EXISTS `t_autors_presup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_autors_presup` (
  `Id_AutPresup` int(11) NOT NULL AUTO_INCREMENT,
  `Cod_AutPresup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Descrip_AutPresup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Baixa` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Id_AutPresup`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_bancs`
--

DROP TABLE IF EXISTS `t_bancs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_bancs` (
  `Id_Banc` int(11) NOT NULL AUTO_INCREMENT,
  `Codi_Banc` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Banc` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id_Banc`)
) ENGINE=InnoDB AUTO_INCREMENT=704 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_blanc`
--

DROP TABLE IF EXISTS `t_blanc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_blanc` (
  `Id_Blanc` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id_Blanc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_clients`
--

DROP TABLE IF EXISTS `t_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_clients` (
  `Id_Cli` int(11) NOT NULL AUTO_INCREMENT,
  `Marca_Cli` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Codi_Cli` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Codi_Cli_DREAM` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NIF_Cli` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Client` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Client_Com` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NomFra_Cli` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CognomFra_Cli` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CarrecFra_cli` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DirFra_Cli` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CodPFra_Cli` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PobFra_Cli` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TelFra_Cli` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FaxFra_Cli` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MobFra_Cli` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email_Cli` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EmpEnt_Cli` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PersEnt_Cli` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DirEnt_Cli` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CodPEnt_Cli` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PobEnt_Cli` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TelEnt_Cli` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FaxEnt_Cli` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Web_Cli` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dia_Pag` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Problema_Pag` tinyint(1) DEFAULT NULL,
  `TitularCC_Cli` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CC_Cli` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PersFin_Cli` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CarrecFin_Cli` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TelFin_cli` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EmailFin_Cli` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tipus_IVA` double DEFAULT NULL,
  `Tipus_REQ` double DEFAULT NULL,
  `Observacions_Cli` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ObservacionsFin_Cli` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Motiu_Contacte` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mailing` tinyint(1) DEFAULT NULL,
  `CAT` tinyint(1) DEFAULT NULL,
  `Client_CYCRED` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Classificat_CYCRED` datetime DEFAULT NULL,
  `Credit_CYCRED` int(11) DEFAULT NULL,
  `Status_CYCRED` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Limit_CYCRED` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Baixa_CYCRED` datetime DEFAULT NULL,
  `Num_Agent_Comercial` int(11) DEFAULT NULL,
  `Num_Ultim_Presup` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Data_Ultim_Presup` datetime DEFAULT NULL,
  `Num_Ultim_FraProforma` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Data_Ultim_FraProforma` datetime DEFAULT NULL,
  `Num_Ultim_Factura` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Data_Ultim_Factura` datetime DEFAULT NULL,
  `OKBanc_Domiciliacio` tinyint(1) DEFAULT NULL,
  `Mailing_Nadal` tinyint(1) DEFAULT NULL,
  `Especial` tinyint(1) DEFAULT NULL,
  `Data_Alta` datetime DEFAULT NULL,
  `Hora_Alta` datetime DEFAULT NULL,
  `Baixa` tinyint(1) DEFAULT NULL,
  `Express_Afegit` tinyint(1) DEFAULT NULL,
  `Express_Mai` tinyint(1) DEFAULT NULL,
  `Majorista` tinyint(1) DEFAULT NULL,
  `Royalty` tinyint(1) DEFAULT NULL,
  `Activitat_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tract_Cli` int(11) DEFAULT NULL,
  `Activitat_1` int(11) DEFAULT NULL,
  `PaisFra_Cli` int(11) DEFAULT NULL,
  `TractEnt_Cli` int(11) DEFAULT NULL,
  `PaisEnt_Cli` int(11) DEFAULT NULL,
  `Met_Pag` int(11) DEFAULT NULL,
  `Inst_Pag` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Cli`),
  KEY `IDX_5AE4961794A53FA9` (`Tract_Cli`),
  KEY `IDX_5AE4961734F40D3E` (`Activitat_1`),
  KEY `IDX_5AE4961726F4C144` (`PaisFra_Cli`),
  KEY `IDX_5AE49617A53CA2AA` (`TractEnt_Cli`),
  KEY `IDX_5AE49617CB0801CB` (`PaisEnt_Cli`),
  KEY `IDX_5AE49617BC398C78` (`Met_Pag`),
  KEY `IDX_5AE49617597F972E` (`Inst_Pag`),
  CONSTRAINT `FK_5AE4961726F4C144` FOREIGN KEY (`PaisFra_Cli`) REFERENCES `t_paisos` (`Id_Pais`),
  CONSTRAINT `FK_5AE4961734F40D3E` FOREIGN KEY (`Activitat_1`) REFERENCES `t_activitat_client` (`Id`),
  CONSTRAINT `FK_5AE49617597F972E` FOREIGN KEY (`Inst_Pag`) REFERENCES `t_instrument_pag` (`Id_Inst_Pag`),
  CONSTRAINT `FK_5AE4961794A53FA9` FOREIGN KEY (`Tract_Cli`) REFERENCES `t_tractaments` (`Id_Tract`),
  CONSTRAINT `FK_5AE49617A53CA2AA` FOREIGN KEY (`TractEnt_Cli`) REFERENCES `t_tractaments` (`Id_Tract`),
  CONSTRAINT `FK_5AE49617BC398C78` FOREIGN KEY (`Met_Pag`) REFERENCES `t_metode_pag` (`Id_Metode`),
  CONSTRAINT `FK_5AE49617CB0801CB` FOREIGN KEY (`PaisEnt_Cli`) REFERENCES `t_paisos` (`Id_Pais`)
) ENGINE=InnoDB AUTO_INCREMENT=11123 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_clients_mails`
--

DROP TABLE IF EXISTS `t_clients_mails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_clients_mails` (
  `Id_Cli_Mail` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Persona_Mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Cognom1_Persona_Mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Cognom2_Persona_Mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MailCli_Mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Departament_Mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Extensio_Mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Telefon_Mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mobil_Mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Carrec_Mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tractament_Persona_Mail` int(11) DEFAULT NULL,
  `Num_Client_Mail` int(11) NOT NULL,
  PRIMARY KEY (`Id_Cli_Mail`),
  KEY `IDX_91C3510354343CB5` (`Num_Client_Mail`),
  CONSTRAINT `FK_91C3510354343CB5` FOREIGN KEY (`Num_Client_Mail`) REFERENCES `t_clients` (`Id_Cli`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_colors`
--

DROP TABLE IF EXISTS `t_colors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_colors` (
  `Id_Color` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo_Color` smallint(6) DEFAULT NULL,
  `Color` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id_Color`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_comanda_prov`
--

DROP TABLE IF EXISTS `t_comanda_prov`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_comanda_prov` (
  `Id_Comanda_Prov` int(11) NOT NULL AUTO_INCREMENT,
  `Ref_Comanda_Prov` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Num_Proveidor_Comanda` int(11) DEFAULT NULL,
  `Descrip_Comanda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Data_Comanda` datetime DEFAULT NULL,
  `Autor_Comanda` int(11) DEFAULT NULL,
  `Demana_Comanda` int(11) DEFAULT NULL,
  `Facturat` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Id_Comanda_Prov`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_comanda_prov_aux`
--

DROP TABLE IF EXISTS `t_comanda_prov_aux`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_comanda_prov_aux` (
  `Id_Comanda_Prov_Aux` int(11) NOT NULL AUTO_INCREMENT,
  `Num_Comanda_Prov` int(11) DEFAULT NULL,
  `Num_Prod_Prov` int(11) DEFAULT NULL,
  `Descrip_Prod_Prov` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Num_Unit_Prod` double DEFAULT NULL,
  `Preu_Unit_Prod` double DEFAULT NULL,
  `Preu_Total_Prod` double DEFAULT NULL,
  PRIMARY KEY (`Id_Comanda_Prov_Aux`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_comercials`
--

DROP TABLE IF EXISTS `t_comercials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_comercials` (
  `Id_Comercial` int(11) NOT NULL AUTO_INCREMENT,
  `Codi_Comercial` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nom_Comercial` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id_Comercial`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_comptador_comanda`
--

DROP TABLE IF EXISTS `t_comptador_comanda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_comptador_comanda` (
  `Id_Comptador_Comanda` int(11) NOT NULL AUTO_INCREMENT,
  `Comptador_Comanda` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`Id_Comptador_Comanda`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_comunitats_autonomes`
--

DROP TABLE IF EXISTS `t_comunitats_autonomes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_comunitats_autonomes` (
  `Id_Comunitat` int(11) NOT NULL AUTO_INCREMENT,
  `Comunitat` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id_Comunitat`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_empreses`
--

DROP TABLE IF EXISTS `t_empreses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_empreses` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Marca` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Empresa` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Titular` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NIF` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Direccio` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CodPos` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Poblacio` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Telefon` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fax` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Web` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Num_Presup` int(11) DEFAULT NULL,
  `Num_Proforma` int(11) DEFAULT NULL,
  `Num_Albara` int(11) DEFAULT NULL,
  `Num_Fra` int(11) DEFAULT NULL,
  `Num_Client` int(11) DEFAULT NULL,
  `Num_FraRectif` int(11) DEFAULT NULL,
  `Path_Logo` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_empreses_path`
--

DROP TABLE IF EXISTS `t_empreses_path`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_empreses_path` (
  `Id_Empresa_Path` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Empresa` int(11) DEFAULT NULL,
  `Num_Any` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Carpeta_Pressupost` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Carpeta_Proforma` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Carpeta_Factura` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id_Empresa_Path`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_factura`
--

DROP TABLE IF EXISTS `t_factura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_factura` (
  `Id_Factura` int(11) NOT NULL AUTO_INCREMENT,
  `data_factura` datetime DEFAULT NULL,
  `data_vto_factura` datetime DEFAULT NULL,
  `num_factura` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nref` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_proforma` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_albara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_presup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base_imp` double DEFAULT NULL,
  `iva_var` int(11) DEFAULT NULL,
  `iva` double DEFAULT NULL,
  `req_var` double DEFAULT NULL,
  `REQ` double DEFAULT NULL,
  `total_fra` double DEFAULT NULL,
  `import_pendent` double DEFAULT NULL,
  `import_pagat` double DEFAULT NULL,
  `MetPag_Aux` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ultim_pagament` datetime DEFAULT NULL,
  `Client_Factura` int(11) DEFAULT NULL,
  `Metode_Pag` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Factura`),
  KEY `IDX_A3C7186AA90FA530` (`Client_Factura`),
  KEY `IDX_A3C7186A598BA9C3` (`Metode_Pag`),
  CONSTRAINT `FK_A3C7186A598BA9C3` FOREIGN KEY (`Metode_Pag`) REFERENCES `t_metode_pag` (`Id_Metode`),
  CONSTRAINT `FK_A3C7186AA90FA530` FOREIGN KEY (`Client_Factura`) REFERENCES `t_clients` (`Id_Cli`)
) ENGINE=InnoDB AUTO_INCREMENT=1651 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_factura_aux`
--

DROP TABLE IF EXISTS `t_factura_aux`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_factura_aux` (
  `Id_Factura_Aux` int(11) NOT NULL AUTO_INCREMENT,
  `Num_Linia` int(11) DEFAULT NULL,
  `DescripProd_Factura` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DescripParamImp_Factura` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NumUnit_Factura` double DEFAULT NULL,
  `PreuUnit_Factura` double DEFAULT NULL,
  `Preu_Factura` double DEFAULT NULL,
  `Baixa` tinyint(1) DEFAULT NULL,
  `Codi_Factura` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Num_Factura` int(11) NOT NULL,
  `CodProd_Factura` int(11) DEFAULT NULL,
  `CodParamImp_Factura` int(11) DEFAULT NULL,
  `Grup_Producte` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Factura_Aux`),
  KEY `IDX_7A63433675C90CAB` (`Num_Factura`),
  KEY `IDX_7A634336843C001E` (`CodProd_Factura`),
  KEY `IDX_7A63433626893C53` (`CodParamImp_Factura`),
  KEY `IDX_7A63433681669A0` (`Grup_Producte`),
  CONSTRAINT `FK_7A63433626893C53` FOREIGN KEY (`CodParamImp_Factura`) REFERENCES `t_paramimp` (`Id_ParamImp`),
  CONSTRAINT `FK_7A63433675C90CAB` FOREIGN KEY (`Num_Factura`) REFERENCES `t_factura` (`Id_Factura`),
  CONSTRAINT `FK_7A63433681669A0` FOREIGN KEY (`Grup_Producte`) REFERENCES `t_grup_producte` (`Id_GrupProducte`),
  CONSTRAINT `FK_7A634336843C001E` FOREIGN KEY (`CodProd_Factura`) REFERENCES `t_productes` (`Id_Prod`)
) ENGINE=InnoDB AUTO_INCREMENT=8976 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_factura_prov`
--

DROP TABLE IF EXISTS `t_factura_prov`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_factura_prov` (
  `Id_Factura_Prov` int(11) NOT NULL AUTO_INCREMENT,
  `Num_FraProv` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Data_FraProv` datetime DEFAULT NULL,
  `Data_Vto_FraProv` datetime DEFAULT NULL,
  `Data_Entrada_Prov` datetime DEFAULT NULL,
  `BImp_FraProv` double DEFAULT NULL,
  `IVA_FraProv` double DEFAULT NULL,
  `Total_FraProv` double DEFAULT NULL,
  `IVA_Inclos` tinyint(1) DEFAULT NULL,
  `Import_Pendent` double DEFAULT NULL,
  `Import_Pagat` double DEFAULT NULL,
  `RE_DTO` double DEFAULT NULL,
  `Exent_IVA` double DEFAULT NULL,
  `Proveidor` int(11) NOT NULL,
  PRIMARY KEY (`Id_Factura_Prov`),
  KEY `IDX_4CCD6FB7DEE755D5` (`Proveidor`),
  CONSTRAINT `FK_4CCD6FB7DEE755D5` FOREIGN KEY (`Proveidor`) REFERENCES `t_proveidors` (`Id_Prov`)
) ENGINE=InnoDB AUTO_INCREMENT=784 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_factura_prov_vto`
--

DROP TABLE IF EXISTS `t_factura_prov_vto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_factura_prov_vto` (
  `Id_Factura_Prov_Vto` int(11) NOT NULL AUTO_INCREMENT,
  `Data_FraProv_Vto` datetime DEFAULT NULL,
  `Concepte_FraProv_Vto` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `InstPag_Aux_FraProv_Vto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Import_FraProv_Vto` double DEFAULT NULL,
  `DataPag_FraProv_Vto` datetime DEFAULT NULL,
  `OKBanc_FraProv_Vto` datetime DEFAULT NULL,
  `Num_FraProv_Vto` int(11) DEFAULT NULL,
  `InstPag_FraProv_Vto` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Factura_Prov_Vto`),
  KEY `IDX_B6184AB7D21EC69D` (`Num_FraProv_Vto`),
  KEY `IDX_B6184AB762419F3B` (`InstPag_FraProv_Vto`),
  CONSTRAINT `FK_B6184AB762419F3B` FOREIGN KEY (`InstPag_FraProv_Vto`) REFERENCES `t_instrument_pag_prov` (`Id_Inst_Pag`),
  CONSTRAINT `FK_B6184AB7D21EC69D` FOREIGN KEY (`Num_FraProv_Vto`) REFERENCES `t_factura_prov` (`Id_Factura_Prov`)
) ENGINE=InnoDB AUTO_INCREMENT=763 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_factura_vto`
--

DROP TABLE IF EXISTS `t_factura_vto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_factura_vto` (
  `Id_Factura_Vto` int(11) NOT NULL AUTO_INCREMENT,
  `Data_Vto` datetime DEFAULT NULL,
  `Concepte_Vto` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `InstPag_Aux` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Import_Vto` double DEFAULT NULL,
  `DataPag_Vto` datetime DEFAULT NULL,
  `ImportPag_Vto` double DEFAULT NULL,
  `OKBanc_Vto` datetime DEFAULT NULL,
  `Num_Factura` int(11) DEFAULT NULL,
  `InstPag` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Factura_Vto`),
  KEY `IDX_F9C2424575C90CAB` (`Num_Factura`),
  KEY `IDX_F9C24245E7A2AC87` (`InstPag`),
  CONSTRAINT `FK_F9C2424575C90CAB` FOREIGN KEY (`Num_Factura`) REFERENCES `t_factura` (`Id_Factura`),
  CONSTRAINT `FK_F9C24245E7A2AC87` FOREIGN KEY (`InstPag`) REFERENCES `t_instrument_pag` (`Id_Inst_Pag`)
) ENGINE=InnoDB AUTO_INCREMENT=2067 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_factura_vto_aux`
--

DROP TABLE IF EXISTS `t_factura_vto_aux`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_factura_vto_aux` (
  `Id_Factura_Vto_Aux` int(11) NOT NULL AUTO_INCREMENT,
  `Data_Factura` datetime DEFAULT NULL,
  `Num_Factura` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Total_Fra` double DEFAULT NULL,
  `Import_Pendent` double DEFAULT NULL,
  `Import_Pagat` double DEFAULT NULL,
  `Data_Vto_1` datetime DEFAULT NULL,
  `DataPag_Vto_1` datetime DEFAULT NULL,
  `Inst_Pag_Vto_1` int(11) DEFAULT NULL,
  `Import_Vto_1` double DEFAULT NULL,
  `Import_Pag_Vto_1` double DEFAULT NULL,
  `OKBanc_Vto_1` datetime DEFAULT NULL,
  `Id_Factura_Vto_2` int(11) DEFAULT NULL,
  `Data_Vto_2` datetime DEFAULT NULL,
  `DataPag_Vto_2` datetime DEFAULT NULL,
  `Inst_Pag_Vto_2` int(11) DEFAULT NULL,
  `Import_Vto_2` double DEFAULT NULL,
  `Import_Pag_Vto_2` double DEFAULT NULL,
  `OKBanc_Vto_2` datetime DEFAULT NULL,
  `Id_Factura_Vto_3` int(11) DEFAULT NULL,
  `Data_Vto_3` datetime DEFAULT NULL,
  `DataPag_Vto_3` datetime DEFAULT NULL,
  `Inst_Pag_Vto_3` int(11) DEFAULT NULL,
  `Import_Vto_3` double DEFAULT NULL,
  `Import_Pag_Vto_3` double DEFAULT NULL,
  `OKBanc_Vto_3` datetime DEFAULT NULL,
  `Id_Factura` int(11) DEFAULT NULL,
  `Client_Factura` int(11) DEFAULT NULL,
  `Id_Factura_Vto_1` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Factura_Vto_Aux`),
  KEY `IDX_15D01B97A7963335` (`Id_Factura`),
  KEY `IDX_15D01B97A90FA530` (`Client_Factura`),
  KEY `IDX_15D01B97C6487A48` (`Id_Factura_Vto_1`),
  CONSTRAINT `FK_15D01B97A7963335` FOREIGN KEY (`Id_Factura`) REFERENCES `t_factura` (`Id_Factura`),
  CONSTRAINT `FK_15D01B97A90FA530` FOREIGN KEY (`Client_Factura`) REFERENCES `t_clients` (`Id_Cli`),
  CONSTRAINT `FK_15D01B97C6487A48` FOREIGN KEY (`Id_Factura_Vto_1`) REFERENCES `t_factura_vto` (`Id_Factura_Vto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_fitxers_tarifes`
--

DROP TABLE IF EXISTS `t_fitxers_tarifes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_fitxers_tarifes` (
  `Id_Fitxer` int(11) NOT NULL AUTO_INCREMENT,
  `Producte` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Path_Fitxer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nom_Fitxer` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id_Fitxer`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_fitxers_tarifes_esp`
--

DROP TABLE IF EXISTS `t_fitxers_tarifes_esp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_fitxers_tarifes_esp` (
  `Id_Fitxer` int(11) NOT NULL AUTO_INCREMENT,
  `Producte` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Path_Fitxer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nom_Fitxer` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id_Fitxer`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_fraproforma`
--

DROP TABLE IF EXISTS `t_fraproforma`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_fraproforma` (
  `Id_FraProf` int(11) NOT NULL AUTO_INCREMENT,
  `Persona_FraProf` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Data_FraProf` datetime DEFAULT NULL,
  `Num_FraProf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ref_Presup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ref_Albara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ref_Factura` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NRef` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SRef` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Valorada` tinyint(1) DEFAULT NULL,
  `Base_Imp` double DEFAULT NULL,
  `IVA` double DEFAULT NULL,
  `REQ` double DEFAULT NULL,
  `IVA_VAR` double DEFAULT NULL,
  `REQ_VAR` double DEFAULT NULL,
  `Total_Fra` double DEFAULT NULL,
  `Import_Pendent` double DEFAULT NULL,
  `Import_Pagat` double DEFAULT NULL,
  `MetPag_Aux` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Observ_FraProf` varchar(1200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Seguiment` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Data_Gravacio` datetime DEFAULT NULL,
  `Hora_Gravacio` datetime DEFAULT NULL,
  `Acceptada` tinyint(1) DEFAULT NULL,
  `Data_Acceptacio` datetime DEFAULT NULL,
  `Hora_Acceptacio` datetime DEFAULT NULL,
  `Ultim_Pagament` datetime DEFAULT NULL,
  `Facturar` tinyint(1) DEFAULT NULL,
  `Data_Produccio` datetime DEFAULT NULL,
  `Hora_Produccio` datetime DEFAULT NULL,
  `Produccio` tinyint(1) DEFAULT NULL,
  `Client_FraProf` int(11) DEFAULT NULL,
  `Metode_Pag` int(11) DEFAULT NULL,
  `Num_Autor` int(11) DEFAULT NULL,
  `Num_Autor_Proforma` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_FraProf`),
  KEY `IDX_DCB2796B1D9A5136` (`Client_FraProf`),
  KEY `IDX_DCB2796B598BA9C3` (`Metode_Pag`),
  KEY `IDX_DCB2796B35B4426B` (`Num_Autor`),
  KEY `IDX_DCB2796B6136AFA4` (`Num_Autor_Proforma`),
  CONSTRAINT `FK_DCB2796B1D9A5136` FOREIGN KEY (`Client_FraProf`) REFERENCES `t_clients` (`Id_Cli`),
  CONSTRAINT `FK_DCB2796B35B4426B` FOREIGN KEY (`Num_Autor`) REFERENCES `t_autors_presup` (`Id_AutPresup`),
  CONSTRAINT `FK_DCB2796B598BA9C3` FOREIGN KEY (`Metode_Pag`) REFERENCES `t_metode_pag` (`Id_Metode`),
  CONSTRAINT `FK_DCB2796B6136AFA4` FOREIGN KEY (`Num_Autor_Proforma`) REFERENCES `t_autors_presup` (`Id_AutPresup`)
) ENGINE=InnoDB AUTO_INCREMENT=6810 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_fraproforma_aux`
--

DROP TABLE IF EXISTS `t_fraproforma_aux`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_fraproforma_aux` (
  `Id_FraProforma_Aux` int(11) NOT NULL AUTO_INCREMENT,
  `Num_Linia` int(11) DEFAULT NULL,
  `DescripProd_Proforma` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DescripParamImp_Proforma` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NumUnit_Proforma` double DEFAULT NULL,
  `PreuUnit_Proforma` double DEFAULT NULL,
  `Preu_Proforma` double DEFAULT NULL,
  `Baixa` tinyint(1) DEFAULT NULL,
  `Marcat` tinyint(1) DEFAULT NULL,
  `Prod_Principal` tinyint(1) DEFAULT NULL,
  `Codi_FraProforma` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Num_Proforma` int(11) NOT NULL,
  `Grup_Producte` int(11) DEFAULT NULL,
  `CodProd_Proforma` int(11) DEFAULT NULL,
  `CodParamImp_Proforma` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_FraProforma_Aux`),
  KEY `IDX_1938645ABBD74FBE` (`Num_Proforma`),
  KEY `IDX_1938645A81669A0` (`Grup_Producte`),
  KEY `IDX_1938645A2DFDB1` (`CodProd_Proforma`),
  KEY `IDX_1938645A8E275A0` (`CodParamImp_Proforma`),
  CONSTRAINT `FK_1938645A2DFDB1` FOREIGN KEY (`CodProd_Proforma`) REFERENCES `t_productes` (`Id_Prod`),
  CONSTRAINT `FK_1938645A81669A0` FOREIGN KEY (`Grup_Producte`) REFERENCES `t_grup_producte` (`Id_GrupProducte`),
  CONSTRAINT `FK_1938645A8E275A0` FOREIGN KEY (`CodParamImp_Proforma`) REFERENCES `t_paramimp` (`Id_ParamImp`),
  CONSTRAINT `FK_1938645ABBD74FBE` FOREIGN KEY (`Num_Proforma`) REFERENCES `t_fraproforma` (`Id_FraProf`)
) ENGINE=InnoDB AUTO_INCREMENT=43696 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_fraproforma_plazos`
--

DROP TABLE IF EXISTS `t_fraproforma_plazos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_fraproforma_plazos` (
  `Id_FraProforma_Plazo` int(11) NOT NULL AUTO_INCREMENT,
  `DescripProd_FraProf_Plazo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Baixa` tinyint(1) DEFAULT NULL,
  `Num_FraProforma` int(11) DEFAULT NULL,
  `CodProd_FraProf_Plazo` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_FraProforma_Plazo`),
  KEY `IDX_4D9DE2E0129C39D` (`Num_FraProforma`),
  KEY `IDX_4D9DE2E02081527` (`CodProd_FraProf_Plazo`),
  CONSTRAINT `FK_4D9DE2E0129C39D` FOREIGN KEY (`Num_FraProforma`) REFERENCES `t_fraproforma` (`Id_FraProf`),
  CONSTRAINT `FK_4D9DE2E02081527` FOREIGN KEY (`CodProd_FraProf_Plazo`) REFERENCES `t_productes` (`Id_Prod`)
) ENGINE=InnoDB AUTO_INCREMENT=22021 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_fraproforma_vto`
--

DROP TABLE IF EXISTS `t_fraproforma_vto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_fraproforma_vto` (
  `Id_FraProforma_Vto` int(11) NOT NULL AUTO_INCREMENT,
  `Concepte_Vto` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `InstPag_Aux` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Import_Vto` double DEFAULT NULL,
  `DataPag_Vto` datetime DEFAULT NULL,
  `ImportPag_Vto` double DEFAULT NULL,
  `OKBanc_Vto` datetime DEFAULT NULL,
  `Num_Proforma` int(11) DEFAULT NULL,
  `InstPag` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_FraProforma_Vto`),
  KEY `IDX_9A996529BBD74FBE` (`Num_Proforma`),
  KEY `IDX_9A996529E7A2AC87` (`InstPag`),
  CONSTRAINT `FK_9A996529BBD74FBE` FOREIGN KEY (`Num_Proforma`) REFERENCES `t_fraproforma` (`Id_FraProf`),
  CONSTRAINT `FK_9A996529E7A2AC87` FOREIGN KEY (`InstPag`) REFERENCES `t_instrument_pag` (`Id_Inst_Pag`)
) ENGINE=InnoDB AUTO_INCREMENT=12306 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_grup_gral`
--

DROP TABLE IF EXISTS `t_grup_gral`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_grup_gral` (
  `Id_Grupo` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Grupo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id_Grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_grup_producte`
--

DROP TABLE IF EXISTS `t_grup_producte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_grup_producte` (
  `Id_GrupProducte` int(11) NOT NULL AUTO_INCREMENT,
  `Num_Grup_Producte` int(11) DEFAULT NULL,
  `Descrip_Grup_Producte` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Admet_Marcatge` tinyint(1) DEFAULT NULL,
  `Grup_Gral` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_GrupProducte`),
  KEY `IDX_6706C5C2D4EAEDF5` (`Grup_Gral`),
  CONSTRAINT `FK_6706C5C2D4EAEDF5` FOREIGN KEY (`Grup_Gral`) REFERENCES `t_grup_gral` (`Id_Grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_instrument_pag`
--

DROP TABLE IF EXISTS `t_instrument_pag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_instrument_pag` (
  `Id_Inst_Pag` int(11) NOT NULL AUTO_INCREMENT,
  `Cod_Inst_Pag` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nom_Inst_Pag` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Descripcio_Instrument` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Baixa` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Id_Inst_Pag`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_instrument_pag_prov`
--

DROP TABLE IF EXISTS `t_instrument_pag_prov`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_instrument_pag_prov` (
  `Id_Inst_Pag` int(11) NOT NULL AUTO_INCREMENT,
  `Cod_Inst_Pag` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nom_Inst_Pag` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Descripcio_Instrument` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Descripcio2_Instrument` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id_Inst_Pag`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_metode_pag`
--

DROP TABLE IF EXISTS `t_metode_pag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_metode_pag` (
  `Id_Metode` int(11) NOT NULL AUTO_INCREMENT,
  `Metode` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nom_Metode` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Temps` int(11) DEFAULT NULL,
  `Descripcio` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id_Metode`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_observ_plazo_entrega`
--

DROP TABLE IF EXISTS `t_observ_plazo_entrega`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_observ_plazo_entrega` (
  `Id_Observ_Plazo_Entrega` int(11) NOT NULL AUTO_INCREMENT,
  `Titol_PlazoEntrega` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NoUrgente_Titol` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NoUrgente_Descrip` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Urgente_Titol` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Urgente_Descrip1` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Urgente_Recargo` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Urgente_Descrip2` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Urgente_Descrip3` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PedidoSup_Titol` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PedidoSup_Descrip` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Valle_Recargo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id_Observ_Plazo_Entrega`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_observ_presup`
--

DROP TABLE IF EXISTS `t_observ_presup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_observ_presup` (
  `Id_Observ_Presup` int(11) NOT NULL AUTO_INCREMENT,
  `Observ_Presup` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Observ_Presup_Vto` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id_Observ_Presup`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_observ_proforma`
--

DROP TABLE IF EXISTS `t_observ_proforma`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_observ_proforma` (
  `Id_Observ_Proforma` int(11) NOT NULL AUTO_INCREMENT,
  `Observ_Proforma` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id_Observ_Proforma`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_ordre_treball`
--

DROP TABLE IF EXISTS `t_ordre_treball`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_ordre_treball` (
  `Id_Ordre` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Client` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Num_SubOrdre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Campanya` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Descrip_Ordre_Treball` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Proveidor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Entrega_Disseny` datetime DEFAULT NULL,
  `Sortida_Calandra` datetime DEFAULT NULL,
  `Sortida_Impressio` datetime DEFAULT NULL,
  `Sortida_Produccio` datetime DEFAULT NULL,
  `Entrega_Client` datetime DEFAULT NULL,
  `Dissenyador` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Posta_Marxa` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Calandra` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Anonim` tinyint(1) DEFAULT NULL,
  `Adreça_Entrega` tinyint(1) DEFAULT NULL,
  `Recull_Client` tinyint(1) DEFAULT NULL,
  `Ports_Deguts` tinyint(1) DEFAULT NULL,
  `Servei_Urgent_8_30` tinyint(1) DEFAULT NULL,
  `Servei_Urgent_10` tinyint(1) DEFAULT NULL,
  `Servei_Urgent_12` tinyint(1) DEFAULT NULL,
  `Servei_Urgent_14` tinyint(1) DEFAULT NULL,
  `Observacions_Disseny` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Observacions_Produccio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Persona` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Resum_Unitats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Resum_Productes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Unitats` int(11) DEFAULT NULL,
  `Num_Client` int(11) DEFAULT NULL,
  `Grup_Producte` int(11) DEFAULT NULL,
  `Num_FraProforma` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Ordre`),
  KEY `IDX_19B471553694550B` (`Num_Client`),
  KEY `IDX_19B4715581669A0` (`Grup_Producte`),
  KEY `IDX_19B47155129C39D` (`Num_FraProforma`),
  CONSTRAINT `FK_19B47155129C39D` FOREIGN KEY (`Num_FraProforma`) REFERENCES `t_fraproforma` (`Id_FraProf`),
  CONSTRAINT `FK_19B471553694550B` FOREIGN KEY (`Num_Client`) REFERENCES `t_clients` (`Id_Cli`),
  CONSTRAINT `FK_19B4715581669A0` FOREIGN KEY (`Grup_Producte`) REFERENCES `t_grup_producte` (`Id_GrupProducte`)
) ENGINE=InnoDB AUTO_INCREMENT=3398 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_ordre_treball_aux`
--

DROP TABLE IF EXISTS `t_ordre_treball_aux`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_ordre_treball_aux` (
  `Id_Ordre_Treball_Aux` int(11) NOT NULL AUTO_INCREMENT,
  `Num_Linia` int(11) DEFAULT NULL,
  `DescripProd_Ordre_Treball` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DescripParamImp_Ordre_Treball` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NumUnit_Ordre_Treball` double DEFAULT NULL,
  `Metres` int(11) DEFAULT NULL,
  `Longitud` int(11) DEFAULT NULL,
  `Departament` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Baixa` tinyint(1) DEFAULT NULL,
  `Ample` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Cares` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Codi_Ordre_Treball` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Codi_FraProforma` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Linia_Proforma` int(11) DEFAULT NULL,
  `Principal` tinyint(1) DEFAULT NULL,
  `Num_Ordre_Treball` int(11) NOT NULL,
  `Id_FraProforma_Aux` int(11) DEFAULT NULL,
  `Grup_Producte` int(11) DEFAULT NULL,
  `CodParamImp_Ordre_Treball` int(11) DEFAULT NULL,
  `CodProd_Ordre_Treball` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Ordre_Treball_Aux`),
  KEY `IDX_BA8B2BC9F0068A2B` (`Num_Ordre_Treball`),
  KEY `IDX_BA8B2BC94AAA08DC` (`Id_FraProforma_Aux`),
  KEY `IDX_BA8B2BC981669A0` (`Grup_Producte`),
  KEY `IDX_BA8B2BC95D08610D` (`CodParamImp_Ordre_Treball`),
  KEY `IDX_BA8B2BC97A4F1A9E` (`CodProd_Ordre_Treball`),
  CONSTRAINT `FK_BA8B2BC94AAA08DC` FOREIGN KEY (`Id_FraProforma_Aux`) REFERENCES `t_fraproforma_aux` (`Id_FraProforma_Aux`),
  CONSTRAINT `FK_BA8B2BC95D08610D` FOREIGN KEY (`CodParamImp_Ordre_Treball`) REFERENCES `t_paramimp` (`Id_ParamImp`),
  CONSTRAINT `FK_BA8B2BC97A4F1A9E` FOREIGN KEY (`CodProd_Ordre_Treball`) REFERENCES `t_productes` (`Id_Prod`),
  CONSTRAINT `FK_BA8B2BC981669A0` FOREIGN KEY (`Grup_Producte`) REFERENCES `t_grup_producte` (`Id_GrupProducte`),
  CONSTRAINT `FK_BA8B2BC9F0068A2B` FOREIGN KEY (`Num_Ordre_Treball`) REFERENCES `t_ordre_treball` (`Id_Ordre`)
) ENGINE=InnoDB AUTO_INCREMENT=15671 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_ordre_treball_dream_ribbons_shop`
--

DROP TABLE IF EXISTS `t_ordre_treball_dream_ribbons_shop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_ordre_treball_dream_ribbons_shop` (
  `Id_OT_DRS` int(11) NOT NULL AUTO_INCREMENT,
  `Comanda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Data_Comanda` datetime DEFAULT NULL,
  `Data_Entrega` datetime DEFAULT NULL,
  PRIMARY KEY (`Id_OT_DRS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_paisos`
--

DROP TABLE IF EXISTS `t_paisos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_paisos` (
  `Id_Pais` int(11) NOT NULL AUTO_INCREMENT,
  `Pais` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Preftel_Pais` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id_Pais`)
) ENGINE=InnoDB AUTO_INCREMENT=234 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_paramimp`
--

DROP TABLE IF EXISTS `t_paramimp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_paramimp` (
  `Id_ParamImp` int(11) NOT NULL AUTO_INCREMENT,
  `Codi_ParamImp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nom_ParamImp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nom_ParamImp_Cat` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id_ParamImp`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_personal`
--

DROP TABLE IF EXISTS `t_personal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_personal` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `DNI` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nom` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Cognom1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Cognom2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Direccio` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CodPos` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Poblacio` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Provincia` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Telefon` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mobil` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NumSS` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CtaCte` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_precios_cantidad`
--

DROP TABLE IF EXISTS `t_precios_cantidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_precios_cantidad` (
  `producto_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` int(11) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `IDX_5737A40A7645698E` (`producto_id`),
  CONSTRAINT `FK_5737A40A7645698E` FOREIGN KEY (`producto_id`) REFERENCES `t_productes` (`Ref_Prod`)
) ENGINE=InnoDB AUTO_INCREMENT=20306 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_presup`
--

DROP TABLE IF EXISTS `t_presup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_presup` (
  `Id_Presup` int(11) NOT NULL AUTO_INCREMENT,
  `Num_Presup` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Marca_Cli` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Persona_Presup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dades_Client_Presup` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Data_Presup` datetime DEFAULT NULL,
  `Text_Data_Presup` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FraProf_Presup` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fra_Presup` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Deneg_Presup` tinyint(1) DEFAULT NULL,
  `NRef1` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NRef2` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TerminiE_Presup` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MetPag_Aux` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ObservAux_Presup` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ObservVto_Presup` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Titol_PlazoEntrega_Aux` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NoUrgente_Titol_Aux` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NoUrgente_Descrip_Aux` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Urgente_Titol_Aux` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Urgente_Descrip1_Aux` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Urgente_Recargo_Aux` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Urgente_Descrip2_Aux` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Urgente_Descrip3_Aux` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PedidoSup_Titol_Aux` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PedidoSup_Descrip_Aux` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Data_Alta` datetime DEFAULT NULL,
  `Hora_Alta` datetime DEFAULT NULL,
  `Seguiment` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Total_Presup` double DEFAULT NULL,
  `Client_Presup` int(11) NOT NULL,
  `Comercial` int(11) NOT NULL,
  `MetPag_Presup` int(11) NOT NULL,
  `Autor_Presup` int(11) NOT NULL,
  PRIMARY KEY (`Id_Presup`),
  KEY `IDX_48974A848084370A` (`Client_Presup`),
  KEY `IDX_48974A846FE046CF` (`Comercial`),
  KEY `IDX_48974A8421FE3882` (`MetPag_Presup`),
  KEY `IDX_48974A84CF68318A` (`Autor_Presup`),
  CONSTRAINT `FK_48974A8421FE3882` FOREIGN KEY (`MetPag_Presup`) REFERENCES `t_metode_pag` (`Id_Metode`),
  CONSTRAINT `FK_48974A846FE046CF` FOREIGN KEY (`Comercial`) REFERENCES `t_comercials` (`Id_Comercial`),
  CONSTRAINT `FK_48974A848084370A` FOREIGN KEY (`Client_Presup`) REFERENCES `t_clients` (`Id_Cli`),
  CONSTRAINT `FK_48974A84CF68318A` FOREIGN KEY (`Autor_Presup`) REFERENCES `t_autors_presup` (`Id_AutPresup`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_presup_aux`
--

DROP TABLE IF EXISTS `t_presup_aux`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_presup_aux` (
  `Id_Presup_Aux` int(11) NOT NULL AUTO_INCREMENT,
  `Num_Linia` int(11) DEFAULT NULL,
  `DescripProd_Presup` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DescripParamImp_Presup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NumUnit_Presup` double DEFAULT NULL,
  `PreuUnit_Presup` double DEFAULT NULL,
  `Baixa` tinyint(1) DEFAULT NULL,
  `Num_Presup` int(11) NOT NULL,
  `CodParamImp_Presup` int(11) NOT NULL,
  `CodProd_Presup` int(11) NOT NULL,
  PRIMARY KEY (`Id_Presup_Aux`),
  KEY `IDX_AE98E94790206324` (`Num_Presup`),
  KEY `IDX_AE98E9476383ABD6` (`CodParamImp_Presup`),
  KEY `IDX_AE98E947B1CE94F5` (`CodProd_Presup`),
  CONSTRAINT `FK_AE98E9476383ABD6` FOREIGN KEY (`CodParamImp_Presup`) REFERENCES `t_paramimp` (`Id_ParamImp`),
  CONSTRAINT `FK_AE98E94790206324` FOREIGN KEY (`Num_Presup`) REFERENCES `t_presup` (`Id_Presup`),
  CONSTRAINT `FK_AE98E947B1CE94F5` FOREIGN KEY (`CodProd_Presup`) REFERENCES `t_productes` (`Id_Prod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_presup_vto`
--

DROP TABLE IF EXISTS `t_presup_vto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_presup_vto` (
  `Id_Presup_Vto` int(11) NOT NULL AUTO_INCREMENT,
  `Concepte_Vto` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `InstPag_Aux` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Num_Presup` int(11) NOT NULL,
  `InstPag` int(11) NOT NULL,
  PRIMARY KEY (`Id_Presup_Vto`),
  KEY `IDX_2D39E83490206324` (`Num_Presup`),
  KEY `IDX_2D39E834E7A2AC87` (`InstPag`),
  CONSTRAINT `FK_2D39E83490206324` FOREIGN KEY (`Num_Presup`) REFERENCES `t_presup` (`Id_Presup`),
  CONSTRAINT `FK_2D39E834E7A2AC87` FOREIGN KEY (`InstPag`) REFERENCES `t_instrument_pag` (`Id_Inst_Pag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_productes`
--

DROP TABLE IF EXISTS `t_productes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_productes` (
  `Id_Prod` int(11) NOT NULL AUTO_INCREMENT,
  `Ordre` smallint(6) DEFAULT NULL,
  `Ref_Prod` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ETIQUETA` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nom_Prod` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nom_Prod_Curt` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DESCRIPOT` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DESCRIPAL` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Baixa` tinyint(1) DEFAULT NULL,
  `Disseny` tinyint(1) DEFAULT NULL,
  `Produccio` tinyint(1) DEFAULT NULL,
  `FOTO` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Grup_Producte` int(11) DEFAULT NULL,
  `Color` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Prod`),
  KEY `IDX_7F1219A81669A0` (`Grup_Producte`),
  KEY `IDX_7F1219AA79767ED` (`Color`),
  KEY `ref_prod_index` (`Ref_Prod`),
  CONSTRAINT `FK_7F1219A81669A0` FOREIGN KEY (`Grup_Producte`) REFERENCES `t_grup_producte` (`Id_GrupProducte`),
  CONSTRAINT `FK_7F1219AA79767ED` FOREIGN KEY (`Color`) REFERENCES `t_colors` (`Id_Color`)
) ENGINE=InnoDB AUTO_INCREMENT=578 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_productes_prov`
--

DROP TABLE IF EXISTS `t_productes_prov`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_productes_prov` (
  `Id_Prod_Prov` int(11) NOT NULL AUTO_INCREMENT,
  `Codi_Producte` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Descrip_Producte` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PreuUnit_Producte` double DEFAULT NULL,
  `Num_Proveidor` int(11) NOT NULL,
  PRIMARY KEY (`Id_Prod_Prov`),
  KEY `IDX_6357680E1F476AFC` (`Num_Proveidor`),
  CONSTRAINT `FK_6357680E1F476AFC` FOREIGN KEY (`Num_Proveidor`) REFERENCES `t_proveidors` (`Id_Prov`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_productes_tarifa`
--

DROP TABLE IF EXISTS `t_productes_tarifa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_productes_tarifa` (
  `Id_Prod_Tarifa` int(11) NOT NULL AUTO_INCREMENT,
  `Marca` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Path_Excel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Sheet_Excel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Columna_Ample` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Columna_Rang` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fila_Rang1` int(11) DEFAULT NULL,
  `Fila_Rang2` int(11) DEFAULT NULL,
  `Id_Producte` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Prod_Tarifa`),
  KEY `IDX_9CF9ECE8685FEE1F` (`Id_Producte`),
  CONSTRAINT `FK_9CF9ECE8685FEE1F` FOREIGN KEY (`Id_Producte`) REFERENCES `t_productes` (`Id_Prod`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_proveidors`
--

DROP TABLE IF EXISTS `t_proveidors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_proveidors` (
  `Id_Prov` int(11) NOT NULL AUTO_INCREMENT,
  `Codi_Prov` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NIF_Prov` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Proveidor` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Proveidor_Com` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nom_Prov` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Cognom_Prov` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Carrec_Prov` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dir_Prov` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CodP_Prov` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Pob_Prov` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tel_Prov` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fax_Prov` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mob_Prov` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email_Prov` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Web_Prov` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dia_Pag` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CC_Prov` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Observacions_Prov` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Activitat_Prov` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mailing` tinyint(1) DEFAULT NULL,
  `Stock` tinyint(1) DEFAULT NULL,
  `Tract_Prov` int(11) DEFAULT NULL,
  `Inst_Pag` int(11) DEFAULT NULL,
  `Met_Pag` int(11) DEFAULT NULL,
  `Pais_Prov` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Prov`),
  KEY `IDX_F66130A5C6B4547A` (`Tract_Prov`),
  KEY `IDX_F66130A5597F972E` (`Inst_Pag`),
  KEY `IDX_F66130A5BC398C78` (`Met_Pag`),
  KEY `IDX_F66130A566BACB43` (`Pais_Prov`),
  CONSTRAINT `FK_F66130A5597F972E` FOREIGN KEY (`Inst_Pag`) REFERENCES `t_instrument_pag` (`Id_Inst_Pag`),
  CONSTRAINT `FK_F66130A566BACB43` FOREIGN KEY (`Pais_Prov`) REFERENCES `t_paisos` (`Id_Pais`),
  CONSTRAINT `FK_F66130A5BC398C78` FOREIGN KEY (`Met_Pag`) REFERENCES `t_metode_pag` (`Id_Metode`),
  CONSTRAINT `FK_F66130A5C6B4547A` FOREIGN KEY (`Tract_Prov`) REFERENCES `t_tractaments` (`Id_Tract`)
) ENGINE=InnoDB AUTO_INCREMENT=1184 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_provincies`
--

DROP TABLE IF EXISTS `t_provincies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_provincies` (
  `Id_Provincia` int(11) NOT NULL AUTO_INCREMENT,
  `Provincia` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CodPos` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CodTel` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Id_Comunitat` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Provincia`),
  KEY `IDX_AF5AEC53390D1119` (`Id_Comunitat`),
  CONSTRAINT `FK_AF5AEC53390D1119` FOREIGN KEY (`Id_Comunitat`) REFERENCES `t_comunitats_autonomes` (`Id_Comunitat`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_tractaments`
--

DROP TABLE IF EXISTS `t_tractaments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_tractaments` (
  `Id_Tract` int(11) NOT NULL AUTO_INCREMENT,
  `Tractament` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id_Tract`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `talbarra_aux`
--

DROP TABLE IF EXISTS `talbarra_aux`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `talbarra_aux` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-04 15:02:59
