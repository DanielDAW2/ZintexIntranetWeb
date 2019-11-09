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

    public function getIdInstPag(): ?int
    {
        return $this->idInstPag;
    }

    public function getCodInstPag(): ?string
    {
        return $this->codInstPag;
    }

    public function setCodInstPag(?string $codInstPag): self
    {
        $this->codInstPag = $codInstPag;

        return $this;
    }

    public function getNomInstPag(): ?string
    {
        return $this->nomInstPag;
    }

    public function setNomInstPag(?string $nomInstPag): self
    {
        $this->nomInstPag = $nomInstPag;

        return $this;
    }

    public function getDescripcioInstrument(): ?string
    {
        return $this->descripcioInstrument;
    }

    public function setDescripcioInstrument(?string $descripcioInstrument): self
    {
        $this->descripcioInstrument = $descripcioInstrument;

        return $this;
    }

    public function getBaixa(): ?bool
    {
        return $this->baixa;
    }

    public function setBaixa(?bool $baixa): self
    {
        $this->baixa = $baixa;

        return $this;
    }


}
