<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TObservProforma
 *
 * @ORM\Table(name="t_observ_proforma")
 * @ORM\Entity(repositoryClass="App\Repository\TObservProformaRepository")
 */
class TObservProforma
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Observ_Proforma", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idObservProforma;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Observ_Proforma", type="string", length=1000, nullable=true)
     */
    private $observProforma;

    public function getIdObservProforma(): ?int
    {
        return $this->idObservProforma;
    }

    public function getObservProforma(): ?string
    {
        return $this->observProforma;
    }

    public function setObservProforma(?string $observProforma): self
    {
        $this->observProforma = $observProforma;

        return $this;
    }


}
