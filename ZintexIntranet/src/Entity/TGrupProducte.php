<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * TGrupProducte
 *
 * @ORM\Table(name="t_grup_producte")
 * @ORM\Entity(repositoryClass="App\Repository\TGrupProducteRepository")
 */
class TGrupProducte
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_GrupProducte", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGrupproducte;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Grup_Producte", type="integer", nullable=true)
     */
    private $numGrupProducte;



    /**
     * @var string|null
     *
     * @ORM\Column(name="Descrip_Grup_Producte", type="string", length=50, nullable=true)
     */
    private $descripGrupProducte;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Admet_Marcatge", type="boolean", nullable=true)
     */
    private $admetMarcatge;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TGrupGral", inversedBy="tGrupProductes")
     * @ORM\JoinColumn(referencedColumnName="Id_Grupo", name="Grup_Gral")
     */
    private $grupGral;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TOrdreTreball", mappedBy="grupProducte")
     */
    private $tOrdreTreballs;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TProductes", mappedBy="grupProducte")
     */
    private $tProductes;

    public function __construct()
    {
        $this->tOrdreTreballs = new ArrayCollection();
        $this->tProductes = new ArrayCollection();
    }

    public function getIdGrupproducte(): ?int
    {
        return $this->idGrupproducte;
    }

    public function getNumGrupProducte(): ?int
    {
        return $this->numGrupProducte;
    }

    public function setNumGrupProducte(?int $numGrupProducte): self
    {
        $this->numGrupProducte = $numGrupProducte;

        return $this;
    }



    public function getDescripGrupProducte(): ?string
    {
        return $this->descripGrupProducte;
    }

    public function setDescripGrupProducte(?string $descripGrupProducte): self
    {
        $this->descripGrupProducte = $descripGrupProducte;

        return $this;
    }

    public function getAdmetMarcatge(): ?bool
    {
        return $this->admetMarcatge;
    }

    public function setAdmetMarcatge(?bool $admetMarcatge): self
    {
        $this->admetMarcatge = $admetMarcatge;

        return $this;
    }

    public function getGrupGral(): ?TGrupGral
    {
        return $this->grupGral;
    }

    public function setGrupGral(?TGrupGral $grupGral): self
    {
        $this->grupGral = $grupGral;

        return $this;
    }

    /**
     * @return Collection|TOrdreTreball[]
     */
    public function getTOrdreTreballs(): Collection
    {
        return $this->tOrdreTreballs;
    }

    public function addTOrdreTreball(TOrdreTreball $tOrdreTreball): self
    {
        if (!$this->tOrdreTreballs->contains($tOrdreTreball)) {
            $this->tOrdreTreballs[] = $tOrdreTreball;
            $tOrdreTreball->setGrupProducte($this);
        }

        return $this;
    }

    public function removeTOrdreTreball(TOrdreTreball $tOrdreTreball): self
    {
        if ($this->tOrdreTreballs->contains($tOrdreTreball)) {
            $this->tOrdreTreballs->removeElement($tOrdreTreball);
            // set the owning side to null (unless already changed)
            if ($tOrdreTreball->getGrupProducte() === $this) {
                $tOrdreTreball->setGrupProducte(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TProductes[]
     */
    public function getTProductes(): Collection
    {
        return $this->tProductes;
    }

    public function addTProducte(TProductes $tProducte): self
    {
        if (!$this->tProductes->contains($tProducte)) {
            $this->tProductes[] = $tProducte;
            $tProducte->setGrupProducte($this);
        }

        return $this;
    }

    public function removeTProducte(TProductes $tProducte): self
    {
        if ($this->tProductes->contains($tProducte)) {
            $this->tProductes->removeElement($tProducte);
            // set the owning side to null (unless already changed)
            if ($tProducte->getGrupProducte() === $this) {
                $tProducte->setGrupProducte(null);
            }
        }

        return $this;
    }


}
