<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TInstrumentPag
 *
 * @ORM\Table(name="t_instrument_pag")
 * @ORM\Entity
 */
class TInstrumentPag
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Inst_Pag", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idInstPag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_Inst_Pag", type="string", length=6, nullable=true)
     */
    private $codInstPag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Inst_Pag", type="string", length=40, nullable=true)
     */
    private $nomInstPag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descripcio_Instrument", type="string", length=1000, nullable=true)
     */
    private $descripcioInstrument;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Baixa", type="boolean", nullable=true)
     */
    private $baixa;


}
