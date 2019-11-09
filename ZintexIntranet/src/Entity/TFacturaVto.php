<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TFacturaVto
 *
 * @ORM\Table(name="t_factura_vto")
 * @ORM\Entity
 */
class TFacturaVto
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Factura_Vto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFacturaVto;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Factura", type="integer", nullable=true)
     */
    private $numFactura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Vto", type="datetime", nullable=true)
     */
    private $dataVto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Concepte_Vto", type="string", length=200, nullable=true)
     */
    private $concepteVto;

    /**
     * @var int|null
     *
     * @ORM\Column(name="InstPag", type="integer", nullable=true)
     */
    private $instpag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InstPag_Aux", type="string", length=1000, nullable=true)
     */
    private $instpagAux;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Import_Vto", type="float", precision=10, scale=0, nullable=true)
     */
    private $importVto;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DataPag_Vto", type="datetime", nullable=true)
     */
    private $datapagVto;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ImportPag_Vto", type="float", precision=10, scale=0, nullable=true)
     */
    private $importpagVto;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="OKBanc_Vto", type="datetime", nullable=true)
     */
    private $okbancVto;


}
