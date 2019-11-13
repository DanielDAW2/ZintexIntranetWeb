<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * TProductes
 *
 * @ORM\Table(name="t_productes")
 * @ORM\Entity
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
     * @var int|null
     *
     * @ORM\Column(name="Color", type="integer", nullable=true)
     */
    private $color;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Grup_Producte", type="integer", nullable=true)
     */
    private $grupProducte;

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

    public function __construct()
    {
        $this->preciosCantidad = new ArrayCollection();
    }

    public function getPreciosCantidad(): ?ArrayCollection {
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

    public function getColor(): ?int
    {
        return $this->color;
    }

    public function setColor(?int $color): self
    {
        $this->color = $color;

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


}
