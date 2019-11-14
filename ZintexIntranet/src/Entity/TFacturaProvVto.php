<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TFacturaProvVto
 *
 * @ORM\Table(name="t_factura_prov_vto")
 * @ORM\Entity(repositoryClass="App\Repository\TFacturaProvVtoRepository")
 */
class TFacturaProvVto
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Factura_Prov_Vto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFacturaProvVto;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_FraProv_Vto", type="datetime", nullable=true)
     */
    private $dataFraprovVto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Concepte_FraProv_Vto", type="string", length=200, nullable=true)
     */
    private $concepteFraprovVto;


    /**
     * @var string|null
     *
     * @ORM\Column(name="InstPag_Aux_FraProv_Vto", type="string", length=255, nullable=true)
     */
    private $instpagAuxFraprovVto;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Import_FraProv_Vto", type="float", precision=10, scale=0, nullable=true)
     */
    private $importFraprovVto;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DataPag_FraProv_Vto", type="datetime", nullable=true)
     */
    private $datapagFraprovVto;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="OKBanc_FraProv_Vto", type="datetime", nullable=true)
     */
    private $okbancFraprovVto;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TFacturaProv", inversedBy="tFacturaProvVtos")
     * @ORM\JoinColumn(referencedColumnName="Id_Factura_Prov", name="Num_FraProv_Vto")
     */
    private $numFraprovVto;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TInstrumentPagProv")
     * @ORM\JoinColumn(referencedColumnName="Id_Inst_Pag", name="InstPag_FraProv_Vto")
     */
    private $instpagFraprovVto;

    public function getIdFacturaProvVto(): ?int
    {
        return $this->idFacturaProvVto;
    }


    public function getDataFraprovVto(): ?\DateTimeInterface
    {
        return $this->dataFraprovVto;
    }

    public function setDataFraprovVto(?\DateTimeInterface $dataFraprovVto): self
    {
        $this->dataFraprovVto = $dataFraprovVto;

        return $this;
    }

    public function getConcepteFraprovVto(): ?string
    {
        return $this->concepteFraprovVto;
    }

    public function setConcepteFraprovVto(?string $concepteFraprovVto): self
    {
        $this->concepteFraprovVto = $concepteFraprovVto;

        return $this;
    }



    public function getInstpagAuxFraprovVto(): ?string
    {
        return $this->instpagAuxFraprovVto;
    }

    public function setInstpagAuxFraprovVto(?string $instpagAuxFraprovVto): self
    {
        $this->instpagAuxFraprovVto = $instpagAuxFraprovVto;

        return $this;
    }

    public function getImportFraprovVto(): ?float
    {
        return $this->importFraprovVto;
    }

    public function setImportFraprovVto(?float $importFraprovVto): self
    {
        $this->importFraprovVto = $importFraprovVto;

        return $this;
    }

    public function getDatapagFraprovVto(): ?\DateTimeInterface
    {
        return $this->datapagFraprovVto;
    }

    public function setDatapagFraprovVto(?\DateTimeInterface $datapagFraprovVto): self
    {
        $this->datapagFraprovVto = $datapagFraprovVto;

        return $this;
    }

    public function getOkbancFraprovVto(): ?\DateTimeInterface
    {
        return $this->okbancFraprovVto;
    }

    public function setOkbancFraprovVto(?\DateTimeInterface $okbancFraprovVto): self
    {
        $this->okbancFraprovVto = $okbancFraprovVto;

        return $this;
    }

    public function getNumFraprovVto(): ?TFacturaProv
    {
        return $this->numFraprovVto;
    }

    public function setNumFraprovVto(?TFacturaProv $numFraprovVto): self
    {
        $this->numFraprovVto = $numFraprovVto;

        return $this;
    }

    public function getInstpagFraprovVto(): ?TInstrumentPagProv
    {
        return $this->instpagFraprovVto;
    }

    public function setInstpagFraprovVto(?TInstrumentPagProv $instpagFraprovVto): self
    {
        $this->instpagFraprovVto = $instpagFraprovVto;

        return $this;
    }


}
