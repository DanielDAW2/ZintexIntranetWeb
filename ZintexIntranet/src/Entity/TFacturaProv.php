<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TFacturaProv
 *
 * @ORM\Table(name="t_factura_prov")
 * @ORM\Entity
 */
class TFacturaProv
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Factura_Prov", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFacturaProv;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Proveidor", type="integer", nullable=true)
     */
    private $proveidor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Num_FraProv", type="string", length=50, nullable=true)
     */
    private $numFraprov;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_FraProv", type="datetime", nullable=true)
     */
    private $dataFraprov;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Vto_FraProv", type="datetime", nullable=true)
     */
    private $dataVtoFraprov;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Entrada_Prov", type="datetime", nullable=true)
     */
    private $dataEntradaProv;

    /**
     * @var float|null
     *
     * @ORM\Column(name="BImp_FraProv", type="float", precision=10, scale=0, nullable=true)
     */
    private $bimpFraprov;

    /**
     * @var float|null
     *
     * @ORM\Column(name="IVA_FraProv", type="float", precision=10, scale=0, nullable=true)
     */
    private $ivaFraprov;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Total_FraProv", type="float", precision=10, scale=0, nullable=true)
     */
    private $totalFraprov;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="IVA_Inclos", type="boolean", nullable=true)
     */
    private $ivaInclos;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Import_Pendent", type="float", precision=10, scale=0, nullable=true)
     */
    private $importPendent;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Import_Pagat", type="float", precision=10, scale=0, nullable=true)
     */
    private $importPagat;

    /**
     * @var float|null
     *
     * @ORM\Column(name="RE_DTO", type="float", precision=10, scale=0, nullable=true)
     */
    private $reDto;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Exent_IVA", type="float", precision=10, scale=0, nullable=true)
     */
    private $exentIva;


}
