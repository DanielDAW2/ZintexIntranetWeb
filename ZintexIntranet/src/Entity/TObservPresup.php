<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TObservPresup
 *
 * @ORM\Table(name="t_observ_presup")
 * @ORM\Entity
 */
class TObservPresup
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Observ_Presup", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idObservPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Observ_Presup", type="string", length=2000, nullable=true)
     */
    private $observPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Observ_Presup_Vto", type="string", length=1000, nullable=true)
     */
    private $observPresupVto;

    public function getIdObservPresup(): ?int
    {
        return $this->idObservPresup;
    }

    public function getObservPresup(): ?string
    {
        return $this->observPresup;
    }

    public function setObservPresup(?string $observPresup): self
    {
        $this->observPresup = $observPresup;

        return $this;
    }

    public function getObservPresupVto(): ?string
    {
        return $this->observPresupVto;
    }

    public function setObservPresupVto(?string $observPresupVto): self
    {
        $this->observPresupVto = $observPresupVto;

        return $this;
    }


}
