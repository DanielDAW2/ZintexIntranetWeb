<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TClientsMails
 *
 * @ORM\Table(name="t_clients_mails")
 * @ORM\Entity
 */
class TClientsMails
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Cli_Mail", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCliMail;



    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Persona_Mail", type="string", length=255, nullable=true)
     */
    private $nomPersonaMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cognom1_Persona_Mail", type="string", length=255, nullable=true)
     */
    private $cognom1PersonaMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cognom2_Persona_Mail", type="string", length=255, nullable=true)
     */
    private $cognom2PersonaMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MailCli_Mail", type="string", length=255, nullable=true)
     */
    private $mailcliMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Departament_Mail", type="string", length=255, nullable=true)
     */
    private $departamentMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Extensio_Mail", type="string", length=255, nullable=true)
     */
    private $extensioMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Telefon_Mail", type="string", length=255, nullable=true)
     */
    private $telefonMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Mobil_Mail", type="string", length=255, nullable=true)
     */
    private $mobilMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Carrec_Mail", type="string", length=255, nullable=true)
     */
    private $carrecMail;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Tractament_Persona_Mail", type="integer", nullable=true)
     */
    private $tractamentPersonaMail;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TClients", inversedBy="tClientsMails")
     * @ORM\JoinColumn(nullable=false, referencedColumnName="Id_Cli", name="Id_Cli_Mail")
     */
    private $numClientMail;

    public function getIdCliMail(): ?int
    {
        return $this->idCliMail;
    }


    public function getNomPersonaMail(): ?string
    {
        return $this->nomPersonaMail;
    }

    public function setNomPersonaMail(?string $nomPersonaMail): self
    {
        $this->nomPersonaMail = $nomPersonaMail;

        return $this;
    }

    public function getCognom1PersonaMail(): ?string
    {
        return $this->cognom1PersonaMail;
    }

    public function setCognom1PersonaMail(?string $cognom1PersonaMail): self
    {
        $this->cognom1PersonaMail = $cognom1PersonaMail;

        return $this;
    }

    public function getCognom2PersonaMail(): ?string
    {
        return $this->cognom2PersonaMail;
    }

    public function setCognom2PersonaMail(?string $cognom2PersonaMail): self
    {
        $this->cognom2PersonaMail = $cognom2PersonaMail;

        return $this;
    }

    public function getMailcliMail(): ?string
    {
        return $this->mailcliMail;
    }

    public function setMailcliMail(?string $mailcliMail): self
    {
        $this->mailcliMail = $mailcliMail;

        return $this;
    }

    public function getDepartamentMail(): ?string
    {
        return $this->departamentMail;
    }

    public function setDepartamentMail(?string $departamentMail): self
    {
        $this->departamentMail = $departamentMail;

        return $this;
    }

    public function getExtensioMail(): ?string
    {
        return $this->extensioMail;
    }

    public function setExtensioMail(?string $extensioMail): self
    {
        $this->extensioMail = $extensioMail;

        return $this;
    }

    public function getTelefonMail(): ?string
    {
        return $this->telefonMail;
    }

    public function setTelefonMail(?string $telefonMail): self
    {
        $this->telefonMail = $telefonMail;

        return $this;
    }

    public function getMobilMail(): ?string
    {
        return $this->mobilMail;
    }

    public function setMobilMail(?string $mobilMail): self
    {
        $this->mobilMail = $mobilMail;

        return $this;
    }

    public function getCarrecMail(): ?string
    {
        return $this->carrecMail;
    }

    public function setCarrecMail(?string $carrecMail): self
    {
        $this->carrecMail = $carrecMail;

        return $this;
    }

    public function getTractamentPersonaMail(): ?int
    {
        return $this->tractamentPersonaMail;
    }

    public function setTractamentPersonaMail(?int $tractamentPersonaMail): self
    {
        $this->tractamentPersonaMail = $tractamentPersonaMail;

        return $this;
    }

    public function getNumClientMail(): ?TClients
    {
        return $this->numClientMail;
    }

    public function setNumClientMail(?TClients $numClientMail): self
    {
        $this->numClientMail = $numClientMail;

        return $this;
    }


}
