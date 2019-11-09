<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TEmpresesPath
 *
 * @ORM\Table(name="t_empreses_path")
 * @ORM\Entity
 */
class TEmpresesPath
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Empresa_Path", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmpresaPath;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Id_Empresa", type="integer", nullable=true)
     */
    private $idEmpresa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Num_Any", type="string", length=50, nullable=true)
     */
    private $numAny;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Carpeta_Pressupost", type="string", length=200, nullable=true)
     */
    private $carpetaPressupost;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Carpeta_Proforma", type="string", length=200, nullable=true)
     */
    private $carpetaProforma;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Carpeta_Factura", type="string", length=200, nullable=true)
     */
    private $carpetaFactura;


}
