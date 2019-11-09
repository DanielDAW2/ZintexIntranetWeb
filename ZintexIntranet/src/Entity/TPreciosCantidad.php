<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPreciosCantidad
 *
 * @ORM\Table(name="t_precios_cantidad")
 * @ORM\Entity
 */
class TPreciosCantidad
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="producto_id", type="string", length=25, nullable=true)
     */
    private $productoId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=true)
     */
    private $cantidad;

    /**
     * @var float|null
     *
     * @ORM\Column(name="precio", type="float", precision=10, scale=0, nullable=true)
     */
    private $precio;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductoId(): ?string
    {
        return $this->productoId;
    }

    public function setProductoId(?string $productoId): self
    {
        $this->productoId = $productoId;

        return $this;
    }

    public function getCantidad(): ?int
    {
        return $this->cantidad;
    }

    public function setCantidad(?int $cantidad): self
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(?float $precio): self
    {
        $this->precio = $precio;

        return $this;
    }


}
