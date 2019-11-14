<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
USE Doctrine\DBAL\Schema\Index;

/**
 * TProductes
 *
 * @ORM\Table(name="t_productes", indexes={@ORM\Index(name="ref_prod_index", columns={"Ref_Prod"})})
 * @ORM\Entity(repositoryClass="App\Repository\TProductesRepository")
 */
class TProductes
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Prod", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProd;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ordre", type="smallint", nullable=true)
     */
    private $ordre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ref_Prod", type="string", length=255, nullable=true)
     */
    private $refProd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ETIQUETA", type="string", length=255, nullable=true)
     */
    private $etiqueta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Prod", type="string", length=1000, nullable=true)
     */
    private $nomProd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Prod_Curt", type="string", length=1000, nullable=true)
     */
    private $nomProdCurt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESCRIPOT", type="string", length=255, nullable=true)
     */
    private $descripot;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESCRIPAL", type="string", length=255, nullable=true)
     */
    private $descripal;





    /**
     * @var bool|null
     *
     * @ORM\Column(name="Baixa", type="boolean", nullable=true)
     */
    private $baixa;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Disseny", type="boolean", nullable=true)
     */
    private $disseny;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Produccio", type="boolean", nullable=true)
     */
    private $produccio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FOTO", type="string", length=255, nullable=true)
     */
    private $foto;

    /**
     * @var string|null
     *
     * @ORM\OneToMany(targetEntity="TPreciosCantidad", mappedBy="productoId")
     * @ORM\JoinColumn(nullable=true)
     */
    private $preciosCantidad;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TgrupProducte", inversedBy="tProductes")
     * @ORM\JoinColumn(referencedColumnName="Id_GrupProducte", name="Grup_Producte")
     */
    private $grupProducte;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TColors")
     * @ORM\JoinColumn(referencedColumnName="Id_Color", name="Color")
     */
    private $color;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TProductesTarifa", mappedBy="idProducte")
     */
    private $tProductesTarifas;



    public function __construct()
    {
        $this->preciosCantidad = new ArrayCollection();
        $this->tProductesTarifas = new ArrayCollection();
        $this->preciosCantidad = new ArrayCollection();
    }

    /**
     * @return Collection|TPreciosCantidad[]
     */
    public function getPreciosCantidad(): ArrayCollection
    {
        return $this->preciosCantidad;
    }

    public function setPreciosCantidad(?TPreciosCantidad $preciosCantidad) : self {
        $this->preciosCantidad = $preciosCantidad;

        return self;
    }

    public function getIdProd(): ?int
    {
        return $this->idProd;
    }

    public function getOrdre(): ?int
    {
        return $this->ordre;
    }

    public function setOrdre(?int $ordre): self
    {
        $this->ordre = $ordre;

        return $this;
    }

    public function getRefProd(): ?string
    {
        return $this->refProd;
    }

    public function setRefProd(?string $refProd): self
    {
        $this->refProd = $refProd;

        return $this;
    }

    public function getEtiqueta(): ?string
    {
        return $this->etiqueta;
    }

    public function setEtiqueta(?string $etiqueta): self
    {
        $this->etiqueta = $etiqueta;

        return $this;
    }

    public function getNomProd(): ?string
    {
        return $this->nomProd;
    }

    public function setNomProd(?string $nomProd): self
    {
        $this->nomProd = $nomProd;

        return $this;
    }

    public function getNomProdCurt(): ?string
    {
        return $this->nomProdCurt;
    }

    public function setNomProdCurt(?string $nomProdCurt): self
    {
        $this->nomProdCurt = $nomProdCurt;

        return $this;
    }

    public function getDescripot(): ?string
    {
        return $this->descripot;
    }

    public function setDescripot(?string $descripot): self
    {
        $this->descripot = $descripot;

        return $this;
    }

    public function getDescripal(): ?string
    {
        return $this->descripal;
    }

    public function setDescripal(?string $descripal): self
    {
        $this->descripal = $descripal;

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

    public function getDisseny(): ?bool
    {
        return $this->disseny;
    }

    public function setDisseny(?bool $disseny): self
    {
        $this->disseny = $disseny;

        return $this;
    }

    public function getProduccio(): ?bool
    {
        return $this->produccio;
    }

    public function setProduccio(?bool $produccio): self
    {
        $this->produccio = $produccio;

        return $this;
    }

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(?string $foto): self
    {
        $this->foto = $foto;

        return $this;
    }

    public function getGrupProducte(): ?TgrupProducte
    {
        return $this->grupProducte;
    }

    public function setGrupProducte(?TgrupProducte $grupProducte): self
    {
        $this->grupProducte = $grupProducte;

        return $this;
    }

    public function getColor(): ?TColors
    {
        return $this->color;
    }

    public function setColor(?TColors $color): self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @return Collection|TProductesTarifa[]
     */
    public function getTProductesTarifas(): Collection
    {
        return $this->tProductesTarifas;
    }

    public function addTProductesTarifa(TProductesTarifa $tProductesTarifa): self
    {
        if (!$this->tProductesTarifas->contains($tProductesTarifa)) {
            $this->tProductesTarifas[] = $tProductesTarifa;
            $tProductesTarifa->setIdProducte($this);
        }

        return $this;
    }

    public function removeTProductesTarifa(TProductesTarifa $tProductesTarifa): self
    {
        if ($this->tProductesTarifas->contains($tProductesTarifa)) {
            $this->tProductesTarifas->removeElement($tProductesTarifa);
            // set the owning side to null (unless already changed)
            if ($tProductesTarifa->getIdProducte() === $this) {
                $tProductesTarifa->setIdProducte(null);
            }
        }

        return $this;
    }

    public function addPreciosCantidad(TPreciosCantidad $preciosCantidad): self
    {
        if (!$this->preciosCantidad->contains($preciosCantidad)) {
            $this->preciosCantidad[] = $preciosCantidad;
            $preciosCantidad->setProductoId($this);
        }

        return $this;
    }

    public function removePreciosCantidad(TPreciosCantidad $preciosCantidad): self
    {
        if ($this->preciosCantidad->contains($preciosCantidad)) {
            $this->preciosCantidad->removeElement($preciosCantidad);
            // set the owning side to null (unless already changed)
            if ($preciosCantidad->getProductoId() === $this) {
                $preciosCantidad->setProductoId(null);
            }
        }

        return $this;
    }




}
