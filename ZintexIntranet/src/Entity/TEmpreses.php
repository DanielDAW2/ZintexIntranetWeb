<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TEmpreses
 *
 * @ORM\Table(name="t_empreses")
 * @ORM\Entity
 */
class TEmpreses
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Marca", type="string", length=50, nullable=true)
     */
    private $marca;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Empresa", type="string", length=50, nullable=true)
     */
    private $empresa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Titular", type="string", length=50, nullable=true)
     */
    private $titular;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NIF", type="string", length=50, nullable=true)
     */
    private $nif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Direccio", type="string", length=50, nullable=true)
     */
    private $direccio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodPos", type="string", length=50, nullable=true)
     */
    private $codpos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Poblacio", type="string", length=50, nullable=true)
     */
    private $poblacio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Telefon", type="string", length=50, nullable=true)
     */
    private $telefon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Fax", type="string", length=50, nullable=true)
     */
    private $fax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Web", type="string", length=50, nullable=true)
     */
    private $web;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Presup", type="integer", nullable=true)
     */
    private $numPresup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Proforma", type="integer", nullable=true)
     */
    private $numProforma;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Albara", type="integer", nullable=true)
     */
    private $numAlbara;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Fra", type="integer", nullable=true)
     */
    private $numFra;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Client", type="integer", nullable=true)
     */
    private $numClient;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_FraRectif", type="integer", nullable=true)
     */
    private $numFrarectif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Path_Logo", type="string", length=200, nullable=true)
     */
    private $pathLogo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarca(): ?string
    {
        return $this->marca;
    }

    public function setMarca(?string $marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    public function getEmpresa(): ?string
    {
        return $this->empresa;
    }

    public function setEmpresa(?string $empresa): self
    {
        $this->empresa = $empresa;

        return $this;
    }

    public function getTitular(): ?string
    {
        return $this->titular;
    }

    public function setTitular(?string $titular): self
    {
        $this->titular = $titular;

        return $this;
    }

    public function getNif(): ?string
    {
        return $this->nif;
    }

    public function setNif(?string $nif): self
    {
        $this->nif = $nif;

        return $this;
    }

    public function getDireccio(): ?string
    {
        return $this->direccio;
    }

    public function setDireccio(?string $direccio): self
    {
        $this->direccio = $direccio;

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

    public function getPoblacio(): ?string
    {
        return $this->poblacio;
    }

    public function setPoblacio(?string $poblacio): self
    {
        $this->poblacio = $poblacio;

        return $this;
    }

    public function getTelefon(): ?string
    {
        return $this->telefon;
    }

    public function setTelefon(?string $telefon): self
    {
        $this->telefon = $telefon;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getWeb(): ?string
    {
        return $this->web;
    }

    public function setWeb(?string $web): self
    {
        $this->web = $web;

        return $this;
    }

    public function getNumPresup(): ?int
    {
        return $this->numPresup;
    }

    public function setNumPresup(?int $numPresup): self
    {
        $this->numPresup = $numPresup;

        return $this;
    }

    public function getNumProforma(): ?int
    {
        return $this->numProforma;
    }

    public function setNumProforma(?int $numProforma): self
    {
        $this->numProforma = $numProforma;

        return $this;
    }

    public function getNumAlbara(): ?int
    {
        return $this->numAlbara;
    }

    public function setNumAlbara(?int $numAlbara): self
    {
        $this->numAlbara = $numAlbara;

        return $this;
    }

    public function getNumFra(): ?int
    {
        return $this->numFra;
    }

    public function setNumFra(?int $numFra): self
    {
        $this->numFra = $numFra;

        return $this;
    }

    public function getNumClient(): ?int
    {
        return $this->numClient;
    }

    public function setNumClient(?int $numClient): self
    {
        $this->numClient = $numClient;

        return $this;
    }

    public function getNumFrarectif(): ?int
    {
        return $this->numFrarectif;
    }

    public function setNumFrarectif(?int $numFrarectif): self
    {
        $this->numFrarectif = $numFrarectif;

        return $this;
    }

    public function getPathLogo(): ?string
    {
        return $this->pathLogo;
    }

    public function setPathLogo(?string $pathLogo): self
    {
        $this->pathLogo = $pathLogo;

        return $this;
    }


}
