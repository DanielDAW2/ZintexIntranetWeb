<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TFacturaVtoAux
 *
 * @ORM\Table(name="t_factura_vto_aux")
 * @ORM\Entity
 */
class TFacturaVtoAux
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Factura_Vto_Aux", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFacturaVtoAux;




    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Factura", type="datetime", nullable=true)
     */
    private $dataFactura;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Num_Factura", type="string", length=50, nullable=true)
     */
    private $numFactura;

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Vto_1", type="datetime", nullable=true)
     */
    private $dataVto1;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DataPag_Vto_1", type="datetime", nullable=true)
     */
    private $datapagVto1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Inst_Pag_Vto_1", type="integer", nullable=true)
     */
    private $instPagVto1;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Import_Vto_1", type="float", precision=10, scale=0, nullable=true)
     */
    private $importVto1;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Import_Pag_Vto_1", type="float", precision=10, scale=0, nullable=true)
     */
    private $importPagVto1;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="OKBanc_Vto_1", type="datetime", nullable=true)
     */
    private $okbancVto1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Id_Factura_Vto_2", type="integer", nullable=true)
     */
    private $idFacturaVto2;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Vto_2", type="datetime", nullable=true)
     */
    private $dataVto2;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DataPag_Vto_2", type="datetime", nullable=true)
     */
    private $datapagVto2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Inst_Pag_Vto_2", type="integer", nullable=true)
     */
    private $instPagVto2;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Import_Vto_2", type="float", precision=10, scale=0, nullable=true)
     */
    private $importVto2;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Import_Pag_Vto_2", type="float", precision=10, scale=0, nullable=true)
     */
    private $importPagVto2;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="OKBanc_Vto_2", type="datetime", nullable=true)
     */
    private $okbancVto2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Id_Factura_Vto_3", type="integer", nullable=true)
     */
    private $idFacturaVto3;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Vto_3", type="datetime", nullable=true)
     */
    private $dataVto3;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DataPag_Vto_3", type="datetime", nullable=true)
     */
    private $datapagVto3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Inst_Pag_Vto_3", type="integer", nullable=true)
     */
    private $instPagVto3;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Import_Vto_3", type="float", precision=10, scale=0, nullable=true)
     */
    private $importVto3;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Import_Pag_Vto_3", type="float", precision=10, scale=0, nullable=true)
     */
    private $importPagVto3;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="OKBanc_Vto_3", type="datetime", nullable=true)
     */
    private $okbancVto3;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TFactura", inversedBy="tFacturaVtoAuxes")
     * @ORM\JoinColumn(referencedColumnName="Id_Factura", name="Id_Factura")
     */
    private $idFactura;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TClients")
     * @ORM\JoinColumn(referencedColumnName="Id_Cli", name="Client_Factura")
     */
    private $clientFactura;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TFacturaVTo")
     * @ORM\JoinColumn(referencedColumnName="Id_Factura_Vto", name="Id_Factura_Vto_1")
     */
    private $idFacturaVto1;


    public function getIdFacturaVtoAux(): ?int
    {
        return $this->idFacturaVtoAux;
    }

    public function getDataFactura(): ?\DateTimeInterface
    {
        return $this->dataFactura;
    }

    public function setDataFactura(?\DateTimeInterface $dataFactura): self
    {
        $this->dataFactura = $dataFactura;

        return $this;
    }

    public function getNumFactura(): ?string
    {
        return $this->numFactura;
    }

    public function setNumFactura(?string $numFactura): self
    {
        $this->numFactura = $numFactura;

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


    public function getDataVto1(): ?\DateTimeInterface
    {
        return $this->dataVto1;
    }

    public function setDataVto1(?\DateTimeInterface $dataVto1): self
    {
        $this->dataVto1 = $dataVto1;

        return $this;
    }

    public function getDatapagVto1(): ?\DateTimeInterface
    {
        return $this->datapagVto1;
    }

    public function setDatapagVto1(?\DateTimeInterface $datapagVto1): self
    {
        $this->datapagVto1 = $datapagVto1;

        return $this;
    }

    public function getInstPagVto1(): ?int
    {
        return $this->instPagVto1;
    }

    public function setInstPagVto1(?int $instPagVto1): self
    {
        $this->instPagVto1 = $instPagVto1;

        return $this;
    }

    public function getImportVto1(): ?float
    {
        return $this->importVto1;
    }

    public function setImportVto1(?float $importVto1): self
    {
        $this->importVto1 = $importVto1;

        return $this;
    }

    public function getImportPagVto1(): ?float
    {
        return $this->importPagVto1;
    }

    public function setImportPagVto1(?float $importPagVto1): self
    {
        $this->importPagVto1 = $importPagVto1;

        return $this;
    }

    public function getOkbancVto1(): ?\DateTimeInterface
    {
        return $this->okbancVto1;
    }

    public function setOkbancVto1(?\DateTimeInterface $okbancVto1): self
    {
        $this->okbancVto1 = $okbancVto1;

        return $this;
    }

    public function getIdFacturaVto2(): ?int
    {
        return $this->idFacturaVto2;
    }

    public function setIdFacturaVto2(?int $idFacturaVto2): self
    {
        $this->idFacturaVto2 = $idFacturaVto2;

        return $this;
    }

    public function getDataVto2(): ?\DateTimeInterface
    {
        return $this->dataVto2;
    }

    public function setDataVto2(?\DateTimeInterface $dataVto2): self
    {
        $this->dataVto2 = $dataVto2;

        return $this;
    }

    public function getDatapagVto2(): ?\DateTimeInterface
    {
        return $this->datapagVto2;
    }

    public function setDatapagVto2(?\DateTimeInterface $datapagVto2): self
    {
        $this->datapagVto2 = $datapagVto2;

        return $this;
    }

    public function getInstPagVto2(): ?int
    {
        return $this->instPagVto2;
    }

    public function setInstPagVto2(?int $instPagVto2): self
    {
        $this->instPagVto2 = $instPagVto2;

        return $this;
    }

    public function getImportVto2(): ?float
    {
        return $this->importVto2;
    }

    public function setImportVto2(?float $importVto2): self
    {
        $this->importVto2 = $importVto2;

        return $this;
    }

    public function getImportPagVto2(): ?float
    {
        return $this->importPagVto2;
    }

    public function setImportPagVto2(?float $importPagVto2): self
    {
        $this->importPagVto2 = $importPagVto2;

        return $this;
    }

    public function getOkbancVto2(): ?\DateTimeInterface
    {
        return $this->okbancVto2;
    }

    public function setOkbancVto2(?\DateTimeInterface $okbancVto2): self
    {
        $this->okbancVto2 = $okbancVto2;

        return $this;
    }

    public function getIdFacturaVto3(): ?int
    {
        return $this->idFacturaVto3;
    }

    public function setIdFacturaVto3(?int $idFacturaVto3): self
    {
        $this->idFacturaVto3 = $idFacturaVto3;

        return $this;
    }

    public function getDataVto3(): ?\DateTimeInterface
    {
        return $this->dataVto3;
    }

    public function setDataVto3(?\DateTimeInterface $dataVto3): self
    {
        $this->dataVto3 = $dataVto3;

        return $this;
    }

    public function getDatapagVto3(): ?\DateTimeInterface
    {
        return $this->datapagVto3;
    }

    public function setDatapagVto3(?\DateTimeInterface $datapagVto3): self
    {
        $this->datapagVto3 = $datapagVto3;

        return $this;
    }

    public function getInstPagVto3(): ?int
    {
        return $this->instPagVto3;
    }

    public function setInstPagVto3(?int $instPagVto3): self
    {
        $this->instPagVto3 = $instPagVto3;

        return $this;
    }

    public function getImportVto3(): ?float
    {
        return $this->importVto3;
    }

    public function setImportVto3(?float $importVto3): self
    {
        $this->importVto3 = $importVto3;

        return $this;
    }

    public function getImportPagVto3(): ?float
    {
        return $this->importPagVto3;
    }

    public function setImportPagVto3(?float $importPagVto3): self
    {
        $this->importPagVto3 = $importPagVto3;

        return $this;
    }

    public function getOkbancVto3(): ?\DateTimeInterface
    {
        return $this->okbancVto3;
    }

    public function setOkbancVto3(?\DateTimeInterface $okbancVto3): self
    {
        $this->okbancVto3 = $okbancVto3;

        return $this;
    }

    public function getIdFactura(): ?Tfactura
    {
        return $this->idFactura;
    }

    public function setIdFactura(?Tfactura $idFactura): self
    {
        $this->idFactura = $idFactura;

        return $this;
    }

    public function getClientFactura(): ?Tclients
    {
        return $this->clientFactura;
    }

    public function setClientFactura(?Tclients $clientFactura): self
    {
        $this->clientFactura = $clientFactura;

        return $this;
    }

    public function getIdFacturaVto1(): ?TFacturaVTo
    {
        return $this->idFacturaVto1;
    }

    public function setIdFacturaVto1(?TFacturaVTo $idFacturaVto1): self
    {
        $this->idFacturaVto1 = $idFacturaVto1;

        return $this;
    }


}
