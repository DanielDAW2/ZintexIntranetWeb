<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * TComunitatsAutonomes
 *
 * @ORM\Table(name="t_comunitats_autonomes")
 * @ORM\Entity
 */
class TComunitatsAutonomes
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Comunitat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComunitat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Comunitat", type="string", length=50, nullable=true)
     */
    private $comunitat;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TProvincies", mappedBy="idComunitat")
     */
    private $tProvincies;

    public function __construct()
    {
        $this->tProvincies = new ArrayCollection();
    }

    public function getIdComunitat(): ?int
    {
        return $this->idComunitat;
    }

    public function getComunitat(): ?string
    {
        return $this->comunitat;
    }

    public function setComunitat(?string $comunitat): self
    {
        $this->comunitat = $comunitat;

        return $this;
    }

    /**
     * @return Collection|TProvincies[]
     */
    public function getTProvincies(): Collection
    {
        return $this->tProvincies;
    }

    public function addTProvincy(TProvincies $tProvincy): self
    {
        if (!$this->tProvincies->contains($tProvincy)) {
            $this->tProvincies[] = $tProvincy;
            $tProvincy->setIdComunitat($this);
        }

        return $this;
    }

    public function removeTProvincy(TProvincies $tProvincy): self
    {
        if ($this->tProvincies->contains($tProvincy)) {
            $this->tProvincies->removeElement($tProvincy);
            // set the owning side to null (unless already changed)
            if ($tProvincy->getIdComunitat() === $this) {
                $tProvincy->setIdComunitat(null);
            }
        }

        return $this;
    }


}
