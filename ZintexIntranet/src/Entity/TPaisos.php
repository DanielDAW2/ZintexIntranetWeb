<?php

namespace App\Entity;

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


}
