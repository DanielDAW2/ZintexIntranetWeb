<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TObservPlazoEntrega
 *
 * @ORM\Table(name="t_observ_plazo_entrega")
 * @ORM\Entity
 */
class TObservPlazoEntrega
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Observ_Plazo_Entrega", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idObservPlazoEntrega;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Titol_PlazoEntrega", type="string", length=1000, nullable=true)
     */
    private $titolPlazoentrega;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NoUrgente_Titol", type="string", length=1000, nullable=true)
     */
    private $nourgenteTitol;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NoUrgente_Descrip", type="string", length=1000, nullable=true)
     */
    private $nourgenteDescrip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Urgente_Titol", type="string", length=1000, nullable=true)
     */
    private $urgenteTitol;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Urgente_Descrip1", type="string", length=1000, nullable=true)
     */
    private $urgenteDescrip1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Urgente_Recargo", type="string", length=1000, nullable=true)
     */
    private $urgenteRecargo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Urgente_Descrip2", type="string", length=1000, nullable=true)
     */
    private $urgenteDescrip2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Urgente_Descrip3", type="string", length=1000, nullable=true)
     */
    private $urgenteDescrip3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PedidoSup_Titol", type="string", length=1000, nullable=true)
     */
    private $pedidosupTitol;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PedidoSup_Descrip", type="string", length=1000, nullable=true)
     */
    private $pedidosupDescrip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Valle_Recargo", type="string", length=255, nullable=true)
     */
    private $valleRecargo;


}
