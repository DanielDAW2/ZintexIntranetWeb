<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TOrdreTreball
 *
 * @ORM\Table(name="t_ordre_treball")
 * @ORM\Entity
 */
class TOrdreTreball
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Ordre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdre;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Client", type="integer", nullable=true)
     */
    private $numClient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Client", type="string", length=150, nullable=true)
     */
    private $nomClient;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_FraProforma", type="integer", nullable=true)
     */
    private $numFraproforma;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Num_SubOrdre", type="string", length=255, nullable=true)
     */
    private $numSubordre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Campanya", type="string", length=255, nullable=true)
     */
    private $campanya;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Grup_Producte", type="integer", nullable=true)
     */
    private $grupProducte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descrip_Ordre_Treball", type="string", length=255, nullable=true)
     */
    private $descripOrdreTreball;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Proveidor", type="string", length=100, nullable=true)
     */
    private $proveidor;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Entrega_Disseny", type="datetime", nullable=true)
     */
    private $entregaDisseny;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Sortida_Calandra", type="datetime", nullable=true)
     */
    private $sortidaCalandra;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Sortida_Impressio", type="datetime", nullable=true)
     */
    private $sortidaImpressio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Sortida_Produccio", type="datetime", nullable=true)
     */
    private $sortidaProduccio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Entrega_Client", type="datetime", nullable=true)
     */
    private $entregaClient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dissenyador", type="string", length=50, nullable=true)
     */
    private $dissenyador;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Posta_Marxa", type="string", length=50, nullable=true)
     */
    private $postaMarxa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Calandra", type="string", length=50, nullable=true)
     */
    private $calandra;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Anonim", type="boolean", nullable=true)
     */
    private $anonim;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="AdreÃ§a_Entrega", type="boolean", nullable=true)
     */
    private $adreã§aEntrega;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Recull_Client", type="boolean", nullable=true)
     */
    private $recullClient;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Ports_Deguts", type="boolean", nullable=true)
     */
    private $portsDeguts;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Servei_Urgent_8_30", type="boolean", nullable=true)
     */
    private $serveiUrgent830;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Servei_Urgent_10", type="boolean", nullable=true)
     */
    private $serveiUrgent10;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Servei_Urgent_12", type="boolean", nullable=true)
     */
    private $serveiUrgent12;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Servei_Urgent_14", type="boolean", nullable=true)
     */
    private $serveiUrgent14;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Observacions_Disseny", type="string", length=255, nullable=true)
     */
    private $observacionsDisseny;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Observacions_Produccio", type="string", length=255, nullable=true)
     */
    private $observacionsProduccio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Persona", type="string", length=50, nullable=true)
     */
    private $persona;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Resum_Unitats", type="string", length=255, nullable=true)
     */
    private $resumUnitats;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Resum_Productes", type="string", length=255, nullable=true)
     */
    private $resumProductes;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Unitats", type="integer", nullable=true)
     */
    private $unitats;


}
