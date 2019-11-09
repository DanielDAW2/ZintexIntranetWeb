<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TTractaments
 *
 * @ORM\Table(name="t_tractaments")
 * @ORM\Entity
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


}
