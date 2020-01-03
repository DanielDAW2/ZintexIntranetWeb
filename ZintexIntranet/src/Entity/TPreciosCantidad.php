<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPreciosCantidad
 *
 * @ORM\Table(name="t_precios_cantidad")
 * @ORM\Entity(repositoryClass="App\Repository\TPreciosCantidadRepository")
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
     * @ORM\Column(name="producto_id", nullable=true, name="Ref_Prod")
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

    public function getProductoId(): ?TProductes
    {
        return $this->productoId;
    }

    public function addProductoId(?TProductes $productoId): self
    {
        $this->productoId[] = $productoId;

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

    public function setProductoId(?TProductes $productoId): self
    {
        $this->productoId = $productoId;

        return $this;
    }


}
