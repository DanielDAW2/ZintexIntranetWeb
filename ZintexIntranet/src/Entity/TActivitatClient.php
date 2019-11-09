<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TActivitatClient
 *
 * @ORM\Table(name="t_activitat_client")
 * @ORM\Entity
 */
class TActivitatClient
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
     * @var int|null
     *
     * @ORM\Column(name="Codi_Activitat", type="integer", nullable=true)
     */
    private $codiActivitat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tipus_Client", type="string", length=255, nullable=true)
     */
    private $tipusClient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Coef_Recarrec", type="string", length=255, nullable=true)
     */
    private $coefRecarrec;


}
