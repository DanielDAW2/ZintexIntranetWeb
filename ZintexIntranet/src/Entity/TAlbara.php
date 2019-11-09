<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TAlbara
 *
 * @ORM\Table(name="t_albara")
 * @ORM\Entity
 */
class TAlbara
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Albara", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAlbara;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Client_Albara", type="integer", nullable=true)
     */
    private $clientAlbara;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descrip_Client_Albara", type="string", length=255, nullable=true)
     */
    private $descripClientAlbara;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Client_Albara", type="string", length=255, nullable=true)
     */
    private $nomClientAlbara;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Direccio_Client_Albara", type="string", length=255, nullable=true)
     */
    private $direccioClientAlbara;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Num_Albara", type="string", length=255, nullable=true)
     */
    private $numAlbara;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Albara", type="datetime", nullable=true)
     */
    private $dataAlbara;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Sortida_Albara", type="datetime", nullable=true)
     */
    private $dataSortidaAlbara;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NRef_Albara", type="string", length=255, nullable=true)
     */
    private $nrefAlbara;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SRef_Albara", type="string", length=255, nullable=true)
     */
    private $srefAlbara;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Facturable_Albara", type="integer", nullable=true)
     */
    private $facturableAlbara;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NumFraProforma_Albara", type="string", length=255, nullable=true)
     */
    private $numfraproformaAlbara;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NumFactura_Albara", type="string", length=255, nullable=true)
     */
    private $numfacturaAlbara;


}
