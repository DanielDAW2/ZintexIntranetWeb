<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TFacturaProvVto
 *
 * @ORM\Table(name="t_factura_prov_vto")
 * @ORM\Entity
 */
class TFacturaProvVto
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Factura_Prov_Vto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFacturaProvVto;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_FraProv_Vto", type="integer", nullable=true)
     */
    private $numFraprovVto;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_FraProv_Vto", type="datetime", nullable=true)
     */
    private $dataFraprovVto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Concepte_FraProv_Vto", type="string", length=200, nullable=true)
     */
    private $concepteFraprovVto;

    /**
     * @var int|null
     *
     * @ORM\Column(name="InstPag_FraProv_Vto", type="integer", nullable=true)
     */
    private $instpagFraprovVto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="InstPag_Aux_FraProv_Vto", type="string", length=255, nullable=true)
     */
    private $instpagAuxFraprovVto;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Import_FraProv_Vto", type="float", precision=10, scale=0, nullable=true)
     */
    private $importFraprovVto;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DataPag_FraProv_Vto", type="datetime", nullable=true)
     */
    private $datapagFraprovVto;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="OKBanc_FraProv_Vto", type="datetime", nullable=true)
     */
    private $okbancFraprovVto;


}
