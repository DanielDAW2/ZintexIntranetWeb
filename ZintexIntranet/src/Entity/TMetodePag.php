<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * TMetodePag
 *
 * @ORM\Table(name="t_metode_pag")
 * @ORM\Entity(repositoryClass="App\Repository\TMetodePagRepository")
 */
class TMetodePag
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Metode", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMetode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Metode", type="string", length=5, nullable=true)
     */
    private $metode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Metode", type="string", length=20, nullable=true)
     */
    private $nomMetode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Temps", type="integer", nullable=true)
     */
    private $temps;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descripcio", type="string", length=1000, nullable=true)
     */
    private $descripcio;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TPresup", mappedBy="metpagPresup")
     */
    private $tPresups;

    public function __construct()
    {
        $this->tPresups = new ArrayCollection();
    }

    public function getIdMetode(): ?int
    {
        return $this->idMetode;
    }

    public function getMetode(): ?string
    {
        return $this->metode;
    }

    public function setMetode(?string $metode): self
    {
        $this->metode = $metode;

        return $this;
    }

    public function getNomMetode(): ?string
    {
        return $this->nomMetode;
    }

    public function setNomMetode(?string $nomMetode): self
    {
        $this->nomMetode = $nomMetode;

        return $this;
    }

    public function getTemps(): ?int
    {
        return $this->temps;
    }

    public function setTemps(?int $temps): self
    {
        $this->temps = $temps;

        return $this;
    }

    public function getDescripcio(): ?string
    {
        return $this->descripcio;
    }

    public function setDescripcio(?string $descripcio): self
    {
        $this->descripcio = $descripcio;

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
            $tPresup->setMetpagPresup($this);
        }

        return $this;
    }

    public function removeTPresup(TPresup $tPresup): self
    {
        if ($this->tPresups->contains($tPresup)) {
            $this->tPresups->removeElement($tPresup);
            // set the owning side to null (unless already changed)
            if ($tPresup->getMetpagPresup() === $this) {
                $tPresup->setMetpagPresup(null);
            }
        }

        return $this;
    }


}
