<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TFraproformaPlazos
 *
 * @ORM\Table(name="t_fraproforma_plazos")
 * @ORM\Entity
 */
class TFraproformaPlazos
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_FraProforma_Plazo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFraproformaPlazo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_FraProforma", type="integer", nullable=true)
     */
    private $numFraproforma;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CodProd_FraProf_Plazo", type="integer", nullable=true)
     */
    private $codprodFraprofPlazo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DescripProd_FraProf_Plazo", type="string", length=255, nullable=true)
     */
    private $descripprodFraprofPlazo;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Baixa", type="boolean", nullable=true)
     */
    private $baixa;


}
