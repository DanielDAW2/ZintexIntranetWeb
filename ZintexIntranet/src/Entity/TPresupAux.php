<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPresupAux
 *
 * @ORM\Table(name="t_presup_aux")
 * @ORM\Entity
 */
class TPresupAux
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Presup_Aux", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPresupAux;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Presup", type="integer", nullable=true)
     */
    private $numPresup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Linia", type="integer", nullable=true)
     */
    private $numLinia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CodProd_Presup", type="integer", nullable=true)
     */
    private $codprodPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DescripProd_Presup", type="string", length=1000, nullable=true)
     */
    private $descripprodPresup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CodParamImp_Presup", type="integer", nullable=true)
     */
    private $codparamimpPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DescripParamImp_Presup", type="string", length=255, nullable=true)
     */
    private $descripparamimpPresup;

    /**
     * @var float|null
     *
     * @ORM\Column(name="NumUnit_Presup", type="float", precision=10, scale=0, nullable=true)
     */
    private $numunitPresup;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PreuUnit_Presup", type="float", precision=10, scale=0, nullable=true)
     */
    private $preuunitPresup;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Baixa", type="boolean", nullable=true)
     */
    private $baixa;


}
