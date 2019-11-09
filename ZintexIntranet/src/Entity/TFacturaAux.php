<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TFacturaAux
 *
 * @ORM\Table(name="t_factura_aux")
 * @ORM\Entity
 */
class TFacturaAux
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Factura_Aux", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFacturaAux;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Factura", type="integer", nullable=true)
     */
    private $numFactura;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Linia", type="integer", nullable=true)
     */
    private $numLinia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CodProd_Factura", type="integer", nullable=true)
     */
    private $codprodFactura;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DescripProd_Factura", type="string", length=1000, nullable=true)
     */
    private $descripprodFactura;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CodParamImp_Factura", type="integer", nullable=true)
     */
    private $codparamimpFactura;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DescripParamImp_Factura", type="string", length=255, nullable=true)
     */
    private $descripparamimpFactura;

    /**
     * @var float|null
     *
     * @ORM\Column(name="NumUnit_Factura", type="float", precision=10, scale=0, nullable=true)
     */
    private $numunitFactura;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PreuUnit_Factura", type="float", precision=10, scale=0, nullable=true)
     */
    private $preuunitFactura;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Preu_Factura", type="float", precision=10, scale=0, nullable=true)
     */
    private $preuFactura;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Baixa", type="boolean", nullable=true)
     */
    private $baixa;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Grup_Producte", type="integer", nullable=true)
     */
    private $grupProducte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Codi_Factura", type="string", length=255, nullable=true)
     */
    private $codiFactura;


}
