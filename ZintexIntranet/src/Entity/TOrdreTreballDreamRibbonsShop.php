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

    public function getIdOtDrs(): ?int
    {
        return $this->idOtDrs;
    }

    public function getComanda(): ?string
    {
        return $this->comanda;
    }

    public function setComanda(?string $comanda): self
    {
        $this->comanda = $comanda;

        return $this;
    }

    public function getDataComanda(): ?\DateTimeInterface
    {
        return $this->dataComanda;
    }

    public function setDataComanda(?\DateTimeInterface $dataComanda): self
    {
        $this->dataComanda = $dataComanda;

        return $this;
    }

    public function getDataEntrega(): ?\DateTimeInterface
    {
        return $this->dataEntrega;
    }

    public function setDataEntrega(?\DateTimeInterface $dataEntrega): self
    {
        $this->dataEntrega = $dataEntrega;

        return $this;
    }


}
