<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TParamimp
 *
 * @ORM\Table(name="t_paramimp")
 * @ORM\Entity(repositoryClass="App\Repository\TParamimpRepository")
 */
class TParamimp
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_ParamImp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idParamimp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Codi_ParamImp", type="string", length=50, nullable=true)
     */
    private $codiParamimp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_ParamImp", type="string", length=50, nullable=true)
     */
    private $nomParamimp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_ParamImp_Cat", type="string", length=50, nullable=true)
     */
    private $nomParamimpCat;

    public function getIdParamimp(): ?int
    {
        return $this->idParamimp;
    }

    public function getCodiParamimp(): ?string
    {
        return $this->codiParamimp;
    }

    public function setCodiParamimp(?string $codiParamimp): self
    {
        $this->codiParamimp = $codiParamimp;

        return $this;
    }

    public function getNomParamimp(): ?string
    {
        return $this->nomParamimp;
    }

    public function setNomParamimp(?string $nomParamimp): self
    {
        $this->nomParamimp = $nomParamimp;

        return $this;
    }

    public function getNomParamimpCat(): ?string
    {
        return $this->nomParamimpCat;
    }

    public function setNomParamimpCat(?string $nomParamimpCat): self
    {
        $this->nomParamimpCat = $nomParamimpCat;

        return $this;
    }


}
