<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TFraproforma
 *
 * @ORM\Table(name="t_fraproforma")
 * @ORM\Entity
 */
class TFraproforma
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_FraProf", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFraprof;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Client_FraProf", type="integer", nullable=true)
     */
    private $clientFraprof;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Persona_FraProf", type="string", length=50, nullable=true)
     */
    private $personaFraprof;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_FraProf", type="datetime", nullable=true)
     */
    private $dataFraprof;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Num_FraProf", type="string", length=255, nullable=true)
     */
    private $numFraprof;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ref_Presup", type="string", length=255, nullable=true)
     */
    private $refPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ref_Albara", type="string", length=255, nullable=true)
     */
    private $refAlbara;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ref_Factura", type="string", length=255, nullable=true)
     */
    private $refFactura;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NRef", type="string", length=255, nullable=true)
     */
    private $nref;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SRef", type="string", length=255, nullable=true)
     */
    private $sref;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Valorada", type="boolean", nullable=true)
     */
    private $valorada = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Base_Imp", type="float", precision=10, scale=0, nullable=true)
     */
    private $baseImp;

    /**
     * @var float|null
     *
     * @ORM\Column(name="IVA", type="float", precision=10, scale=0, nullable=true)
     */
    private $iva;

    /**
     * @var float|null
     *
     * @ORM\Column(name="REQ", type="float", precision=10, scale=0, nullable=true)
     */
    private $req;

    /**
     * @var float|null
     *
     * @ORM\Column(name="IVA_VAR", type="float", precision=10, scale=0, nullable=true)
     */
    private $ivaVar;

    /**
     * @var float|null
     *
     * @ORM\Column(name="REQ_VAR", type="float", precision=10, scale=0, nullable=true)
     */
    private $reqVar;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Total_Fra", type="float", precision=10, scale=0, nullable=true)
     */
    private $totalFra;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Import_Pendent", type="float", precision=10, scale=0, nullable=true)
     */
    private $importPendent;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Import_Pagat", type="float", precision=10, scale=0, nullable=true)
     */
    private $importPagat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Metode_Pag", type="integer", nullable=true)
     */
    private $metodePag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MetPag_Aux", type="string", length=1000, nullable=true)
     */
    private $metpagAux;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Observ_FraProf", type="string", length=1200, nullable=true)
     */
    private $observFraprof;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Seguiment", type="string", length=1000, nullable=true)
     */
    private $seguiment;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Autor", type="integer", nullable=true)
     */
    private $numAutor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Autor_Proforma", type="integer", nullable=true)
     */
    private $numAutorProforma;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Gravacio", type="datetime", nullable=true)
     */
    private $dataGravacio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hora_Gravacio", type="datetime", nullable=true)
     */
    private $horaGravacio;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Acceptada", type="boolean", nullable=true)
     */
    private $acceptada;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Acceptacio", type="datetime", nullable=true)
     */
    private $dataAcceptacio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hora_Acceptacio", type="datetime", nullable=true)
     */
    private $horaAcceptacio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Ultim_Pagament", type="datetime", nullable=true)
     */
    private $ultimPagament;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Facturar", type="boolean", nullable=true)
     */
    private $facturar = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Produccio", type="datetime", nullable=true)
     */
    private $dataProduccio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hora_Produccio", type="datetime", nullable=true)
     */
    private $horaProduccio;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Produccio", type="boolean", nullable=true)
     */
    private $produccio = '0';

    public function getIdFraprof(): ?int
    {
        return $this->idFraprof;
    }

    public function getClientFraprof(): ?int
    {
        return $this->clientFraprof;
    }

    public function setClientFraprof(?int $clientFraprof): self
    {
        $this->clientFraprof = $clientFraprof;

        return $this;
    }

    public function getPersonaFraprof(): ?string
    {
        return $this->personaFraprof;
    }

    public function setPersonaFraprof(?string $personaFraprof): self
    {
        $this->personaFraprof = $personaFraprof;

        return $this;
    }

    public function getDataFraprof(): ?\DateTimeInterface
    {
        return $this->dataFraprof;
    }

    public function setDataFraprof(?\DateTimeInterface $dataFraprof): self
    {
        $this->dataFraprof = $dataFraprof;

        return $this;
    }

    public function getNumFraprof(): ?string
    {
        return $this->numFraprof;
    }

    public function setNumFraprof(?string $numFraprof): self
    {
        $this->numFraprof = $numFraprof;

        return $this;
    }

    public function getRefPresup(): ?string
    {
        return $this->refPresup;
    }

    public function setRefPresup(?string $refPresup): self
    {
        $this->refPresup = $refPresup;

        return $this;
    }

    public function getRefAlbara(): ?string
    {
        return $this->refAlbara;
    }

    public function setRefAlbara(?string $refAlbara): self
    {
        $this->refAlbara = $refAlbara;

        return $this;
    }

    public function getRefFactura(): ?string
    {
        return $this->refFactura;
    }

    public function setRefFactura(?string $refFactura): self
    {
        $this->refFactura = $refFactura;

        return $this;
    }

    public function getNref(): ?string
    {
        return $this->nref;
    }

    public function setNref(?string $nref): self
    {
        $this->nref = $nref;

        return $this;
    }

    public function getSref(): ?string
    {
        return $this->sref;
    }

    public function setSref(?string $sref): self
    {
        $this->sref = $sref;

        return $this;
    }

    public function getValorada(): ?bool
    {
        return $this->valorada;
    }

    public function setValorada(?bool $valorada): self
    {
        $this->valorada = $valorada;

        return $this;
    }

    public function getBaseImp(): ?float
    {
        return $this->baseImp;
    }

    public function setBaseImp(?float $baseImp): self
    {
        $this->baseImp = $baseImp;

        return $this;
    }

    public function getIva(): ?float
    {
        return $this->iva;
    }

    public function setIva(?float $iva): self
    {
        $this->iva = $iva;

        return $this;
    }

    public function getReq(): ?float
    {
        return $this->req;
    }

    public function setReq(?float $req): self
    {
        $this->req = $req;

        return $this;
    }

    public function getIvaVar(): ?float
    {
        return $this->ivaVar;
    }

    public function setIvaVar(?float $ivaVar): self
    {
        $this->ivaVar = $ivaVar;

        return $this;
    }

    public function getReqVar(): ?float
    {
        return $this->reqVar;
    }

    public function setReqVar(?float $reqVar): self
    {
        $this->reqVar = $reqVar;

        return $this;
    }

    public function getTotalFra(): ?float
    {
        return $this->totalFra;
    }

    public function setTotalFra(?float $totalFra): self
    {
        $this->totalFra = $totalFra;

        return $this;
    }

    public function getImportPendent(): ?float
    {
        return $this->importPendent;
    }

    public function setImportPendent(?float $importPendent): self
    {
        $this->importPendent = $importPendent;

        return $this;
    }

    public function getImportPagat(): ?float
    {
        return $this->importPagat;
    }

    public function setImportPagat(?float $importPagat): self
    {
        $this->importPagat = $importPagat;

        return $this;
    }

    public function getMetodePag(): ?int
    {
        return $this->metodePag;
    }

    public function setMetodePag(?int $metodePag): self
    {
        $this->metodePag = $metodePag;

        return $this;
    }

    public function getMetpagAux(): ?string
    {
        return $this->metpagAux;
    }

    public function setMetpagAux(?string $metpagAux): self
    {
        $this->metpagAux = $metpagAux;

        return $this;
    }

    public function getObservFraprof(): ?string
    {
        return $this->observFraprof;
    }

    public function setObservFraprof(?string $observFraprof): self
    {
        $this->observFraprof = $observFraprof;

        return $this;
    }

    public function getSeguiment(): ?string
    {
        return $this->seguiment;
    }

    public function setSeguiment(?string $seguiment): self
    {
        $this->seguiment = $seguiment;

        return $this;
    }

    public function getNumAutor(): ?int
    {
        return $this->numAutor;
    }

    public function setNumAutor(?int $numAutor): self
    {
        $this->numAutor = $numAutor;

        return $this;
    }

    public function getNumAutorProforma(): ?int
    {
        return $this->numAutorProforma;
    }

    public function setNumAutorProforma(?int $numAutorProforma): self
    {
        $this->numAutorProforma = $numAutorProforma;

        return $this;
    }

    public function getDataGravacio(): ?\DateTimeInterface
    {
        return $this->dataGravacio;
    }

    public function setDataGravacio(?\DateTimeInterface $dataGravacio): self
    {
        $this->dataGravacio = $dataGravacio;

        return $this;
    }

    public function getHoraGravacio(): ?\DateTimeInterface
    {
        return $this->horaGravacio;
    }

    public function setHoraGravacio(?\DateTimeInterface $horaGravacio): self
    {
        $this->horaGravacio = $horaGravacio;

        return $this;
    }

    public function getAcceptada(): ?bool
    {
        return $this->acceptada;
    }

    public function setAcceptada(?bool $acceptada): self
    {
        $this->acceptada = $acceptada;

        return $this;
    }

    public function getDataAcceptacio(): ?\DateTimeInterface
    {
        return $this->dataAcceptacio;
    }

    public function setDataAcceptacio(?\DateTimeInterface $dataAcceptacio): self
    {
        $this->dataAcceptacio = $dataAcceptacio;

        return $this;
    }

    public function getHoraAcceptacio(): ?\DateTimeInterface
    {
        return $this->horaAcceptacio;
    }

    public function setHoraAcceptacio(?\DateTimeInterface $horaAcceptacio): self
    {
        $this->horaAcceptacio = $horaAcceptacio;

        return $this;
    }

    public function getUltimPagament(): ?\DateTimeInterface
    {
        return $this->ultimPagament;
    }

    public function setUltimPagament(?\DateTimeInterface $ultimPagament): self
    {
        $this->ultimPagament = $ultimPagament;

        return $this;
    }

    public function getFacturar(): ?bool
    {
        return $this->facturar;
    }

    public function setFacturar(?bool $facturar): self
    {
        $this->facturar = $facturar;

        return $this;
    }

    public function getDataProduccio(): ?\DateTimeInterface
    {
        return $this->dataProduccio;
    }

    public function setDataProduccio(?\DateTimeInterface $dataProduccio): self
    {
        $this->dataProduccio = $dataProduccio;

        return $this;
    }

    public function getHoraProduccio(): ?\DateTimeInterface
    {
        return $this->horaProduccio;
    }

    public function setHoraProduccio(?\DateTimeInterface $horaProduccio): self
    {
        $this->horaProduccio = $horaProduccio;

        return $this;
    }

    public function getProduccio(): ?bool
    {
        return $this->produccio;
    }

    public function setProduccio(?bool $produccio): self
    {
        $this->produccio = $produccio;

        return $this;
    }


}
