<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TFacturaVtoAux
 *
 * @ORM\Table(name="t_factura_vto_aux")
 * @ORM\Entity
 */
class TFacturaVtoAux
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Factura_Vto_Aux", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFacturaVtoAux;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Id_Factura", type="integer", nullable=true)
     */
    private $idFactura;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Client_Factura", type="integer", nullable=true)
     */
    private $clientFactura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Factura", type="datetime", nullable=true)
     */
    private $dataFactura;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Num_Factura", type="string", length=50, nullable=true)
     */
    private $numFactura;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Total_Fra", type="float", precision=10, scale=0, nullable=true)
     */
    private $totalFra;

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
     * @var int|null
     *
     * @ORM\Column(name="Id_Factura_Vto_1", type="integer", nullable=true)
     */
    private $idFacturaVto1;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Vto_1", type="datetime", nullable=true)
     */
    private $dataVto1;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DataPag_Vto_1", type="datetime", nullable=true)
     */
    private $datapagVto1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Inst_Pag_Vto_1", type="integer", nullable=true)
     */
    private $instPagVto1;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Import_Vto_1", type="float", precision=10, scale=0, nullable=true)
     */
    private $importVto1;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Import_Pag_Vto_1", type="float", precision=10, scale=0, nullable=true)
     */
    private $importPagVto1;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="OKBanc_Vto_1", type="datetime", nullable=true)
     */
    private $okbancVto1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Id_Factura_Vto_2", type="integer", nullable=true)
     */
    private $idFacturaVto2;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Vto_2", type="datetime", nullable=true)
     */
    private $dataVto2;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DataPag_Vto_2", type="datetime", nullable=true)
     */
    private $datapagVto2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Inst_Pag_Vto_2", type="integer", nullable=true)
     */
    private $instPagVto2;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Import_Vto_2", type="float", precision=10, scale=0, nullable=true)
     */
    private $importVto2;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Import_Pag_Vto_2", type="float", precision=10, scale=0, nullable=true)
     */
    private $importPagVto2;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="OKBanc_Vto_2", type="datetime", nullable=true)
     */
    private $okbancVto2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Id_Factura_Vto_3", type="integer", nullable=true)
     */
    private $idFacturaVto3;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Vto_3", type="datetime", nullable=true)
     */
    private $dataVto3;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DataPag_Vto_3", type="datetime", nullable=true)
     */
    private $datapagVto3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Inst_Pag_Vto_3", type="integer", nullable=true)
     */
    private $instPagVto3;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Import_Vto_3", type="float", precision=10, scale=0, nullable=true)
     */
    private $importVto3;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Import_Pag_Vto_3", type="float", precision=10, scale=0, nullable=true)
     */
    private $importPagVto3;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="OKBanc_Vto_3", type="datetime", nullable=true)
     */
    private $okbancVto3;


}
