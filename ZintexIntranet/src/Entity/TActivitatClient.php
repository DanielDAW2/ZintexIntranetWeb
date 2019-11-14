<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * TActivitatClient
 *
 * @ORM\Table(name="t_activitat_client")
 * @ORM\Entity(repositoryClass="App\Repository\TActivitatClientRepository")
 */
class TActivitatClient
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Codi_Activitat", type="integer", nullable=true)
     */
    private $codiActivitat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tipus_Client", type="string", length=255, nullable=true)
     */
    private $tipusClient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Coef_Recarrec", type="string", length=255, nullable=true)
     */
    private $coefRecarrec;

    /**
     * Undocumented variable
     *
     * @ORM\OneToMany(targetEntity="TClients", mappedBy="activitat1")
     * @ORM\JoinColumn(nullable=true)
     */
    private $activitatClient;

    public function __construct()
    {
        $this->activitatClient = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodiActivitat(): ?int
    {
        return $this->codiActivitat;
    }

    public function setCodiActivitat(?int $codiActivitat): self
    {
        $this->codiActivitat = $codiActivitat;

        return $this;
    }

    public function getTipusClient(): ?string
    {
        return $this->tipusClient;
    }

    public function setTipusClient(?string $tipusClient): self
    {
        $this->tipusClient = $tipusClient;

        return $this;
    }

    public function getCoefRecarrec(): ?string
    {
        return $this->coefRecarrec;
    }

    public function setCoefRecarrec(?string $coefRecarrec): self
    {
        $this->coefRecarrec = $coefRecarrec;

        return $this;
    }

    /**
     * @return Collection|TClients[]
     */
    public function getActivitatClient(): Collection
    {
        return $this->activitatClient;
    }

    public function addActivitatClient(TClients $activitatClient): self
    {
        if (!$this->activitatClient->contains($activitatClient)) {
            $this->activitatClient[] = $activitatClient;
            $activitatClient->setActivitat1($this);
        }

        return $this;
    }

    public function removeActivitatClient(TClients $activitatClient): self
    {
        if ($this->activitatClient->contains($activitatClient)) {
            $this->activitatClient->removeElement($activitatClient);
            // set the owning side to null (unless already changed)
            if ($activitatClient->getActivitat1() === $this) {
                $activitatClient->setActivitat1(null);
            }
        }

        return $this;
    }


}
