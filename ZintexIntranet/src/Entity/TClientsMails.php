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
     * @var int|null
     *
     * @ORM\Column(name="Num_Client_Mail", type="integer", nullable=true)
     */
    private $numClientMail;

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


}
