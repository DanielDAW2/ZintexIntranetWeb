<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * TComandaProv
 *
 * @ORM\Table(name="t_comanda_prov")
 * @ORM\Entity
 */
class TComandaProv
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Comanda_Prov", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComandaProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ref_Comanda_Prov", type="string", length=255, nullable=true)
     */
    private $refComandaProv;

    

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descrip_Comanda", type="string", length=255, nullable=true)
     */
    private $descripComanda;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Comanda", type="datetime", nullable=true)
     */
    private $dataComanda;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Autor_Comanda", type="integer", nullable=true)
     */
    private $autorComanda;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Demana_Comanda", type="integer", nullable=true)
     */
    private $demanaComanda;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Facturat", type="boolean", nullable=true)
     */
    private $facturat;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TClients", inversedBy="tComandaProvs")
     * @ORM\JoinColumn(referencedColumnName="Id_Cli")
     */
    private $numProveidorComanda;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TComandaProvAux", mappedBy="numComandaProv", orphanRemoval=true)
     */
    private $tComandaProvAuxes;

    public function __construct()
    {
        $this->tComandaProvAuxes = new ArrayCollection();
    }

    public function getIdComandaProv(): ?int
    {
        return $this->idComandaProv;
    }

    public function getRefComandaProv(): ?string
    {
        return $this->refComandaProv;
    }

    public function setRefComandaProv(?string $refComandaProv): self
    {
        $this->refComandaProv = $refComandaProv;

        return $this;
    }


    public function getDescripComanda(): ?string
    {
        return $this->descripComanda;
    }

    public function setDescripComanda(?string $descripComanda): self
    {
        $this->descripComanda = $descripComanda;

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

    public function getAutorComanda(): ?int
    {
        return $this->autorComanda;
    }

    public function setAutorComanda(?int $autorComanda): self
    {
        $this->autorComanda = $autorComanda;

        return $this;
    }

    public function getDemanaComanda(): ?int
    {
        return $this->demanaComanda;
    }

    public function setDemanaComanda(?int $demanaComanda): self
    {
        $this->demanaComanda = $demanaComanda;

        return $this;
    }

    public function getFacturat(): ?bool
    {
        return $this->facturat;
    }

    public function setFacturat(?bool $facturat): self
    {
        $this->facturat = $facturat;

        return $this;
    }

    public function getNumProveidorComanda(): ?TClients
    {
        return $this->numProveidorComanda;
    }

    public function setNumProveidorComanda(?TClients $numProveidorComanda): self
    {
        $this->numProveidorComanda = $numProveidorComanda;

        return $this;
    }

    /**
     * @return Collection|TComandaProvAux[]
     */
    public function getTComandaProvAuxes(): Collection
    {
        return $this->tComandaProvAuxes;
    }

    public function addTComandaProvAux(TComandaProvAux $tComandaProvAux): self
    {
        if (!$this->tComandaProvAuxes->contains($tComandaProvAux)) {
            $this->tComandaProvAuxes[] = $tComandaProvAux;
            $tComandaProvAux->setNumComandaProv($this);
        }

        return $this;
    }

    public function removeTComandaProvAux(TComandaProvAux $tComandaProvAux): self
    {
        if ($this->tComandaProvAuxes->contains($tComandaProvAux)) {
            $this->tComandaProvAuxes->removeElement($tComandaProvAux);
            // set the owning side to null (unless already changed)
            if ($tComandaProvAux->getNumComandaProv() === $this) {
                $tComandaProvAux->setNumComandaProv(null);
            }
        }

        return $this;
    }


}
