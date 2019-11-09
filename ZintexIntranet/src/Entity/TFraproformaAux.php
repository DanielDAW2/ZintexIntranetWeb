<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TFraproformaAux
 *
 * @ORM\Table(name="t_fraproforma_aux")
 * @ORM\Entity
 */
class TFraproformaAux
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_FraProforma_Aux", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFraproformaAux;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Proforma", type="integer", nullable=true)
     */
    private $numProforma;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Linia", type="integer", nullable=true)
     */
    private $numLinia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Grup_Producte", type="integer", nullable=true)
     */
    private $grupProducte;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CodProd_Proforma", type="integer", nullable=true)
     */
    private $codprodProforma;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DescripProd_Proforma", type="string", length=1000, nullable=true)
     */
    private $descripprodProforma;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CodParamImp_Proforma", type="integer", nullable=true)
     */
    private $codparamimpProforma;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DescripParamImp_Proforma", type="string", length=255, nullable=true)
     */
    private $descripparamimpProforma;

    /**
     * @var float|null
     *
     * @ORM\Column(name="NumUnit_Proforma", type="float", precision=10, scale=0, nullable=true)
     */
    private $numunitProforma;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PreuUnit_Proforma", type="float", precision=10, scale=0, nullable=true)
     */
    private $preuunitProforma;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Preu_Proforma", type="float", precision=10, scale=0, nullable=true)
     */
    private $preuProforma;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Baixa", type="boolean", nullable=true)
     */
    private $baixa;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Marcat", type="boolean", nullable=true)
     */
    private $marcat;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Prod_Principal", type="boolean", nullable=true)
     */
    private $prodPrincipal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Codi_FraProforma", type="string", length=255, nullable=true)
     */
    private $codiFraproforma;


}
