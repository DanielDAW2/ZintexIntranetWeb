<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TGrupGral
 *
 * @ORM\Table(name="t_grup_gral")
 * @ORM\Entity
 */
class TGrupGral
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Grupo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGrupo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Grupo", type="string", length=50, nullable=true)
     */
    private $nomGrupo;

    public function getIdGrupo(): ?int
    {
        return $this->idGrupo;
    }

    public function getNomGrupo(): ?string
    {
        return $this->nomGrupo;
    }

    public function setNomGrupo(?string $nomGrupo): self
    {
        $this->nomGrupo = $nomGrupo;

        return $this;
    }


}
