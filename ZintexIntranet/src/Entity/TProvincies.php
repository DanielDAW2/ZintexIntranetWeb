<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TProvincies
 *
 * @ORM\Table(name="t_provincies")
 * @ORM\Entity
 */
class TProvincies
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Provincia", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProvincia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Id_Comunitat", type="integer", nullable=true)
     */
    private $idComunitat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Provincia", type="string", length=30, nullable=true)
     */
    private $provincia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodPos", type="string", length=2, nullable=true)
     */
    private $codpos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodTel", type="string", length=3, nullable=true)
     */
    private $codtel;


}
