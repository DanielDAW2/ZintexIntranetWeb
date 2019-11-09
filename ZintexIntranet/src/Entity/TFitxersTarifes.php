<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TFitxersTarifes
 *
 * @ORM\Table(name="t_fitxers_tarifes")
 * @ORM\Entity
 */
class TFitxersTarifes
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Fitxer", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFitxer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Producte", type="string", length=50, nullable=true)
     */
    private $producte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Path_Fitxer", type="string", length=255, nullable=true)
     */
    private $pathFitxer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Fitxer", type="string", length=50, nullable=true)
     */
    private $nomFitxer;


}
