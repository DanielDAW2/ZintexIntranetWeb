<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TGrupGral
 *
 * @ORM\Table(name="t_grup_gral")
 * @ORM\Entity
 */
class TGrupGral
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Grupo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGrupo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Grupo", type="string", length=50, nullable=true)
     */
    private $nomGrupo;


}
