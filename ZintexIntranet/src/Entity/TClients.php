<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TClients
 *
 * @ORM\Table(name="t_clients")
 * @ORM\Entity
 */
class TClients
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Cli", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Marca_Cli", type="string", length=5, nullable=true)
     */
    private $marcaCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Codi_Cli", type="string", length=50, nullable=true)
     */
    private $codiCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Codi_Cli_DREAM", type="string", length=255, nullable=true)
     */
    private $codiCliDream;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NIF_Cli", type="string", length=15, nullable=true)
     */
    private $nifCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Client", type="string", length=255, nullable=true)
     */
    private $client;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Client_Com", type="string", length=255, nullable=true)
     */
    private $clientCom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Tract_Cli", type="integer", nullable=true)
     */
    private $tractCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NomFra_Cli", type="string", length=255, nullable=true)
     */
    private $nomfraCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CognomFra_Cli", type="string", length=255, nullable=true)
     */
    private $cognomfraCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CarrecFra_cli", type="string", length=255, nullable=true)
     */
    private $carrecfraCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DirFra_Cli", type="string", length=1000, nullable=true)
     */
    private $dirfraCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodPFra_Cli", type="string", length=255, nullable=true)
     */
    private $codpfraCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PobFra_Cli", type="string", length=255, nullable=true)
     */
    private $pobfraCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PaisFra_Cli", type="integer", nullable=true)
     */
    private $paisfraCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TelFra_Cli", type="string", length=25, nullable=true)
     */
    private $telfraCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FaxFra_Cli", type="string", length=25, nullable=true)
     */
    private $faxfraCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MobFra_Cli", type="string", length=25, nullable=true)
     */
    private $mobfraCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email_Cli", type="string", length=200, nullable=true)
     */
    private $emailCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EmpEnt_Cli", type="string", length=255, nullable=true)
     */
    private $empentCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TractEnt_Cli", type="integer", nullable=true)
     */
    private $tractentCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PersEnt_Cli", type="string", length=255, nullable=true)
     */
    private $persentCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DirEnt_Cli", type="string", length=1000, nullable=true)
     */
    private $direntCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodPEnt_Cli", type="string", length=50, nullable=true)
     */
    private $codpentCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PobEnt_Cli", type="string", length=255, nullable=true)
     */
    private $pobentCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PaisEnt_Cli", type="integer", nullable=true)
     */
    private $paisentCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TelEnt_Cli", type="string", length=25, nullable=true)
     */
    private $telentCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FaxEnt_Cli", type="string", length=16, nullable=true)
     */
    private $faxentCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Web_Cli", type="string", length=200, nullable=true)
     */
    private $webCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Met_Pag", type="integer", nullable=true)
     */
    private $metPag;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Inst_Pag", type="integer", nullable=true)
     */
    private $instPag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dia_Pag", type="string", length=2, nullable=true)
     */
    private $diaPag;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Problema_Pag", type="boolean", nullable=true)
     */
    private $problemaPag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TitularCC_Cli", type="string", length=50, nullable=true)
     */
    private $titularccCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_Cli", type="string", length=20, nullable=true)
     */
    private $ccCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PersFin_Cli", type="string", length=50, nullable=true)
     */
    private $persfinCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CarrecFin_Cli", type="string", length=50, nullable=true)
     */
    private $carrecfinCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TelFin_cli", type="string", length=16, nullable=true)
     */
    private $telfinCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EmailFin_Cli", type="string", length=200, nullable=true)
     */
    private $emailfinCli;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Tipus_IVA", type="float", precision=10, scale=0, nullable=true)
     */
    private $tipusIva;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Tipus_REQ", type="float", precision=10, scale=0, nullable=true)
     */
    private $tipusReq;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Observacions_Cli", type="string", length=1000, nullable=true)
     */
    private $observacionsCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ObservacionsFin_Cli", type="string", length=1000, nullable=true)
     */
    private $observacionsfinCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Motiu_Contacte", type="string", length=255, nullable=true)
     */
    private $motiuContacte;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Mailing", type="boolean", nullable=true)
     */
    private $mailing;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="CAT", type="boolean", nullable=true)
     */
    private $cat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Client_CYCRED", type="string", length=50, nullable=true)
     */
    private $clientCycred;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Classificat_CYCRED", type="datetime", nullable=true)
     */
    private $classificatCycred;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Credit_CYCRED", type="integer", nullable=true)
     */
    private $creditCycred;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Status_CYCRED", type="string", length=50, nullable=true)
     */
    private $statusCycred;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Limit_CYCRED", type="string", length=1000, nullable=true)
     */
    private $limitCycred;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Baixa_CYCRED", type="datetime", nullable=true)
     */
    private $baixaCycred;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Agent_Comercial", type="integer", nullable=true)
     */
    private $numAgentComercial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Num_Ultim_Presup", type="string", length=50, nullable=true)
     */
    private $numUltimPresup;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Ultim_Presup", type="datetime", nullable=true)
     */
    private $dataUltimPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Num_Ultim_FraProforma", type="string", length=50, nullable=true)
     */
    private $numUltimFraproforma;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Ultim_FraProforma", type="datetime", nullable=true)
     */
    private $dataUltimFraproforma;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Num_Ultim_Factura", type="string", length=50, nullable=true)
     */
    private $numUltimFactura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Ultim_Factura", type="datetime", nullable=true)
     */
    private $dataUltimFactura;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="OKBanc_Domiciliacio", type="boolean", nullable=true)
     */
    private $okbancDomiciliacio;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Mailing_Nadal", type="boolean", nullable=true)
     */
    private $mailingNadal;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Especial", type="boolean", nullable=true)
     */
    private $especial;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Alta", type="datetime", nullable=true)
     */
    private $dataAlta;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hora_Alta", type="datetime", nullable=true)
     */
    private $horaAlta;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Baixa", type="boolean", nullable=true)
     */
    private $baixa;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Express_Afegit", type="boolean", nullable=true)
     */
    private $expressAfegit;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Express_Mai", type="boolean", nullable=true)
     */
    private $expressMai;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Majorista", type="boolean", nullable=true)
     */
    private $majorista;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Royalty", type="boolean", nullable=true)
     */
    private $royalty;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Activitat_1", type="integer", nullable=true)
     */
    private $activitat1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Activitat_2", type="string", length=255, nullable=true)
     */
    private $activitat2;


}
