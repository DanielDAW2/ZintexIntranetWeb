<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TProvincies
 *
 * @ORM\Table(name="t_provincies")
 * @ORM\Entity
 */
class TProvincies
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Provincia", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProvincia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Id_Comunitat", type="integer", nullable=true)
     */
    private $idComunitat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Provincia", type="string", length=30, nullable=true)
     */
    private $provincia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodPos", type="string", length=2, nullable=true)
     */
    private $codpos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodTel", type="string", length=3, nullable=true)
     */
    private $codtel;

    public function getIdProvincia(): ?int
    {
        return $this->idProvincia;
    }

    public function getIdComunitat(): ?int
    {
        return $this->idComunitat;
    }

    public function setIdComunitat(?int $idComunitat): self
    {
        $this->idComunitat = $idComunitat;

        return $this;
    }

    public function getProvincia(): ?string
    {
        return $this->provincia;
    }

    public function setProvincia(?string $provincia): self
    {
        $this->provincia = $provincia;

        return $this;
    }

    public function getCodpos(): ?string
    {
        return $this->codpos;
    }

    public function setCodpos(?string $codpos): self
    {
        $this->codpos = $codpos;

        return $this;
    }

    public function getCodtel(): ?string
    {
        return $this->codtel;
    }

    public function setCodtel(?string $codtel): self
    {
        $this->codtel = $codtel;

        return $this;
    }


}
