<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * TTractaments
 *
 * @ORM\Table(name="t_tractaments")
 * @ORM\Entity(repositoryClass="App\Repository\TTractamentsRepository")
 */
class TTractaments
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Tract", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTract;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tractament", type="string", length=50, nullable=true)
     */
    private $tractament;

    /**
     *  @ORM\OneToMany(targetEntity="TClients", mappedBy="tractCli")
     * @ORM\JoinColumn(nullable=true)
     */
    private $client;

    function __construct()
    {
        $this->client = new ArrayCollection();
    }

    public function getIdTract(): ?int
    {
        return $this->idTract;
    }

    public function getTractament(): ?string
    {
        return $this->tractament;
    }

    public function setTractament(?string $tractament): self
    {
        $this->tractament = $tractament;

        return $this;
    }

    /**
     * @return Collection|TClients[]
     */
    public function getClient(): Collection
    {
        return $this->client;
    }

    public function addClient(TClients $client): self
    {
        if (!$this->client->contains($client)) {
            $this->client[] = $client;
            $client->setTractCli($this);
        }

        return $this;
    }

    public function removeClient(TClients $client): self
    {
        if ($this->client->contains($client)) {
            $this->client->removeElement($client);
            // set the owning side to null (unless already changed)
            if ($client->getTractCli() === $this) {
                $client->setTractCli(null);
            }
        }

        return $this;
    }


}
