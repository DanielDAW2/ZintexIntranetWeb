<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TOrdreTreballAux
 *
 * @ORM\Table(name="t_ordre_treball_aux")
 * @ORM\Entity
 */
class TOrdreTreballAux
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Ordre_Treball_Aux", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdreTreballAux;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Ordre_Treball", type="integer", nullable=true)
     */
    private $numOrdreTreball;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Linia", type="integer", nullable=true)
     */
    private $numLinia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CodProd_Ordre_Treball", type="integer", nullable=true)
     */
    private $codprodOrdreTreball;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DescripProd_Ordre_Treball", type="string", length=1000, nullable=true)
     */
    private $descripprodOrdreTreball;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CodParamImp_Ordre_Treball", type="integer", nullable=true)
     */
    private $codparamimpOrdreTreball;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DescripParamImp_Ordre_Treball", type="string", length=1000, nullable=true)
     */
    private $descripparamimpOrdreTreball;

    /**
     * @var float|null
     *
     * @ORM\Column(name="NumUnit_Ordre_Treball", type="float", precision=10, scale=0, nullable=true)
     */
    private $numunitOrdreTreball;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Metres", type="integer", nullable=true)
     */
    private $metres;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Longitud", type="integer", nullable=true)
     */
    private $longitud;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Departament", type="string", length=50, nullable=true)
     */
    private $departament;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Baixa", type="boolean", nullable=true)
     */
    private $baixa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ample", type="string", length=4, nullable=true)
     */
    private $ample;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cares", type="string", length=10, nullable=true)
     */
    private $cares;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Grup_Producte", type="integer", nullable=true)
     */
    private $grupProducte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Codi_Ordre_Treball", type="string", length=255, nullable=true)
     */
    private $codiOrdreTreball;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Codi_FraProforma", type="string", length=255, nullable=true)
     */
    private $codiFraproforma;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Linia_Proforma", type="integer", nullable=true)
     */
    private $liniaProforma;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Id_FraProforma_Aux", type="integer", nullable=true)
     */
    private $idFraproformaAux;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Principal", type="boolean", nullable=true)
     */
    private $principal;


}
