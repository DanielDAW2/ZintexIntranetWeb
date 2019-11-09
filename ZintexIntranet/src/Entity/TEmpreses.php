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


}
