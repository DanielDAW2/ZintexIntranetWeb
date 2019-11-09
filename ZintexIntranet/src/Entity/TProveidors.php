<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TProveidors
 *
 * @ORM\Table(name="t_proveidors")
 * @ORM\Entity
 */
class TProveidors
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Prov", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Codi_Prov", type="string", length=50, nullable=true)
     */
    private $codiProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NIF_Prov", type="string", length=50, nullable=true)
     */
    private $nifProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Proveidor", type="string", length=75, nullable=true)
     */
    private $proveidor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Proveidor_Com", type="string", length=75, nullable=true)
     */
    private $proveidorCom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Tract_Prov", type="integer", nullable=true)
     */
    private $tractProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Prov", type="string", length=50, nullable=true)
     */
    private $nomProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cognom_Prov", type="string", length=50, nullable=true)
     */
    private $cognomProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Carrec_Prov", type="string", length=50, nullable=true)
     */
    private $carrecProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dir_Prov", type="string", length=1000, nullable=true)
     */
    private $dirProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodP_Prov", type="string", length=10, nullable=true)
     */
    private $codpProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pob_Prov", type="string", length=50, nullable=true)
     */
    private $pobProv;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Pais_Prov", type="integer", nullable=true)
     */
    private $paisProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tel_Prov", type="string", length=12, nullable=true)
     */
    private $telProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Fax_Prov", type="string", length=12, nullable=true)
     */
    private $faxProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Mob_Prov", type="string", length=12, nullable=true)
     */
    private $mobProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email_Prov", type="string", length=100, nullable=true)
     */
    private $emailProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Web_Prov", type="string", length=50, nullable=true)
     */
    private $webProv;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Met_Pag", type="integer", nullable=true)
     */
    private $metPag;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Inst_Pag", type="integer", nullable=true)
     */
    private $instPag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dia_Pag", type="string", length=2, nullable=true)
     */
    private $diaPag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_Prov", type="string", length=20, nullable=true)
     */
    private $ccProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Observacions_Prov", type="string", length=2000, nullable=true)
     */
    private $observacionsProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Activitat_Prov", type="string", length=1000, nullable=true)
     */
    private $activitatProv;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Mailing", type="boolean", nullable=true)
     */
    private $mailing;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Stock", type="boolean", nullable=true)
     */
    private $stock;


}
