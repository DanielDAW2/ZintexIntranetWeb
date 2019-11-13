<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TFraproformaPlazos
 *
 * @ORM\Table(name="t_fraproforma_plazos")
 * @ORM\Entity
 */
class TFraproformaPlazos
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_FraProforma_Plazo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFraproformaPlazo;




    /**
     * @var string|null
     *
     * @ORM\Column(name="DescripProd_FraProf_Plazo", type="string", length=255, nullable=true)
     */
    private $descripprodFraprofPlazo;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Baixa", type="boolean", nullable=true)
     */
    private $baixa;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TFraProforma", inversedBy="tFraproformaPlazos")
     * @ORM\JoinColumn(referencedColumnName="Id_FraProf")
     */
    private $numFraproforma;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Tproductes")
     * @ORM\JoinColumn(referencedColumnName="Id_Prod")
     */
    private $codprodFraprofPlazo;

    

    public function getIdFraproformaPlazo(): ?int
    {
        return $this->idFraproformaPlazo;
    }



    public function getDescripprodFraprofPlazo(): ?string
    {
        return $this->descripprodFraprofPlazo;
    }

    public function setDescripprodFraprofPlazo(?string $descripprodFraprofPlazo): self
    {
        $this->descripprodFraprofPlazo = $descripprodFraprofPlazo;

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

    public function getNumFraproforma(): ?TFraProforma
    {
        return $this->numFraproforma;
    }

    public function setNumFraproforma(?TFraProforma $numFraproforma): self
    {
        $this->numFraproforma = $numFraproforma;

        return $this;
    }

    public function getCodprodFraprofPlazo(): ?Tproductes
    {
        return $this->codprodFraprofPlazo;
    }

    public function setCodprodFraprofPlazo(?Tproductes $codprodFraprofPlazo): self
    {
        $this->codprodFraprofPlazo = $codprodFraprofPlazo;

        return $this;
    }


}
