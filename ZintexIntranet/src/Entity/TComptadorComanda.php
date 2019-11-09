<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TComptadorComanda
 *
 * @ORM\Table(name="t_comptador_comanda")
 * @ORM\Entity
 */
class TComptadorComanda
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Comptador_Comanda", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComptadorComanda;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Comptador_Comanda", type="smallint", nullable=true)
     */
    private $comptadorComanda;

    public function getIdComptadorComanda(): ?int
    {
        return $this->idComptadorComanda;
    }

    public function getComptadorComanda(): ?int
    {
        return $this->comptadorComanda;
    }

    public function setComptadorComanda(?int $comptadorComanda): self
    {
        $this->comptadorComanda = $comptadorComanda;

        return $this;
    }


}
