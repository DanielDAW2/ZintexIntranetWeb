<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TTractaments
 *
 * @ORM\Table(name="t_tractaments")
 * @ORM\Entity
 */
class TTractaments
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Tract", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTract;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tractament", type="string", length=50, nullable=true)
     */
    private $tractament;


}
