<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPresupVto
 *
 * @ORM\Table(name="t_presup_vto")
 * @ORM\Entity
 */
class TPresupVto
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Presup_Vto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPresupVto;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Presup", type="integer", nullable=true)
     */
    private $numPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Concepte_Vto", type="string", length=200, nullable=true)
     */
    private $concepteVto;

    /**
     * @var int|null
     *
     * @ORM\Column(name="InstPag", type="integer", nullable=true)
     */
    private $instpag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InstPag_Aux", type="string", length=1000, nullable=true)
     */
    private $instpagAux;


}
