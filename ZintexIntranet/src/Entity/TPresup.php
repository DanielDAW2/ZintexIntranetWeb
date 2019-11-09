<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPresup
 *
 * @ORM\Table(name="t_presup")
 * @ORM\Entity
 */
class TPresup
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Presup", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Num_Presup", type="string", length=50, nullable=true)
     */
    private $numPresup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Client_Presup", type="integer", nullable=true)
     */
    private $clientPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Marca_Cli", type="string", length=255, nullable=true)
     */
    private $marcaCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Persona_Presup", type="string", length=255, nullable=true)
     */
    private $personaPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dades_Client_Presup", type="string", length=1000, nullable=true)
     */
    private $dadesClientPresup;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Presup", type="datetime", nullable=true)
     */
    private $dataPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Text_Data_Presup", type="string", length=50, nullable=true)
     */
    private $textDataPresup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Autor_Presup", type="integer", nullable=true)
     */
    private $autorPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FraProf_Presup", type="string", length=50, nullable=true)
     */
    private $fraprofPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Fra_Presup", type="string", length=50, nullable=true)
     */
    private $fraPresup;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Deneg_Presup", type="boolean", nullable=true)
     */
    private $denegPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NRef1", type="string", length=150, nullable=true)
     */
    private $nref1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NRef2", type="string", length=150, nullable=true)
     */
    private $nref2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TerminiE_Presup", type="string", length=200, nullable=true)
     */
    private $terminiePresup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MetPag_Presup", type="integer", nullable=true)
     */
    private $metpagPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MetPag_Aux", type="string", length=200, nullable=true)
     */
    private $metpagAux;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ObservAux_Presup", type="string", length=1000, nullable=true)
     */
    private $observauxPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ObservVto_Presup", type="string", length=1000, nullable=true)
     */
    private $observvtoPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Titol_PlazoEntrega_Aux", type="string", length=1000, nullable=true)
     */
    private $titolPlazoentregaAux;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NoUrgente_Titol_Aux", type="string", length=1000, nullable=true)
     */
    private $nourgenteTitolAux;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NoUrgente_Descrip_Aux", type="string", length=1000, nullable=true)
     */
    private $nourgenteDescripAux;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Urgente_Titol_Aux", type="string", length=1000, nullable=true)
     */
    private $urgenteTitolAux;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Urgente_Descrip1_Aux", type="string", length=1000, nullable=true)
     */
    private $urgenteDescrip1Aux;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Urgente_Recargo_Aux", type="string", length=1000, nullable=true)
     */
    private $urgenteRecargoAux;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Urgente_Descrip2_Aux", type="string", length=1000, nullable=true)
     */
    private $urgenteDescrip2Aux;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Urgente_Descrip3_Aux", type="string", length=1000, nullable=true)
     */
    private $urgenteDescrip3Aux;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PedidoSup_Titol_Aux", type="string", length=1000, nullable=true)
     */
    private $pedidosupTitolAux;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PedidoSup_Descrip_Aux", type="string", length=1000, nullable=true)
     */
    private $pedidosupDescripAux;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Alta", type="datetime", nullable=true)
     */
    private $dataAlta;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hora_Alta", type="datetime", nullable=true)
     */
    private $horaAlta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Seguiment", type="string", length=1000, nullable=true)
     */
    private $seguiment;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Comercial", type="integer", nullable=true)
     */
    private $comercial;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Total_Presup", type="float", precision=10, scale=0, nullable=true)
     */
    private $totalPresup;


}
