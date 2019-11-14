<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * TGrupGral
 *
 * @ORM\Table(name="t_grup_gral")
 * @ORM\Entity(repositoryClass="App\Repository\TGrupGralRepository")
 */
class TGrupGral
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Grupo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGrupo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Grupo", type="string", length=50, nullable=true)
     */
    private $nomGrupo;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TGrupProducte", mappedBy="grupGral")
     */
    private $tGrupProductes;

    public function __construct()
    {
        $this->tGrupProductes = new ArrayCollection();
    }

    public function getIdGrupo(): ?int
    {
        return $this->idGrupo;
    }

    public function getNomGrupo(): ?string
    {
        return $this->nomGrupo;
    }

    public function setNomGrupo(?string $nomGrupo): self
    {
        $this->nomGrupo = $nomGrupo;

        return $this;
    }

    /**
     * @return Collection|TGrupProducte[]
     */
    public function getTGrupProductes(): Collection
    {
        return $this->tGrupProductes;
    }

    public function addTGrupProducte(TGrupProducte $tGrupProducte): self
    {
        if (!$this->tGrupProductes->contains($tGrupProducte)) {
            $this->tGrupProductes[] = $tGrupProducte;
            $tGrupProducte->setGrupGral($this);
        }

        return $this;
    }

    public function removeTGrupProducte(TGrupProducte $tGrupProducte): self
    {
        if ($this->tGrupProductes->contains($tGrupProducte)) {
            $this->tGrupProductes->removeElement($tGrupProducte);
            // set the owning side to null (unless already changed)
            if ($tGrupProducte->getGrupGral() === $this) {
                $tGrupProducte->setGrupGral(null);
            }
        }

        return $this;
    }


}
