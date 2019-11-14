<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TAutorComanda
 *
 * @ORM\Table(name="t_autor_comanda")
 * @ORM\Entity(repositoryClass="App\Repository\TAutorComandaRepository")
 */
class TAutorComanda
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Autor_Comanda", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAutorComanda;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Autor_Comanda", type="string", length=255, nullable=true)
     */
    private $nomAutorComanda;

    public function getIdAutorComanda(): ?int
    {
        return $this->idAutorComanda;
    }

    public function getNomAutorComanda(): ?string
    {
        return $this->nomAutorComanda;
    }

    public function setNomAutorComanda(?string $nomAutorComanda): self
    {
        $this->nomAutorComanda = $nomAutorComanda;

        return $this;
    }


}
