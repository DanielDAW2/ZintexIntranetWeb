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

    public function getIdObservPlazoEntrega(): ?int
    {
        return $this->idObservPlazoEntrega;
    }

    public function getTitolPlazoentrega(): ?string
    {
        return $this->titolPlazoentrega;
    }

    public function setTitolPlazoentrega(?string $titolPlazoentrega): self
    {
        $this->titolPlazoentrega = $titolPlazoentrega;

        return $this;
    }

    public function getNourgenteTitol(): ?string
    {
        return $this->nourgenteTitol;
    }

    public function setNourgenteTitol(?string $nourgenteTitol): self
    {
        $this->nourgenteTitol = $nourgenteTitol;

        return $this;
    }

    public function getNourgenteDescrip(): ?string
    {
        return $this->nourgenteDescrip;
    }

    public function setNourgenteDescrip(?string $nourgenteDescrip): self
    {
        $this->nourgenteDescrip = $nourgenteDescrip;

        return $this;
    }

    public function getUrgenteTitol(): ?string
    {
        return $this->urgenteTitol;
    }

    public function setUrgenteTitol(?string $urgenteTitol): self
    {
        $this->urgenteTitol = $urgenteTitol;

        return $this;
    }

    public function getUrgenteDescrip1(): ?string
    {
        return $this->urgenteDescrip1;
    }

    public function setUrgenteDescrip1(?string $urgenteDescrip1): self
    {
        $this->urgenteDescrip1 = $urgenteDescrip1;

        return $this;
    }

    public function getUrgenteRecargo(): ?string
    {
        return $this->urgenteRecargo;
    }

    public function setUrgenteRecargo(?string $urgenteRecargo): self
    {
        $this->urgenteRecargo = $urgenteRecargo;

        return $this;
    }

    public function getUrgenteDescrip2(): ?string
    {
        return $this->urgenteDescrip2;
    }

    public function setUrgenteDescrip2(?string $urgenteDescrip2): self
    {
        $this->urgenteDescrip2 = $urgenteDescrip2;

        return $this;
    }

    public function getUrgenteDescrip3(): ?string
    {
        return $this->urgenteDescrip3;
    }

    public function setUrgenteDescrip3(?string $urgenteDescrip3): self
    {
        $this->urgenteDescrip3 = $urgenteDescrip3;

        return $this;
    }

    public function getPedidosupTitol(): ?string
    {
        return $this->pedidosupTitol;
    }

    public function setPedidosupTitol(?string $pedidosupTitol): self
    {
        $this->pedidosupTitol = $pedidosupTitol;

        return $this;
    }

    public function getPedidosupDescrip(): ?string
    {
        return $this->pedidosupDescrip;
    }

    public function setPedidosupDescrip(?string $pedidosupDescrip): self
    {
        $this->pedidosupDescrip = $pedidosupDescrip;

        return $this;
    }

    public function getValleRecargo(): ?string
    {
        return $this->valleRecargo;
    }

    public function setValleRecargo(?string $valleRecargo): self
    {
        $this->valleRecargo = $valleRecargo;

        return $this;
    }


}
