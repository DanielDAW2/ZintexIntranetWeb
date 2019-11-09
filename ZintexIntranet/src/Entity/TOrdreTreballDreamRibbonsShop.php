<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TOrdreTreballDreamRibbonsShop
 *
 * @ORM\Table(name="t_ordre_treball_dream_ribbons_ shop")
 * @ORM\Entity
 */
class TOrdreTreballDreamRibbonsShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_OT_DRS", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOtDrs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Comanda", type="string", length=255, nullable=true)
     */
    private $comanda;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Comanda", type="datetime", nullable=true)
     */
    private $dataComanda;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Entrega", type="datetime", nullable=true)
     */
    private $dataEntrega;


}
