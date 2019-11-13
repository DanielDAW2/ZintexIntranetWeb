<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TProductesProv
 *
 * @ORM\Table(name="t_productes_prov")
 * @ORM\Entity
 */
class TProductesProv
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Prod_Prov", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProdProv;



    /**
     * @var string|null
     *
     * @ORM\Column(name="Codi_Producte", type="string", length=255, nullable=true)
     */
    private $codiProducte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descrip_Producte", type="string", length=50, nullable=true)
     */
    private $descripProducte;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PreuUnit_Producte", type="float", precision=10, scale=0, nullable=true)
     */
    private $preuunitProducte;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TProveidors", inversedBy="tProductesProvs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $numProveidor;

    public function getIdProdProv(): ?int
    {
        return $this->idProdProv;
    }



    public function getCodiProducte(): ?string
    {
        return $this->codiProducte;
    }

    public function setCodiProducte(?string $codiProducte): self
    {
        $this->codiProducte = $codiProducte;

        return $this;
    }

    public function getDescripProducte(): ?string
    {
        return $this->descripProducte;
    }

    public function setDescripProducte(?string $descripProducte): self
    {
        $this->descripProducte = $descripProducte;

        return $this;
    }

    public function getPreuunitProducte(): ?float
    {
        return $this->preuunitProducte;
    }

    public function setPreuunitProducte(?float $preuunitProducte): self
    {
        $this->preuunitProducte = $preuunitProducte;

        return $this;
    }

    public function getNumProveidor(): ?TProveidors
    {
        return $this->numProveidor;
    }

    public function setNumProveidor(?TProveidors $numProveidor): self
    {
        $this->numProveidor = $numProveidor;

        return $this;
    }


}
