<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TColors
 *
 * @ORM\Table(name="t_colors")
 * @ORM\Entity
 */
class TColors
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Color", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idColor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Tipo_Color", type="smallint", nullable=true)
     */
    private $tipoColor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Color", type="string", length=50, nullable=true)
     */
    private $color;


}
