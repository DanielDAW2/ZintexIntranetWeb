<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPersonal
 *
 * @ORM\Table(name="t_personal")
 * @ORM\Entity(repositoryClass="App\Repository\TPersonalRepository")
 */
class TPersonal
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
     * @ORM\Column(name="DNI", type="string", length=50, nullable=true)
     */
    private $dni;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom", type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cognom1", type="string", length=50, nullable=true)
     */
    private $cognom1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cognom2", type="string", length=50, nullable=true)
     */
    private $cognom2;

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
     * @ORM\Column(name="Provincia", type="string", length=50, nullable=true)
     */
    private $provincia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Telefon", type="string", length=50, nullable=true)
     */
    private $telefon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Mobil", type="string", length=50, nullable=true)
     */
    private $mobil;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NumSS", type="string", length=50, nullable=true)
     */
    private $numss;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CtaCte", type="string", length=20, nullable=true)
     */
    private $ctacte;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDni(): ?string
    {
        return $this->dni;
    }

    public function setDni(?string $dni): self
    {
        $this->dni = $dni;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCognom1(): ?string
    {
        return $this->cognom1;
    }

    public function setCognom1(?string $cognom1): self
    {
        $this->cognom1 = $cognom1;

        return $this;
    }

    public function getCognom2(): ?string
    {
        return $this->cognom2;
    }

    public function setCognom2(?string $cognom2): self
    {
        $this->cognom2 = $cognom2;

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

    public function getProvincia(): ?string
    {
        return $this->provincia;
    }

    public function setProvincia(?string $provincia): self
    {
        $this->provincia = $provincia;

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

    public function getMobil(): ?string
    {
        return $this->mobil;
    }

    public function setMobil(?string $mobil): self
    {
        $this->mobil = $mobil;

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

    public function getNumss(): ?string
    {
        return $this->numss;
    }

    public function setNumss(?string $numss): self
    {
        $this->numss = $numss;

        return $this;
    }

    public function getCtacte(): ?string
    {
        return $this->ctacte;
    }

    public function setCtacte(?string $ctacte): self
    {
        $this->ctacte = $ctacte;

        return $this;
    }


}
