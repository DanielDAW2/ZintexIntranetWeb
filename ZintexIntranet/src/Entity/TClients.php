<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\ManyToOne(targetEntity="TTractaments", inversedBy="client")
     * @ORM\JoinColumn(nullable=true,  referencedColumnName="Id_Tract")
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
     * @ORM\Column(name="Royalty", type="boolean", nullable=true)
     */
    private $royalty;

    /**
     * @var int|null
     *
     * @ORM\ManyToOne(targetEntity="TActivitatClient", inversedBy="activitatClient")
     * @ORM\JoinColumn(nullable=true)
     */
    private $activitat1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Activitat_2", type="string", length=255, nullable=true)
     */
    private $activitat2;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TFraproforma", mappedBy="clientFraprof")
     */
    private $tFraproformas;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TAlbara", mappedBy="clientAlbara")
     */
    private $TAlbara;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TPaisos", inversedBy="tClients")
     * @ORM\JoinColumn(referencedColumnName="Id_Pais")
     */
    private $paisfraCli;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TTractaments")
     * @ORM\JoinColumn(referencedColumnName="Id_Tract")
     */
    private $tractentCli;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TPaisos", inversedBy="TClient")
     * @ORM\JoinColumn(referencedColumnName="Id_Pais")
     */
    private $paisentCli;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TMetodePag")
     * @ORM\JoinColumn(referencedColumnName="Id_Metode")
     */
    private $metPag;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TInstrumentPag")
     * @ORM\JoinColumn(referencedColumnName="Id_Inst_Pag")
     */
    private $instPag;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TClientsMails", mappedBy="numClientMail")
     */
    private $tClientsMails;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TFactura", mappedBy="Client_Factura")
     */
    private $tFacturas;

    public function __construct()
    {
        $this->tFraproformas = new ArrayCollection();
        $this->TAlbara = new ArrayCollection();
        $this->tClientsMails = new ArrayCollection();
        $this->tFacturas = new ArrayCollection();
    }

    

    public function getIdCli(): ?int
    {
        return $this->idCli;
    }

    public function getMarcaCli(): ?string
    {
        return $this->marcaCli;
    }

    public function setMarcaCli(?string $marcaCli): self
    {
        $this->marcaCli = $marcaCli;

        return $this;
    }

    public function getCodiCli(): ?string
    {
        return $this->codiCli;
    }

    public function setCodiCli(?string $codiCli): self
    {
        $this->codiCli = $codiCli;

        return $this;
    }

    public function getCodiCliDream(): ?string
    {
        return $this->codiCliDream;
    }

    public function setCodiCliDream(?string $codiCliDream): self
    {
        $this->codiCliDream = $codiCliDream;

        return $this;
    }

    public function getNifCli(): ?string
    {
        return $this->nifCli;
    }

    public function setNifCli(?string $nifCli): self
    {
        $this->nifCli = $nifCli;

        return $this;
    }

    public function getClient(): ?string
    {
        return $this->client;
    }

    public function setClient(?string $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getClientCom(): ?string
    {
        return $this->clientCom;
    }

    public function setClientCom(?string $clientCom): self
    {
        $this->clientCom = $clientCom;

        return $this;
    }

    public function getTractCli(): ?int
    {
        return $this->tractCli;
    }

    public function setTractCli(?int $tractCli): self
    {
        $this->tractCli = $tractCli;

        return $this;
    }

    public function getNomfraCli(): ?string
    {
        return $this->nomfraCli;
    }

    public function setNomfraCli(?string $nomfraCli): self
    {
        $this->nomfraCli = $nomfraCli;

        return $this;
    }

    public function getCognomfraCli(): ?string
    {
        return $this->cognomfraCli;
    }

    public function setCognomfraCli(?string $cognomfraCli): self
    {
        $this->cognomfraCli = $cognomfraCli;

        return $this;
    }

    public function getCarrecfraCli(): ?string
    {
        return $this->carrecfraCli;
    }

    public function setCarrecfraCli(?string $carrecfraCli): self
    {
        $this->carrecfraCli = $carrecfraCli;

        return $this;
    }

    public function getDirfraCli(): ?string
    {
        return $this->dirfraCli;
    }

    public function setDirfraCli(?string $dirfraCli): self
    {
        $this->dirfraCli = $dirfraCli;

        return $this;
    }

    public function getCodpfraCli(): ?string
    {
        return $this->codpfraCli;
    }

    public function setCodpfraCli(?string $codpfraCli): self
    {
        $this->codpfraCli = $codpfraCli;

        return $this;
    }

    public function getPobfraCli(): ?string
    {
        return $this->pobfraCli;
    }

    public function setPobfraCli(?string $pobfraCli): self
    {
        $this->pobfraCli = $pobfraCli;

        return $this;
    }


    public function getTelfraCli(): ?string
    {
        return $this->telfraCli;
    }

    public function setTelfraCli(?string $telfraCli): self
    {
        $this->telfraCli = $telfraCli;

        return $this;
    }

    public function getFaxfraCli(): ?string
    {
        return $this->faxfraCli;
    }

    public function setFaxfraCli(?string $faxfraCli): self
    {
        $this->faxfraCli = $faxfraCli;

        return $this;
    }

    public function getMobfraCli(): ?string
    {
        return $this->mobfraCli;
    }

    public function setMobfraCli(?string $mobfraCli): self
    {
        $this->mobfraCli = $mobfraCli;

        return $this;
    }

    public function getEmailCli(): ?string
    {
        return $this->emailCli;
    }

    public function setEmailCli(?string $emailCli): self
    {
        $this->emailCli = $emailCli;

        return $this;
    }

    public function getEmpentCli(): ?string
    {
        return $this->empentCli;
    }

    public function setEmpentCli(?string $empentCli): self
    {
        $this->empentCli = $empentCli;

        return $this;
    }


    public function getPersentCli(): ?string
    {
        return $this->persentCli;
    }

    public function setPersentCli(?string $persentCli): self
    {
        $this->persentCli = $persentCli;

        return $this;
    }

    public function getDirentCli(): ?string
    {
        return $this->direntCli;
    }

    public function setDirentCli(?string $direntCli): self
    {
        $this->direntCli = $direntCli;

        return $this;
    }

    public function getCodpentCli(): ?string
    {
        return $this->codpentCli;
    }

    public function setCodpentCli(?string $codpentCli): self
    {
        $this->codpentCli = $codpentCli;

        return $this;
    }

    public function getPobentCli(): ?string
    {
        return $this->pobentCli;
    }

    public function setPobentCli(?string $pobentCli): self
    {
        $this->pobentCli = $pobentCli;

        return $this;
    }


    public function getTelentCli(): ?string
    {
        return $this->telentCli;
    }

    public function setTelentCli(?string $telentCli): self
    {
        $this->telentCli = $telentCli;

        return $this;
    }

    public function getFaxentCli(): ?string
    {
        return $this->faxentCli;
    }

    public function setFaxentCli(?string $faxentCli): self
    {
        $this->faxentCli = $faxentCli;

        return $this;
    }

    public function getWebCli(): ?string
    {
        return $this->webCli;
    }

    public function setWebCli(?string $webCli): self
    {
        $this->webCli = $webCli;

        return $this;
    }

    public function getDiaPag(): ?string
    {
        return $this->diaPag;
    }

    public function setDiaPag(?string $diaPag): self
    {
        $this->diaPag = $diaPag;

        return $this;
    }

    public function getProblemaPag(): ?bool
    {
        return $this->problemaPag;
    }

    public function setProblemaPag(?bool $problemaPag): self
    {
        $this->problemaPag = $problemaPag;

        return $this;
    }

    public function getTitularccCli(): ?string
    {
        return $this->titularccCli;
    }

    public function setTitularccCli(?string $titularccCli): self
    {
        $this->titularccCli = $titularccCli;

        return $this;
    }

    public function getCcCli(): ?string
    {
        return $this->ccCli;
    }

    public function setCcCli(?string $ccCli): self
    {
        $this->ccCli = $ccCli;

        return $this;
    }

    public function getPersfinCli(): ?string
    {
        return $this->persfinCli;
    }

    public function setPersfinCli(?string $persfinCli): self
    {
        $this->persfinCli = $persfinCli;

        return $this;
    }

    public function getCarrecfinCli(): ?string
    {
        return $this->carrecfinCli;
    }

    public function setCarrecfinCli(?string $carrecfinCli): self
    {
        $this->carrecfinCli = $carrecfinCli;

        return $this;
    }

    public function getTelfinCli(): ?string
    {
        return $this->telfinCli;
    }

    public function setTelfinCli(?string $telfinCli): self
    {
        $this->telfinCli = $telfinCli;

        return $this;
    }

    public function getEmailfinCli(): ?string
    {
        return $this->emailfinCli;
    }

    public function setEmailfinCli(?string $emailfinCli): self
    {
        $this->emailfinCli = $emailfinCli;

        return $this;
    }

    public function getTipusIva(): ?float
    {
        return $this->tipusIva;
    }

    public function setTipusIva(?float $tipusIva): self
    {
        $this->tipusIva = $tipusIva;

        return $this;
    }

    public function getTipusReq(): ?float
    {
        return $this->tipusReq;
    }

    public function setTipusReq(?float $tipusReq): self
    {
        $this->tipusReq = $tipusReq;

        return $this;
    }

    public function getObservacionsCli(): ?string
    {
        return $this->observacionsCli;
    }

    public function setObservacionsCli(?string $observacionsCli): self
    {
        $this->observacionsCli = $observacionsCli;

        return $this;
    }

    public function getObservacionsfinCli(): ?string
    {
        return $this->observacionsfinCli;
    }

    public function setObservacionsfinCli(?string $observacionsfinCli): self
    {
        $this->observacionsfinCli = $observacionsfinCli;

        return $this;
    }

    public function getMotiuContacte(): ?string
    {
        return $this->motiuContacte;
    }

    public function setMotiuContacte(?string $motiuContacte): self
    {
        $this->motiuContacte = $motiuContacte;

        return $this;
    }

    public function getMailing(): ?bool
    {
        return $this->mailing;
    }

    public function setMailing(?bool $mailing): self
    {
        $this->mailing = $mailing;

        return $this;
    }

    public function getCat(): ?bool
    {
        return $this->cat;
    }

    public function setCat(?bool $cat): self
    {
        $this->cat = $cat;

        return $this;
    }

    public function getClientCycred(): ?string
    {
        return $this->clientCycred;
    }

    public function setClientCycred(?string $clientCycred): self
    {
        $this->clientCycred = $clientCycred;

        return $this;
    }

    public function getClassificatCycred(): ?\DateTimeInterface
    {
        return $this->classificatCycred;
    }

    public function setClassificatCycred(?\DateTimeInterface $classificatCycred): self
    {
        $this->classificatCycred = $classificatCycred;

        return $this;
    }

    public function getCreditCycred(): ?int
    {
        return $this->creditCycred;
    }

    public function setCreditCycred(?int $creditCycred): self
    {
        $this->creditCycred = $creditCycred;

        return $this;
    }

    public function getStatusCycred(): ?string
    {
        return $this->statusCycred;
    }

    public function setStatusCycred(?string $statusCycred): self
    {
        $this->statusCycred = $statusCycred;

        return $this;
    }

    public function getLimitCycred(): ?string
    {
        return $this->limitCycred;
    }

    public function setLimitCycred(?string $limitCycred): self
    {
        $this->limitCycred = $limitCycred;

        return $this;
    }

    public function getBaixaCycred(): ?\DateTimeInterface
    {
        return $this->baixaCycred;
    }

    public function setBaixaCycred(?\DateTimeInterface $baixaCycred): self
    {
        $this->baixaCycred = $baixaCycred;

        return $this;
    }

    public function getNumAgentComercial(): ?int
    {
        return $this->numAgentComercial;
    }

    public function setNumAgentComercial(?int $numAgentComercial): self
    {
        $this->numAgentComercial = $numAgentComercial;

        return $this;
    }

    public function getNumUltimPresup(): ?string
    {
        return $this->numUltimPresup;
    }

    public function setNumUltimPresup(?string $numUltimPresup): self
    {
        $this->numUltimPresup = $numUltimPresup;

        return $this;
    }

    public function getDataUltimPresup(): ?\DateTimeInterface
    {
        return $this->dataUltimPresup;
    }

    public function setDataUltimPresup(?\DateTimeInterface $dataUltimPresup): self
    {
        $this->dataUltimPresup = $dataUltimPresup;

        return $this;
    }

    public function getNumUltimFraproforma(): ?string
    {
        return $this->numUltimFraproforma;
    }

    public function setNumUltimFraproforma(?string $numUltimFraproforma): self
    {
        $this->numUltimFraproforma = $numUltimFraproforma;

        return $this;
    }

    public function getDataUltimFraproforma(): ?\DateTimeInterface
    {
        return $this->dataUltimFraproforma;
    }

    public function setDataUltimFraproforma(?\DateTimeInterface $dataUltimFraproforma): self
    {
        $this->dataUltimFraproforma = $dataUltimFraproforma;

        return $this;
    }

    public function getNumUltimFactura(): ?string
    {
        return $this->numUltimFactura;
    }

    public function setNumUltimFactura(?string $numUltimFactura): self
    {
        $this->numUltimFactura = $numUltimFactura;

        return $this;
    }

    public function getDataUltimFactura(): ?\DateTimeInterface
    {
        return $this->dataUltimFactura;
    }

    public function setDataUltimFactura(?\DateTimeInterface $dataUltimFactura): self
    {
        $this->dataUltimFactura = $dataUltimFactura;

        return $this;
    }

    public function getOkbancDomiciliacio(): ?bool
    {
        return $this->okbancDomiciliacio;
    }

    public function setOkbancDomiciliacio(?bool $okbancDomiciliacio): self
    {
        $this->okbancDomiciliacio = $okbancDomiciliacio;

        return $this;
    }

    public function getMailingNadal(): ?bool
    {
        return $this->mailingNadal;
    }

    public function setMailingNadal(?bool $mailingNadal): self
    {
        $this->mailingNadal = $mailingNadal;

        return $this;
    }

    public function getEspecial(): ?bool
    {
        return $this->especial;
    }

    public function setEspecial(?bool $especial): self
    {
        $this->especial = $especial;

        return $this;
    }

    public function getDataAlta(): ?\DateTimeInterface
    {
        return $this->dataAlta;
    }

    public function setDataAlta(?\DateTimeInterface $dataAlta): self
    {
        $this->dataAlta = $dataAlta;

        return $this;
    }

    public function getHoraAlta(): ?\DateTimeInterface
    {
        return $this->horaAlta;
    }

    public function setHoraAlta(?\DateTimeInterface $horaAlta): self
    {
        $this->horaAlta = $horaAlta;

        return $this;
    }

    public function getBaixa(): ?bool
    {
        return $this->baixa;
    }

    public function setBaixa(?bool $baixa): self
    {
        $this->baixa = $baixa;

        return $this;
    }

    public function getExpressAfegit(): ?bool
    {
        return $this->expressAfegit;
    }

    public function setExpressAfegit(?bool $expressAfegit): self
    {
        $this->expressAfegit = $expressAfegit;

        return $this;
    }

    public function getExpressMai(): ?bool
    {
        return $this->expressMai;
    }

    public function setExpressMai(?bool $expressMai): self
    {
        $this->expressMai = $expressMai;

        return $this;
    }

    public function getMajorista(): ?bool
    {
        return $this->majorista;
    }

    public function setMajorista(?bool $majorista): self
    {
        $this->majorista = $majorista;

        return $this;
    }

    public function getRoyalty(): ?bool
    {
        return $this->royalty;
    }

    public function setRoyalty(?bool $royalty): self
    {
        $this->royalty = $royalty;

        return $this;
    }

    public function getActivitat1(): ?int
    {
        return $this->activitat1;
    }

    public function setActivitat1(?int $activitat1): self
    {
        $this->activitat1 = $activitat1;

        return $this;
    }

    public function getActivitat2(): ?string
    {
        return $this->activitat2;
    }

    public function setActivitat2(?string $activitat2): self
    {
        $this->activitat2 = $activitat2;

        return $this;
    }

    /**
     * @return Collection|TFraproforma[]
     */
    public function getTFraproformas(): Collection
    {
        return $this->tFraproformas;
    }

    public function addTFraproforma(TFraproforma $tFraproforma): self
    {
        if (!$this->tFraproformas->contains($tFraproforma)) {
            $this->tFraproformas[] = $tFraproforma;
            $tFraproforma->setClientFraprof($this);
        }

        return $this;
    }

    public function removeTFraproforma(TFraproforma $tFraproforma): self
    {
        if ($this->tFraproformas->contains($tFraproforma)) {
            $this->tFraproformas->removeElement($tFraproforma);
            // set the owning side to null (unless already changed)
            if ($tFraproforma->getClientFraprof() === $this) {
                $tFraproforma->setClientFraprof(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TAlbara[]
     */
    public function getTAlbara(): Collection
    {
        return $this->TAlbara;
    }

    public function addTAlbara(TAlbara $tAlbara): self
    {
        if (!$this->TAlbara->contains($tAlbara)) {
            $this->TAlbara[] = $tAlbara;
            $tAlbara->setClientAlbara($this);
        }

        return $this;
    }

    public function removeTAlbara(TAlbara $tAlbara): self
    {
        if ($this->TAlbara->contains($tAlbara)) {
            $this->TAlbara->removeElement($tAlbara);
            // set the owning side to null (unless already changed)
            if ($tAlbara->getClientAlbara() === $this) {
                $tAlbara->setClientAlbara(null);
            }
        }

        return $this;
    }

    public function getPaisfraCli(): ?TPaisos
    {
        return $this->paisfraCli;
    }

    public function setPaisfraCli(?TPaisos $paisfraCli): self
    {
        $this->paisfraCli = $paisfraCli;

        return $this;
    }

    public function getTractentCli(): ?TTractaments
    {
        return $this->tractentCli;
    }

    public function setTractentCli(?TTractaments $tractentCli): self
    {
        $this->tractentCli = $tractentCli;

        return $this;
    }

    public function getPaisentCli(): ?TPaisos
    {
        return $this->paisentCli;
    }

    public function setPaisentCli(?TPaisos $paisentCli): self
    {
        $this->paisentCli = $paisentCli;

        return $this;
    }

    public function getMetPag(): ?TMetodePag
    {
        return $this->metPag;
    }

    public function setMetPag(?TMetodePag $metPag): self
    {
        $this->metPag = $metPag;

        return $this;
    }

    public function getInstPag(): ?TInstrumentPag
    {
        return $this->instPag;
    }

    public function setInstPag(?TInstrumentPag $instPag): self
    {
        $this->instPag = $instPag;

        return $this;
    }

    /**
     * @return Collection|TClientsMails[]
     */
    public function getTClientsMails(): Collection
    {
        return $this->tClientsMails;
    }

    public function addTClientsMail(TClientsMails $tClientsMail): self
    {
        if (!$this->tClientsMails->contains($tClientsMail)) {
            $this->tClientsMails[] = $tClientsMail;
            $tClientsMail->setNumClientMail($this);
        }

        return $this;
    }

    public function removeTClientsMail(TClientsMails $tClientsMail): self
    {
        if ($this->tClientsMails->contains($tClientsMail)) {
            $this->tClientsMails->removeElement($tClientsMail);
            // set the owning side to null (unless already changed)
            if ($tClientsMail->getNumClientMail() === $this) {
                $tClientsMail->setNumClientMail(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TFactura[]
     */
    public function getTFacturas(): Collection
    {
        return $this->tFacturas;
    }

    public function addTFactura(TFactura $tFactura): self
    {
        if (!$this->tFacturas->contains($tFactura)) {
            $this->tFacturas[] = $tFactura;
            $tFactura->setClientFactura($this);
        }

        return $this;
    }

    public function removeTFactura(TFactura $tFactura): self
    {
        if ($this->tFacturas->contains($tFactura)) {
            $this->tFacturas->removeElement($tFactura);
            // set the owning side to null (unless already changed)
            if ($tFactura->getClientFactura() === $this) {
                $tFactura->setClientFactura(null);
            }
        }

        return $this;
    }


}
