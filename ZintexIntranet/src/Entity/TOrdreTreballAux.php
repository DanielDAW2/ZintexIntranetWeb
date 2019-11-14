<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TOrdreTreballAux
 *
 * @ORM\Table(name="t_ordre_treball_aux")
 * @ORM\Entity
 */
class TOrdreTreballAux
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Ordre_Treball_Aux", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdreTreballAux;



    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Linia", type="integer", nullable=true)
     */
    private $numLinia;



    /**
     * @var string|null
     *
     * @ORM\Column(name="DescripProd_Ordre_Treball", type="string", length=1000, nullable=true)
     */
    private $descripprodOrdreTreball;



    /**
     * @var string|null
     *
     * @ORM\Column(name="DescripParamImp_Ordre_Treball", type="string", length=1000, nullable=true)
     */
    private $descripparamimpOrdreTreball;

    /**
     * @var float|null
     *
     * @ORM\Column(name="NumUnit_Ordre_Treball", type="float", precision=10, scale=0, nullable=true)
     */
    private $numunitOrdreTreball;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Metres", type="integer", nullable=true)
     */
    private $metres;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Longitud", type="integer", nullable=true)
     */
    private $longitud;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Departament", type="string", length=50, nullable=true)
     */
    private $departament;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Baixa", type="boolean", nullable=true)
     */
    private $baixa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ample", type="string", length=4, nullable=true)
     */
    private $ample;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cares", type="string", length=10, nullable=true)
     */
    private $cares;



    /**
     * @var string|null
     *
     * @ORM\Column(name="Codi_Ordre_Treball", type="string", length=255, nullable=true)
     */
    private $codiOrdreTreball;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Codi_FraProforma", type="string", length=255, nullable=true)
     */
    private $codiFraproforma;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Linia_Proforma", type="integer", nullable=true)
     */
    private $liniaProforma;


    /**
     * @var bool|null
     *
     * @ORM\Column(name="Principal", type="boolean", nullable=true)
     */
    private $principal;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TOrdreTreball", inversedBy="tOrdreTreballAuxes")
     * @ORM\JoinColumn(nullable=false, referencedColumnName="Id_Ordre", name="Num_Ordre_Treball")
     */
    private $numOrdreTreball;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TFraProformaAux", inversedBy="tOrdreTreballAuxes")
     * @ORM\JoinColumn(referencedColumnName="Id_FraProforma_Aux", name="Id_FraProforma_Aux")
     */
    private $idFraproformaAux;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TGrupProducte")
     * @ORM\JoinColumn(referencedColumnName="Id_GrupProducte", name="Grup_Producte")
     */
    private $grupProducte;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TParamImp")
     * @ORM\JoinColumn(referencedColumnName="Id_ParamImp", name="CodParamImp_Ordre_Treball")
     */
    private $codparamimpOrdreTreball;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TProductes")
     * @ORM\JoinColumn(referencedColumnName="Id_Prod", name="CodProd_Ordre_Treball")
     */
    private $codprodOrdreTreball;

    public function getIdOrdreTreballAux(): ?int
    {
        return $this->idOrdreTreballAux;
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



    public function getDescripprodOrdreTreball(): ?string
    {
        return $this->descripprodOrdreTreball;
    }

    public function setDescripprodOrdreTreball(?string $descripprodOrdreTreball): self
    {
        $this->descripprodOrdreTreball = $descripprodOrdreTreball;

        return $this;
    }



    public function getDescripparamimpOrdreTreball(): ?string
    {
        return $this->descripparamimpOrdreTreball;
    }

    public function setDescripparamimpOrdreTreball(?string $descripparamimpOrdreTreball): self
    {
        $this->descripparamimpOrdreTreball = $descripparamimpOrdreTreball;

        return $this;
    }

    public function getNumunitOrdreTreball(): ?float
    {
        return $this->numunitOrdreTreball;
    }

    public function setNumunitOrdreTreball(?float $numunitOrdreTreball): self
    {
        $this->numunitOrdreTreball = $numunitOrdreTreball;

        return $this;
    }

    public function getMetres(): ?int
    {
        return $this->metres;
    }

    public function setMetres(?int $metres): self
    {
        $this->metres = $metres;

        return $this;
    }

    public function getLongitud(): ?int
    {
        return $this->longitud;
    }

    public function setLongitud(?int $longitud): self
    {
        $this->longitud = $longitud;

        return $this;
    }

    public function getDepartament(): ?string
    {
        return $this->departament;
    }

    public function setDepartament(?string $departament): self
    {
        $this->departament = $departament;

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

    public function getAmple(): ?string
    {
        return $this->ample;
    }

    public function setAmple(?string $ample): self
    {
        $this->ample = $ample;

        return $this;
    }

    public function getCares(): ?string
    {
        return $this->cares;
    }

    public function setCares(?string $cares): self
    {
        $this->cares = $cares;

        return $this;
    }


    public function getCodiOrdreTreball(): ?string
    {
        return $this->codiOrdreTreball;
    }

    public function setCodiOrdreTreball(?string $codiOrdreTreball): self
    {
        $this->codiOrdreTreball = $codiOrdreTreball;

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

    public function getLiniaProforma(): ?int
    {
        return $this->liniaProforma;
    }

    public function setLiniaProforma(?int $liniaProforma): self
    {
        $this->liniaProforma = $liniaProforma;

        return $this;
    }



    public function getPrincipal(): ?bool
    {
        return $this->principal;
    }

    public function setPrincipal(?bool $principal): self
    {
        $this->principal = $principal;

        return $this;
    }

    public function getNumOrdreTreball(): ?TOrdreTreball
    {
        return $this->numOrdreTreball;
    }

    public function setNumOrdreTreball(?TOrdreTreball $numOrdreTreball): self
    {
        $this->numOrdreTreball = $numOrdreTreball;

        return $this;
    }

    public function getIdFraproformaAux(): ?TFraProformaAux
    {
        return $this->idFraproformaAux;
    }

    public function setIdFraproformaAux(?TFraProformaAux $idFraproformaAux): self
    {
        $this->idFraproformaAux = $idFraproformaAux;

        return $this;
    }

    public function getGrupProducte(): ?TGrupProducte
    {
        return $this->grupProducte;
    }

    public function setGrupProducte(?TGrupProducte $grupProducte): self
    {
        $this->grupProducte = $grupProducte;

        return $this;
    }

    public function getCodparamimpOrdreTreball(): ?TParamImp
    {
        return $this->codparamimpOrdreTreball;
    }

    public function setCodparamimpOrdreTreball(?TParamImp $codparamimpOrdreTreball): self
    {
        $this->codparamimpOrdreTreball = $codparamimpOrdreTreball;

        return $this;
    }

    public function getCodprodOrdreTreball(): ?TProductes
    {
        return $this->codprodOrdreTreball;
    }

    public function setCodprodOrdreTreball(?TProductes $codprodOrdreTreball): self
    {
        $this->codprodOrdreTreball = $codprodOrdreTreball;

        return $this;
    }


}
