<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TComercials
 *
 * @ORM\Table(name="t_comercials")
 * @ORM\Entity
 */
class TComercials
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Comercial", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComercial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Codi_Comercial", type="string", length=50, nullable=true)
     */
    private $codiComercial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Comercial", type="string", length=255, nullable=true)
     */
    private $nomComercial;


}
