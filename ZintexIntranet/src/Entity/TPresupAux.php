<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPresupAux
 *
 * @ORM\Table(name="t_presup_aux")
 * @ORM\Entity
 */
class TPresupAux
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Presup_Aux", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPresupAux;



    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Linia", type="integer", nullable=true)
     */
    private $numLinia;



    /**
     * @var string|null
     *
     * @ORM\Column(name="DescripProd_Presup", type="string", length=1000, nullable=true)
     */
    private $descripprodPresup;



    /**
     * @var string|null
     *
     * @ORM\Column(name="DescripParamImp_Presup", type="string", length=255, nullable=true)
     */
    private $descripparamimpPresup;

    /**
     * @var float|null
     *
     * @ORM\Column(name="NumUnit_Presup", type="float", precision=10, scale=0, nullable=true)
     */
    private $numunitPresup;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PreuUnit_Presup", type="float", precision=10, scale=0, nullable=true)
     */
    private $preuunitPresup;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Baixa", type="boolean", nullable=true)
     */
    private $baixa;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TPresup", inversedBy="tPresupAuxes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $numPresup;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TParamImp")
     */
    private $codparamimpPresup;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TProductes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $codprodPresup;

 

    public function getIdPresupAux(): ?int
    {
        return $this->idPresupAux;
    }


    public function getNumLinia(): ?int
    {
        return $this->numLinia;
    }

    public function setNumLinia(?int $numLinia): self
    {
        $this->numLinia = $numLinia;

        return $this;
    }



    public function getDescripprodPresup(): ?string
    {
        return $this->descripprodPresup;
    }

    public function setDescripprodPresup(?string $descripprodPresup): self
    {
        $this->descripprodPresup = $descripprodPresup;

        return $this;
    }



    public function getDescripparamimpPresup(): ?string
    {
        return $this->descripparamimpPresup;
    }

    public function setDescripparamimpPresup(?string $descripparamimpPresup): self
    {
        $this->descripparamimpPresup = $descripparamimpPresup;

        return $this;
    }

    public function getNumunitPresup(): ?float
    {
        return $this->numunitPresup;
    }

    public function setNumunitPresup(?float $numunitPresup): self
    {
        $this->numunitPresup = $numunitPresup;

        return $this;
    }

    public function getPreuunitPresup(): ?float
    {
        return $this->preuunitPresup;
    }

    public function setPreuunitPresup(?float $preuunitPresup): self
    {
        $this->preuunitPresup = $preuunitPresup;

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

    public function getNumPresup(): ?TPresup
    {
        return $this->numPresup;
    }

    public function setNumPresup(?TPresup $numPresup): self
    {
        $this->numPresup = $numPresup;

        return $this;
    }

    public function getCodparamimpPresup(): ?TParamImp
    {
        return $this->codparamimpPresup;
    }

    public function setCodparamimpPresup(?TParamImp $codparamimpPresup): self
    {
        $this->codparamimpPresup = $codparamimpPresup;

        return $this;
    }

    public function getCodprodPresup(): ?TProductes
    {
        return $this->codprodPresup;
    }

    public function setCodprodPresup(?TProductes $codprodPresup): self
    {
        $this->codprodPresup = $codprodPresup;

        return $this;
    }


}
