<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TParamimp
 *
 * @ORM\Table(name="t_paramimp")
 * @ORM\Entity
 */
class TParamimp
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_ParamImp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idParamimp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Codi_ParamImp", type="string", length=50, nullable=true)
     */
    private $codiParamimp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_ParamImp", type="string", length=50, nullable=true)
     */
    private $nomParamimp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_ParamImp_Cat", type="string", length=50, nullable=true)
     */
    private $nomParamimpCat;


}
