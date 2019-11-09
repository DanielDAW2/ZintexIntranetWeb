<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPaisos
 *
 * @ORM\Table(name="t_paisos")
 * @ORM\Entity
 */
class TPaisos
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Pais", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPais;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pais", type="string", length=35, nullable=true)
     */
    private $pais;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Preftel_Pais", type="string", length=4, nullable=true)
     */
    private $preftelPais;


}
