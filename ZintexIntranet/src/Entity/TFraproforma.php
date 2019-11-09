<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TFraproforma
 *
 * @ORM\Table(name="t_fraproforma")
 * @ORM\Entity
 */
class TFraproforma
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_FraProf", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFraprof;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Client_FraProf", type="integer", nullable=true)
     */
    private $clientFraprof;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Persona_FraProf", type="string", length=50, nullable=true)
     */
    private $personaFraprof;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_FraProf", type="datetime", nullable=true)
     */
    private $dataFraprof;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Num_FraProf", type="string", length=255, nullable=true)
     */
    private $numFraprof;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ref_Presup", type="string", length=255, nullable=true)
     */
    private $refPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ref_Albara", type="string", length=255, nullable=true)
     */
    private $refAlbara;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ref_Factura", type="string", length=255, nullable=true)
     */
    private $refFactura;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NRef", type="string", length=255, nullable=true)
     */
    private $nref;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SRef", type="string", length=255, nullable=true)
     */
    private $sref;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Valorada", type="boolean", nullable=true)
     */
    private $valorada = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Base_Imp", type="float", precision=10, scale=0, nullable=true)
     */
    private $baseImp;

    /**
     * @var float|null
     *
     * @ORM\Column(name="IVA", type="float", precision=10, scale=0, nullable=true)
     */
    private $iva;

    /**
     * @var float|null
     *
     * @ORM\Column(name="REQ", type="float", precision=10, scale=0, nullable=true)
     */
    private $req;

    /**
     * @var float|null
     *
     * @ORM\Column(name="IVA_VAR", type="float", precision=10, scale=0, nullable=true)
     */
    private $ivaVar;

    /**
     * @var float|null
     *
     * @ORM\Column(name="REQ_VAR", type="float", precision=10, scale=0, nullable=true)
     */
    private $reqVar;

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
     * @ORM\Column(name="Metode_Pag", type="integer", nullable=true)
     */
    private $metodePag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MetPag_Aux", type="string", length=1000, nullable=true)
     */
    private $metpagAux;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Observ_FraProf", type="string", length=1200, nullable=true)
     */
    private $observFraprof;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Seguiment", type="string", length=1000, nullable=true)
     */
    private $seguiment;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Autor", type="integer", nullable=true)
     */
    private $numAutor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Autor_Proforma", type="integer", nullable=true)
     */
    private $numAutorProforma;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Gravacio", type="datetime", nullable=true)
     */
    private $dataGravacio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hora_Gravacio", type="datetime", nullable=true)
     */
    private $horaGravacio;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Acceptada", type="boolean", nullable=true)
     */
    private $acceptada;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Acceptacio", type="datetime", nullable=true)
     */
    private $dataAcceptacio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hora_Acceptacio", type="datetime", nullable=true)
     */
    private $horaAcceptacio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Ultim_Pagament", type="datetime", nullable=true)
     */
    private $ultimPagament;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Facturar", type="boolean", nullable=true)
     */
    private $facturar = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Produccio", type="datetime", nullable=true)
     */
    private $dataProduccio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hora_Produccio", type="datetime", nullable=true)
     */
    private $horaProduccio;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Produccio", type="boolean", nullable=true)
     */
    private $produccio = '0';


}
