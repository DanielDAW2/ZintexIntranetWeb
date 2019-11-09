<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TAutorsPresup
 *
 * @ORM\Table(name="t_autors_presup")
 * @ORM\Entity
 */
class TAutorsPresup
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_AutPresup", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAutpresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_AutPresup", type="string", length=255, nullable=true)
     */
    private $codAutpresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descrip_AutPresup", type="string", length=255, nullable=true)
     */
    private $descripAutpresup;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Baixa", type="boolean", nullable=true)
     */
    private $baixa;


}
