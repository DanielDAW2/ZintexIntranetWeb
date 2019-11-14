<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\Column(name="Num_Linia", type="integer", nullable=true)
     */
    private $numLinia;




    /**
     * @var string|null
     *
     * @ORM\Column(name="DescripProd_Proforma", type="string", length=1000, nullable=true)
     */
    private $descripprodProforma;


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

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TFraproforma", inversedBy="tFraproformaAuxes")
     * @ORM\JoinColumn(nullable=false, referencedColumnName="Id_FraProf", name="Num_Proforma")
     */
    private $numProforma;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TGrupProducte")
     * @ORM\JoinColumn(referencedColumnName="Id_GrupProducte", name="Grup_Producte")
     */
    private $grupProducte;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TProductes")
     * @ORM\JoinColumn(referencedColumnName="Id_Prod", name="CodProd_Proforma")
     */
    private $codprodProforma;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TParamImp")
     * @ORM\JoinColumn(referencedColumnName="Id_ParamImp")
     */
    private $codparamimpProforma;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TOrdreTreballAux", mappedBy="idFraproformaAux")
     */
    private $tOrdreTreballAuxes;

    public function __construct()
    {
        $this->tOrdreTreballAuxes = new ArrayCollection();
    }



    public function getIdFraproformaAux(): ?int
    {
        return $this->idFraproformaAux;
    }

    public function getNumProforma(): ?TFraproforma
    {
        return $this->numProforma;
    }

    public function setNumProforma(?TFraproforma $numProforma): self
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



    public function getDescripprodProforma(): ?string
    {
        return $this->descripprodProforma;
    }

    public function setDescripprodProforma(?string $descripprodProforma): self
    {
        $this->descripprodProforma = $descripprodProforma;

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

    public function getGrupProducte(): ?TGrupProducte
    {
        return $this->grupProducte;
    }

    public function setGrupProducte(?TGrupProducte $grupProducte): self
    {
        $this->grupProducte = $grupProducte;

        return $this;
    }

    public function getCodprodProforma(): ?TProductes
    {
        return $this->codprodProforma;
    }

    public function setCodprodProforma(?TProductes $codprodProforma): self
    {
        $this->codprodProforma = $codprodProforma;

        return $this;
    }

    public function getCodparamimpProforma(): ?TParamImp
    {
        return $this->codparamimpProforma;
    }

    public function setCodparamimpProforma(?TParamImp $codparamimpProforma): self
    {
        $this->codparamimpProforma = $codparamimpProforma;

        return $this;
    }

    /**
     * @return Collection|TOrdreTreballAux[]
     */
    public function getTOrdreTreballAuxes(): Collection
    {
        return $this->tOrdreTreballAuxes;
    }

    public function addTOrdreTreballAux(TOrdreTreballAux $tOrdreTreballAux): self
    {
        if (!$this->tOrdreTreballAuxes->contains($tOrdreTreballAux)) {
            $this->tOrdreTreballAuxes[] = $tOrdreTreballAux;
            $tOrdreTreballAux->setIdFraproformaAux($this);
        }

        return $this;
    }

    public function removeTOrdreTreballAux(TOrdreTreballAux $tOrdreTreballAux): self
    {
        if ($this->tOrdreTreballAuxes->contains($tOrdreTreballAux)) {
            $this->tOrdreTreballAuxes->removeElement($tOrdreTreballAux);
            // set the owning side to null (unless already changed)
            if ($tOrdreTreballAux->getIdFraproformaAux() === $this) {
                $tOrdreTreballAux->setIdFraproformaAux(null);
            }
        }

        return $this;
    }


}
