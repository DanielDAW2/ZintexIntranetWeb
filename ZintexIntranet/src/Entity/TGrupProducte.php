<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TGrupProducte
 *
 * @ORM\Table(name="t_grup_producte")
 * @ORM\Entity
 */
class TGrupProducte
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_GrupProducte", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGrupproducte;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Grup_Producte", type="integer", nullable=true)
     */
    private $numGrupProducte;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Grup_Gral", type="integer", nullable=true)
     */
    private $grupGral;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descrip_Grup_Producte", type="string", length=50, nullable=true)
     */
    private $descripGrupProducte;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Admet_Marcatge", type="boolean", nullable=true)
     */
    private $admetMarcatge;


}
