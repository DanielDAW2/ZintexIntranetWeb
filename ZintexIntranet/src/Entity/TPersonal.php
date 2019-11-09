<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPersonal
 *
 * @ORM\Table(name="t_personal")
 * @ORM\Entity
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


}
