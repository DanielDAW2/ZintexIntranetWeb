<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TGrupProducte
 *
 * @ORM\Table(name="t_grup_producte")
 * @ORM\Entity
 */
class TGrupProducte
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_GrupProducte", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGrupproducte;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Grup_Producte", type="integer", nullable=true)
     */
    private $numGrupProducte;



    /**
     * @var string|null
     *
     * @ORM\Column(name="Descrip_Grup_Producte", type="string", length=50, nullable=true)
     */
    private $descripGrupProducte;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Admet_Marcatge", type="boolean", nullable=true)
     */
    private $admetMarcatge;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TGrupGral", inversedBy="tGrupProductes")
     */
    private $grupGral;

    public function getIdGrupproducte(): ?int
    {
        return $this->idGrupproducte;
    }

    public function getNumGrupProducte(): ?int
    {
        return $this->numGrupProducte;
    }

    public function setNumGrupProducte(?int $numGrupProducte): self
    {
        $this->numGrupProducte = $numGrupProducte;

        return $this;
    }



    public function getDescripGrupProducte(): ?string
    {
        return $this->descripGrupProducte;
    }

    public function setDescripGrupProducte(?string $descripGrupProducte): self
    {
        $this->descripGrupProducte = $descripGrupProducte;

        return $this;
    }

    public function getAdmetMarcatge(): ?bool
    {
        return $this->admetMarcatge;
    }

    public function setAdmetMarcatge(?bool $admetMarcatge): self
    {
        $this->admetMarcatge = $admetMarcatge;

        return $this;
    }

    public function getGrupGral(): ?TGrupGral
    {
        return $this->grupGral;
    }

    public function setGrupGral(?TGrupGral $grupGral): self
    {
        $this->grupGral = $grupGral;

        return $this;
    }


}
