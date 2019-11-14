<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * TFacturaProv
 *
 * @ORM\Table(name="t_factura_prov")
 * @ORM\Entity(repositoryClass="App\Repository\TFacturaProvRepository")
 */
class TFacturaProv
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Factura_Prov", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFacturaProv;


    /**
     * @var string|null
     *
     * @ORM\Column(name="Num_FraProv", type="string", length=50, nullable=true)
     */
    private $numFraprov;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_FraProv", type="datetime", nullable=true)
     */
    private $dataFraprov;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Vto_FraProv", type="datetime", nullable=true)
     */
    private $dataVtoFraprov;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Entrada_Prov", type="datetime", nullable=true)
     */
    private $dataEntradaProv;

    /**
     * @var float|null
     *
     * @ORM\Column(name="BImp_FraProv", type="float", precision=10, scale=0, nullable=true)
     */
    private $bimpFraprov;

    /**
     * @var float|null
     *
     * @ORM\Column(name="IVA_FraProv", type="float", precision=10, scale=0, nullable=true)
     */
    private $ivaFraprov;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Total_FraProv", type="float", precision=10, scale=0, nullable=true)
     */
    private $totalFraprov;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="IVA_Inclos", type="boolean", nullable=true)
     */
    private $ivaInclos;

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
     * @var float|null
     *
     * @ORM\Column(name="RE_DTO", type="float", precision=10, scale=0, nullable=true)
     */
    private $reDto;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Exent_IVA", type="float", precision=10, scale=0, nullable=true)
     */
    private $exentIva;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Tproveidors", inversedBy="tFacturaProvs")
     * @ORM\JoinColumn(nullable=false, referencedColumnName="Id_Prov", name="Proveidor")
     */
    private $proveidor;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TFacturaProvVto", mappedBy="numFraprovVto")
     */
    private $tFacturaProvVtos;

    public function __construct()
    {
        $this->tFacturaProvVtos = new ArrayCollection();
    }

    public function getIdFacturaProv(): ?int
    {
        return $this->idFacturaProv;
    }

    public function getNumFraprov(): ?string
    {
        return $this->numFraprov;
    }

    public function setNumFraprov(?string $numFraprov): self
    {
        $this->numFraprov = $numFraprov;

        return $this;
    }

    public function getDataFraprov(): ?\DateTimeInterface
    {
        return $this->dataFraprov;
    }

    public function setDataFraprov(?\DateTimeInterface $dataFraprov): self
    {
        $this->dataFraprov = $dataFraprov;

        return $this;
    }

    public function getDataVtoFraprov(): ?\DateTimeInterface
    {
        return $this->dataVtoFraprov;
    }

    public function setDataVtoFraprov(?\DateTimeInterface $dataVtoFraprov): self
    {
        $this->dataVtoFraprov = $dataVtoFraprov;

        return $this;
    }

    public function getDataEntradaProv(): ?\DateTimeInterface
    {
        return $this->dataEntradaProv;
    }

    public function setDataEntradaProv(?\DateTimeInterface $dataEntradaProv): self
    {
        $this->dataEntradaProv = $dataEntradaProv;

        return $this;
    }

    public function getBimpFraprov(): ?float
    {
        return $this->bimpFraprov;
    }

    public function setBimpFraprov(?float $bimpFraprov): self
    {
        $this->bimpFraprov = $bimpFraprov;

        return $this;
    }

    public function getIvaFraprov(): ?float
    {
        return $this->ivaFraprov;
    }

    public function setIvaFraprov(?float $ivaFraprov): self
    {
        $this->ivaFraprov = $ivaFraprov;

        return $this;
    }

    public function getTotalFraprov(): ?float
    {
        return $this->totalFraprov;
    }

    public function setTotalFraprov(?float $totalFraprov): self
    {
        $this->totalFraprov = $totalFraprov;

        return $this;
    }

    public function getIvaInclos(): ?bool
    {
        return $this->ivaInclos;
    }

    public function setIvaInclos(?bool $ivaInclos): self
    {
        $this->ivaInclos = $ivaInclos;

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

    public function getReDto(): ?float
    {
        return $this->reDto;
    }

    public function setReDto(?float $reDto): self
    {
        $this->reDto = $reDto;

        return $this;
    }

    public function getExentIva(): ?float
    {
        return $this->exentIva;
    }

    public function setExentIva(?float $exentIva): self
    {
        $this->exentIva = $exentIva;

        return $this;
    }

    public function getProveidor(): ?Tproveidors
    {
        return $this->proveidor;
    }

    public function setProveidor(?Tproveidors $proveidor): self
    {
        $this->proveidor = $proveidor;

        return $this;
    }

    /**
     * @return Collection|TFacturaProvVto[]
     */
    public function getTFacturaProvVtos(): Collection
    {
        return $this->tFacturaProvVtos;
    }

    public function addTFacturaProvVto(TFacturaProvVto $tFacturaProvVto): self
    {
        if (!$this->tFacturaProvVtos->contains($tFacturaProvVto)) {
            $this->tFacturaProvVtos[] = $tFacturaProvVto;
            $tFacturaProvVto->setNumFraprovVto($this);
        }

        return $this;
    }

    public function removeTFacturaProvVto(TFacturaProvVto $tFacturaProvVto): self
    {
        if ($this->tFacturaProvVtos->contains($tFacturaProvVto)) {
            $this->tFacturaProvVtos->removeElement($tFacturaProvVto);
            // set the owning side to null (unless already changed)
            if ($tFacturaProvVto->getNumFraprovVto() === $this) {
                $tFacturaProvVto->setNumFraprovVto(null);
            }
        }

        return $this;
    }


}
