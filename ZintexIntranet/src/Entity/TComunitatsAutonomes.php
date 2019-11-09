<?php

namespace App\Entity;

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


}
