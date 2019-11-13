<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * TComercials
 *
 * @ORM\Table(name="t_comercials")
 * @ORM\Entity
 */
class TComercials
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Comercial", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComercial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Codi_Comercial", type="string", length=50, nullable=true)
     */
    private $codiComercial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Comercial", type="string", length=255, nullable=true)
     */
    private $nomComercial;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TPresup", mappedBy="comercial")
     */
    private $tPresups;

    public function __construct()
    {
        $this->tPresups = new ArrayCollection();
    }

    public function getIdComercial(): ?int
    {
        return $this->idComercial;
    }

    public function getCodiComercial(): ?string
    {
        return $this->codiComercial;
    }

    public function setCodiComercial(?string $codiComercial): self
    {
        $this->codiComercial = $codiComercial;

        return $this;
    }

    public function getNomComercial(): ?string
    {
        return $this->nomComercial;
    }

    public function setNomComercial(?string $nomComercial): self
    {
        $this->nomComercial = $nomComercial;

        return $this;
    }

    /**
     * @return Collection|TPresup[]
     */
    public function getTPresups(): Collection
    {
        return $this->tPresups;
    }

    public function addTPresup(TPresup $tPresup): self
    {
        if (!$this->tPresups->contains($tPresup)) {
            $this->tPresups[] = $tPresup;
            $tPresup->setComercial($this);
        }

        return $this;
    }

    public function removeTPresup(TPresup $tPresup): self
    {
        if ($this->tPresups->contains($tPresup)) {
            $this->tPresups->removeElement($tPresup);
            // set the owning side to null (unless already changed)
            if ($tPresup->getComercial() === $this) {
                $tPresup->setComercial(null);
            }
        }

        return $this;
    }


}
