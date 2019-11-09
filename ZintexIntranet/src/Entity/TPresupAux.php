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
     * @ORM\Column(name="Num_Presup", type="integer", nullable=true)
     */
    private $numPresup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Linia", type="integer", nullable=true)
     */
    private $numLinia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CodProd_Presup", type="integer", nullable=true)
     */
    private $codprodPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DescripProd_Presup", type="string", length=1000, nullable=true)
     */
    private $descripprodPresup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CodParamImp_Presup", type="integer", nullable=true)
     */
    private $codparamimpPresup;

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

    public function getIdPresupAux(): ?int
    {
        return $this->idPresupAux;
    }

    public function getNumPresup(): ?int
    {
        return $this->numPresup;
    }

    public function setNumPresup(?int $numPresup): self
    {
        $this->numPresup = $numPresup;

        return $this;
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

    public function getCodprodPresup(): ?int
    {
        return $this->codprodPresup;
    }

    public function setCodprodPresup(?int $codprodPresup): self
    {
        $this->codprodPresup = $codprodPresup;

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

    public function getCodparamimpPresup(): ?int
    {
        return $this->codparamimpPresup;
    }

    public function setCodparamimpPresup(?int $codparamimpPresup): self
    {
        $this->codparamimpPresup = $codparamimpPresup;

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


}
