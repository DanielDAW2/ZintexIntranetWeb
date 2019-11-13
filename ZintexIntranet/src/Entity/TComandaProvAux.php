<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TComandaProvAux
 *
 * @ORM\Table(name="t_comanda_prov_aux")
 * @ORM\Entity
 */
class TComandaProvAux
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Comanda_Prov_Aux", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComandaProvAux;

    



    /**
     * @var string|null
     *
     * @ORM\Column(name="Descrip_Prod_Prov", type="string", length=50, nullable=true)
     */
    private $descripProdProv;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Num_Unit_Prod", type="float", precision=10, scale=0, nullable=true)
     */
    private $numUnitProd;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Preu_Unit_Prod", type="float", precision=10, scale=0, nullable=true)
     */
    private $preuUnitProd;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Preu_Total_Prod", type="float", precision=10, scale=0, nullable=true)
     */
    private $preuTotalProd;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TComandaProv", inversedBy="tComandaProvAuxes")
     * @ORM\JoinColumn(nullable=false, referencedColumnName="Id_Comanda_Prov")
     */
    private $numComandaProv;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TProductesProv")
     * @ORM\JoinColumn(nullable=false, referencedColumnName="Id_Prod_Prov")
     */
    private $numProdProv;

    public function getIdComandaProvAux(): ?int
    {
        return $this->idComandaProvAux;
    }

    public function getDescripProdProv(): ?string
    {
        return $this->descripProdProv;
    }

    public function setDescripProdProv(?string $descripProdProv): self
    {
        $this->descripProdProv = $descripProdProv;

        return $this;
    }

    public function getNumUnitProd(): ?float
    {
        return $this->numUnitProd;
    }

    public function setNumUnitProd(?float $numUnitProd): self
    {
        $this->numUnitProd = $numUnitProd;

        return $this;
    }

    public function getPreuUnitProd(): ?float
    {
        return $this->preuUnitProd;
    }

    public function setPreuUnitProd(?float $preuUnitProd): self
    {
        $this->preuUnitProd = $preuUnitProd;

        return $this;
    }

    public function getPreuTotalProd(): ?float
    {
        return $this->preuTotalProd;
    }

    public function setPreuTotalProd(?float $preuTotalProd): self
    {
        $this->preuTotalProd = $preuTotalProd;

        return $this;
    }

    public function getNumComandaProv(): ?TComandaProv
    {
        return $this->numComandaProv;
    }

    public function setNumComandaProv(?TComandaProv $numComandaProv): self
    {
        $this->numComandaProv = $numComandaProv;

        return $this;
    }

    public function getNumProdProv(): ?TProductesProv
    {
        return $this->numProdProv;
    }

    public function setNumProdProv(?TProductesProv $numProdProv): self
    {
        $this->numProdProv = $numProdProv;

        return $this;
    }


}
