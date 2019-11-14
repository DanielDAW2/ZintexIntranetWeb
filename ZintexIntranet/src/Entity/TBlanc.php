<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBlanc
 *
 * @ORM\Table(name="t_blanc")
 * @ORM\Entity(repositoryClass="App\Repository\TBlancRepository")
 */
class TBlanc
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Blanc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBlanc;

    public function getIdBlanc(): ?int
    {
        return $this->idBlanc;
    }


}
