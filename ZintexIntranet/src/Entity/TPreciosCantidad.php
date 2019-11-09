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


}
