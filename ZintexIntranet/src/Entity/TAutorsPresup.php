<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * TAutorsPresup
 *
 * @ORM\Table(name="t_autors_presup")
 * @ORM\Entity(repositoryClass="App\Repository\TAutorsPresupRepository")
 */
class TAutorsPresup
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_AutPresup", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAutpresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cod_AutPresup", type="string", length=255, nullable=true)
     */
    private $codAutpresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descrip_AutPresup", type="string", length=255, nullable=true)
     */
    private $descripAutpresup;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Baixa", type="boolean", nullable=true)
     */
    private $baixa;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TFraProforma", mappedBy="numAutor")
     */
    private $tFraProformas;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TPresup", mappedBy="autorPresup")
     */
    private $tPresups;

    public function __construct()
    {
        $this->tFraProformas = new ArrayCollection();
        $this->tPresups = new ArrayCollection();
    }

    public function getIdAutpresup(): ?int
    {
        return $this->idAutpresup;
    }

    public function getCodAutpresup(): ?string
    {
        return $this->codAutpresup;
    }

    public function setCodAutpresup(?string $codAutpresup): self
    {
        $this->codAutpresup = $codAutpresup;

        return $this;
    }

    public function getDescripAutpresup(): ?string
    {
        return $this->descripAutpresup;
    }

    public function setDescripAutpresup(?string $descripAutpresup): self
    {
        $this->descripAutpresup = $descripAutpresup;

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

    /**
     * @return Collection|TFraProforma[]
     */
    public function getTFraProformas(): Collection
    {
        return $this->tFraProformas;
    }

    public function addTFraProforma(TFraProforma $tFraProforma): self
    {
        if (!$this->tFraProformas->contains($tFraProforma)) {
            $this->tFraProformas[] = $tFraProforma;
            $tFraProforma->setNumAutor($this);
        }

        return $this;
    }

    public function removeTFraProforma(TFraProforma $tFraProforma): self
    {
        if ($this->tFraProformas->contains($tFraProforma)) {
            $this->tFraProformas->removeElement($tFraProforma);
            // set the owning side to null (unless already changed)
            if ($tFraProforma->getNumAutor() === $this) {
                $tFraProforma->setNumAutor(null);
            }
        }

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
            $tPresup->setAutorPresup($this);
        }

        return $this;
    }

    public function removeTPresup(TPresup $tPresup): self
    {
        if ($this->tPresups->contains($tPresup)) {
            $this->tPresups->removeElement($tPresup);
            // set the owning side to null (unless already changed)
            if ($tPresup->getAutorPresup() === $this) {
                $tPresup->setAutorPresup(null);
            }
        }

        return $this;
    }


}
