<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TFitxersTarifesEsp
 *
 * @ORM\Table(name="t_fitxers_tarifes_esp")
 * @ORM\Entity
 */
class TFitxersTarifesEsp
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Fitxer", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFitxer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Producte", type="string", length=50, nullable=true)
     */
    private $producte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Path_Fitxer", type="string", length=255, nullable=true)
     */
    private $pathFitxer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Fitxer", type="string", length=50, nullable=true)
     */
    private $nomFitxer;

    public function getIdFitxer(): ?int
    {
        return $this->idFitxer;
    }

    public function getProducte(): ?string
    {
        return $this->producte;
    }

    public function setProducte(?string $producte): self
    {
        $this->producte = $producte;

        return $this;
    }

    public function getPathFitxer(): ?string
    {
        return $this->pathFitxer;
    }

    public function setPathFitxer(?string $pathFitxer): self
    {
        $this->pathFitxer = $pathFitxer;

        return $this;
    }

    public function getNomFitxer(): ?string
    {
        return $this->nomFitxer;
    }

    public function setNomFitxer(?string $nomFitxer): self
    {
        $this->nomFitxer = $nomFitxer;

        return $this;
    }


}
