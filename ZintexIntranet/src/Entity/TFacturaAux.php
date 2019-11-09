<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TFacturaAux
 *
 * @ORM\Table(name="t_factura_aux")
 * @ORM\Entity
 */
class TFacturaAux
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Factura_Aux", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFacturaAux;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Factura", type="integer", nullable=true)
     */
    private $numFactura;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Linia", type="integer", nullable=true)
     */
    private $numLinia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CodProd_Factura", type="integer", nullable=true)
     */
    private $codprodFactura;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DescripProd_Factura", type="string", length=1000, nullable=true)
     */
    private $descripprodFactura;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CodParamImp_Factura", type="integer", nullable=true)
     */
    private $codparamimpFactura;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DescripParamImp_Factura", type="string", length=255, nullable=true)
     */
    private $descripparamimpFactura;

    /**
     * @var float|null
     *
     * @ORM\Column(name="NumUnit_Factura", type="float", precision=10, scale=0, nullable=true)
     */
    private $numunitFactura;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PreuUnit_Factura", type="float", precision=10, scale=0, nullable=true)
     */
    private $preuunitFactura;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Preu_Factura", type="float", precision=10, scale=0, nullable=true)
     */
    private $preuFactura;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Baixa", type="boolean", nullable=true)
     */
    private $baixa;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Grup_Producte", type="integer", nullable=true)
     */
    private $grupProducte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Codi_Factura", type="string", length=255, nullable=true)
     */
    private $codiFactura;

    public function getIdFacturaAux(): ?int
    {
        return $this->idFacturaAux;
    }

    public function getNumFactura(): ?int
    {
        return $this->numFactura;
    }

    public function setNumFactura(?int $numFactura): self
    {
        $this->numFactura = $numFactura;

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

    public function getCodprodFactura(): ?int
    {
        return $this->codprodFactura;
    }

    public function setCodprodFactura(?int $codprodFactura): self
    {
        $this->codprodFactura = $codprodFactura;

        return $this;
    }

    public function getDescripprodFactura(): ?string
    {
        return $this->descripprodFactura;
    }

    public function setDescripprodFactura(?string $descripprodFactura): self
    {
        $this->descripprodFactura = $descripprodFactura;

        return $this;
    }

    public function getCodparamimpFactura(): ?int
    {
        return $this->codparamimpFactura;
    }

    public function setCodparamimpFactura(?int $codparamimpFactura): self
    {
        $this->codparamimpFactura = $codparamimpFactura;

        return $this;
    }

    public function getDescripparamimpFactura(): ?string
    {
        return $this->descripparamimpFactura;
    }

    public function setDescripparamimpFactura(?string $descripparamimpFactura): self
    {
        $this->descripparamimpFactura = $descripparamimpFactura;

        return $this;
    }

    public function getNumunitFactura(): ?float
    {
        return $this->numunitFactura;
    }

    public function setNumunitFactura(?float $numunitFactura): self
    {
        $this->numunitFactura = $numunitFactura;

        return $this;
    }

    public function getPreuunitFactura(): ?float
    {
        return $this->preuunitFactura;
    }

    public function setPreuunitFactura(?float $preuunitFactura): self
    {
        $this->preuunitFactura = $preuunitFactura;

        return $this;
    }

    public function getPreuFactura(): ?float
    {
        return $this->preuFactura;
    }

    public function setPreuFactura(?float $preuFactura): self
    {
        $this->preuFactura = $preuFactura;

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

    public function getGrupProducte(): ?int
    {
        return $this->grupProducte;
    }

    public function setGrupProducte(?int $grupProducte): self
    {
        $this->grupProducte = $grupProducte;

        return $this;
    }

    public function getCodiFactura(): ?string
    {
        return $this->codiFactura;
    }

    public function setCodiFactura(?string $codiFactura): self
    {
        $this->codiFactura = $codiFactura;

        return $this;
    }


}
