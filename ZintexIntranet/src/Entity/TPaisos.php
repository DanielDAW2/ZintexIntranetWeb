<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * TPaisos
 *
 * @ORM\Table(name="t_paisos")
 * @ORM\Entity
 */
class TPaisos
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Pais", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPais;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pais", type="string", length=35, nullable=true)
     */
    private $pais;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Preftel_Pais", type="string", length=4, nullable=true)
     */
    private $preftelPais;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TClients", mappedBy="paisentCli")
     */
    private $TClients;


    public function __construct()
    {
        $this->tClients = new ArrayCollection();
        $this->TClient = new ArrayCollection();
    }

    public function getIdPais(): ?int
    {
        return $this->idPais;
    }

    public function getPais(): ?string
    {
        return $this->pais;
    }

    public function setPais(?string $pais): self
    {
        $this->pais = $pais;

        return $this;
    }

    public function getPreftelPais(): ?string
    {
        return $this->preftelPais;
    }

    public function setPreftelPais(?string $preftelPais): self
    {
        $this->preftelPais = $preftelPais;

        return $this;
    }

    /**
     * @return Collection|TClients[]
     */
    public function getTClients(): Collection
    {
        return $this->TClients;
    }

    public function addTClient(TClients $tClient): self
    {
        if (!$this->TClients->contains($tClient)) {
            $this->TClients[] = $tClient;
            $tClient->setPaisentCli($this);
        }

        return $this;
    }

    public function removeTClient(TClients $tClient): self
    {
        if ($this->TClients->contains($tClient)) {
            $this->TClients->removeElement($tClient);
            // set the owning side to null (unless already changed)
            if ($tClient->getPaisentCli() === $this) {
                $tClient->setPaisentCli(null);
            }
        }

        return $this;
    }



}
