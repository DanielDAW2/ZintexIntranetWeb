<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TColors
 *
 * @ORM\Table(name="t_colors")
 * @ORM\Entity(repositoryClass="App\Repository\TColorsRepository")
 */
class TColors
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Color", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idColor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Tipo_Color", type="smallint", nullable=true)
     */
    private $tipoColor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Color", type="string", length=50, nullable=true)
     */
    private $color;

    public function getIdColor(): ?int
    {
        return $this->idColor;
    }

    public function getTipoColor(): ?int
    {
        return $this->tipoColor;
    }

    public function setTipoColor(?int $tipoColor): self
    {
        $this->tipoColor = $tipoColor;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }


}
