<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TFraproformaAux
 *
 * @ORM\Table(name="t_fraproforma_aux")
 * @ORM\Entity
 */
class TFraproformaAux
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_FraProforma_Aux", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFraproformaAux;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Proforma", type="integer", nullable=true)
     */
    private $numProforma;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Linia", type="integer", nullable=true)
     */
    private $numLinia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Grup_Producte", type="integer", nullable=true)
     */
    private $grupProducte;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CodProd_Proforma", type="integer", nullable=true)
     */
    private $codprodProforma;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DescripProd_Proforma", type="string", length=1000, nullable=true)
     */
    private $descripprodProforma;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CodParamImp_Proforma", type="integer", nullable=true)
     */
    private $codparamimpProforma;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DescripParamImp_Proforma", type="string", length=255, nullable=true)
     */
    private $descripparamimpProforma;

    /**
     * @var float|null
     *
     * @ORM\Column(name="NumUnit_Proforma", type="float", precision=10, scale=0, nullable=true)
     */
    private $numunitProforma;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PreuUnit_Proforma", type="float", precision=10, scale=0, nullable=true)
     */
    private $preuunitProforma;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Preu_Proforma", type="float", precision=10, scale=0, nullable=true)
     */
    private $preuProforma;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Baixa", type="boolean", nullable=true)
     */
    private $baixa;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Marcat", type="boolean", nullable=true)
     */
    private $marcat;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Prod_Principal", type="boolean", nullable=true)
     */
    private $prodPrincipal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Codi_FraProforma", type="string", length=255, nullable=true)
     */
    private $codiFraproforma;

    public function getIdFraproformaAux(): ?int
    {
        return $this->idFraproformaAux;
    }

    public function getNumProforma(): ?int
    {
        return $this->numProforma;
    }

    public function setNumProforma(?int $numProforma): self
    {
        $this->numProforma = $numProforma;

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

    public function getGrupProducte(): ?int
    {
        return $this->grupProducte;
    }

    public function setGrupProducte(?int $grupProducte): self
    {
        $this->grupProducte = $grupProducte;

        return $this;
    }

    public function getCodprodProforma(): ?int
    {
        return $this->codprodProforma;
    }

    public function setCodprodProforma(?int $codprodProforma): self
    {
        $this->codprodProforma = $codprodProforma;

        return $this;
    }

    public function getDescripprodProforma(): ?string
    {
        return $this->descripprodProforma;
    }

    public function setDescripprodProforma(?string $descripprodProforma): self
    {
        $this->descripprodProforma = $descripprodProforma;

        return $this;
    }

    public function getCodparamimpProforma(): ?int
    {
        return $this->codparamimpProforma;
    }

    public function setCodparamimpProforma(?int $codparamimpProforma): self
    {
        $this->codparamimpProforma = $codparamimpProforma;

        return $this;
    }

    public function getDescripparamimpProforma(): ?string
    {
        return $this->descripparamimpProforma;
    }

    public function setDescripparamimpProforma(?string $descripparamimpProforma): self
    {
        $this->descripparamimpProforma = $descripparamimpProforma;

        return $this;
    }

    public function getNumunitProforma(): ?float
    {
        return $this->numunitProforma;
    }

    public function setNumunitProforma(?float $numunitProforma): self
    {
        $this->numunitProforma = $numunitProforma;

        return $this;
    }

    public function getPreuunitProforma(): ?float
    {
        return $this->preuunitProforma;
    }

    public function setPreuunitProforma(?float $preuunitProforma): self
    {
        $this->preuunitProforma = $preuunitProforma;

        return $this;
    }

    public function getPreuProforma(): ?float
    {
        return $this->preuProforma;
    }

    public function setPreuProforma(?float $preuProforma): self
    {
        $this->preuProforma = $preuProforma;

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

    public function getMarcat(): ?bool
    {
        return $this->marcat;
    }

    public function setMarcat(?bool $marcat): self
    {
        $this->marcat = $marcat;

        return $this;
    }

    public function getProdPrincipal(): ?bool
    {
        return $this->prodPrincipal;
    }

    public function setProdPrincipal(?bool $prodPrincipal): self
    {
        $this->prodPrincipal = $prodPrincipal;

        return $this;
    }

    public function getCodiFraproforma(): ?string
    {
        return $this->codiFraproforma;
    }

    public function setCodiFraproforma(?string $codiFraproforma): self
    {
        $this->codiFraproforma = $codiFraproforma;

        return $this;
    }


}
