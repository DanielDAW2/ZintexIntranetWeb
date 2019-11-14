<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TProvincies
 *
 * @ORM\Table(name="t_provincies")
 * @ORM\Entity(repositoryClass="App\Repository\TProvinciesRepository")
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

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TComunitatsAutonomes", inversedBy="tProvincies")
     * @ORM\JoinColumn(referencedColumnName="Id_Comunitat", name="Id_Comunitat")
     */
    private $idComunitat;

    public function getIdProvincia(): ?int
    {
        return $this->idProvincia;
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

    public function getIdComunitat(): ?TComunitatsAutonomes
    {
        return $this->idComunitat;
    }

    public function setIdComunitat(?TComunitatsAutonomes $idComunitat): self
    {
        $this->idComunitat = $idComunitat;

        return $this;
    }


}
