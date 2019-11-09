<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBancs
 *
 * @ORM\Table(name="t_bancs")
 * @ORM\Entity
 */
class TBancs
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Banc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBanc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Codi_Banc", type="string", length=4, nullable=true)
     */
    private $codiBanc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Banc", type="string", length=200, nullable=true)
     */
    private $banc;

    public function getIdBanc(): ?int
    {
        return $this->idBanc;
    }

    public function getCodiBanc(): ?string
    {
        return $this->codiBanc;
    }

    public function setCodiBanc(?string $codiBanc): self
    {
        $this->codiBanc = $codiBanc;

        return $this;
    }

    public function getBanc(): ?string
    {
        return $this->banc;
    }

    public function setBanc(?string $banc): self
    {
        $this->banc = $banc;

        return $this;
    }


}
