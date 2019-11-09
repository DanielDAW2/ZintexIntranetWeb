<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TActivitatClient
 *
 * @ORM\Table(name="t_activitat_client")
 * @ORM\Entity
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


}
