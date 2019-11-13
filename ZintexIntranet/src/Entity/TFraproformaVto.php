<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TFraproformaVto
 *
 * @ORM\Table(name="t_fraproforma_vto")
 * @ORM\Entity
 */
class TFraproformaVto
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_FraProforma_Vto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFraproformaVto;


    /**
     * @var string|null
     *
     * @ORM\Column(name="Concepte_Vto", type="string", length=200, nullable=true)
     */
    private $concepteVto;



    /**
     * @var string|null
     *
     * @ORM\Column(name="InstPag_Aux", type="string", length=1000, nullable=true)
     */
    private $instpagAux;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Import_Vto", type="float", precision=10, scale=0, nullable=true)
     */
    private $importVto;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DataPag_Vto", type="datetime", nullable=true)
     */
    private $datapagVto;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ImportPag_Vto", type="float", precision=10, scale=0, nullable=true)
     */
    private $importpagVto;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="OKBanc_Vto", type="datetime", nullable=true)
     */
    private $okbancVto;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Tfraproforma", inversedBy="tFraproformaVtos")
     * @ORM\JoinColumn(referencedColumnName="Id_FraProf")
     */
    private $numProforma;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TInstrumentPag")
     * @ORM\JoinColumn(referencedColumnName="Id_Inst_Pag")
     */
    private $instpag;

    public function getIdFraproformaVto(): ?int
    {
        return $this->idFraproformaVto;
    }



    public function getConcepteVto(): ?string
    {
        return $this->concepteVto;
    }

    public function setConcepteVto(?string $concepteVto): self
    {
        $this->concepteVto = $concepteVto;

        return $this;
    }



    public function getInstpagAux(): ?string
    {
        return $this->instpagAux;
    }

    public function setInstpagAux(?string $instpagAux): self
    {
        $this->instpagAux = $instpagAux;

        return $this;
    }

    public function getImportVto(): ?float
    {
        return $this->importVto;
    }

    public function setImportVto(?float $importVto): self
    {
        $this->importVto = $importVto;

        return $this;
    }

    public function getDatapagVto(): ?\DateTimeInterface
    {
        return $this->datapagVto;
    }

    public function setDatapagVto(?\DateTimeInterface $datapagVto): self
    {
        $this->datapagVto = $datapagVto;

        return $this;
    }

    public function getImportpagVto(): ?float
    {
        return $this->importpagVto;
    }

    public function setImportpagVto(?float $importpagVto): self
    {
        $this->importpagVto = $importpagVto;

        return $this;
    }

    public function getOkbancVto(): ?\DateTimeInterface
    {
        return $this->okbancVto;
    }

    public function setOkbancVto(?\DateTimeInterface $okbancVto): self
    {
        $this->okbancVto = $okbancVto;

        return $this;
    }

    public function getNumProforma(): ?Tfraproforma
    {
        return $this->numProforma;
    }

    public function setNumProforma(?Tfraproforma $numProforma): self
    {
        $this->numProforma = $numProforma;

        return $this;
    }

    public function getInstpag(): ?TInstrumentPag
    {
        return $this->instpag;
    }

    public function setInstpag(?TInstrumentPag $instpag): self
    {
        $this->instpag = $instpag;

        return $this;
    }


}
