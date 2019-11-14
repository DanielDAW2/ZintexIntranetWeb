<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TEmpresesPath
 *
 * @ORM\Table(name="t_empreses_path")
 * @ORM\Entity(repositoryClass="App\Repository\TEmpresesPathRepository")
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

    public function getIdEmpresaPath(): ?int
    {
        return $this->idEmpresaPath;
    }

    public function getIdEmpresa(): ?int
    {
        return $this->idEmpresa;
    }

    public function setIdEmpresa(?int $idEmpresa): self
    {
        $this->idEmpresa = $idEmpresa;

        return $this;
    }

    public function getNumAny(): ?string
    {
        return $this->numAny;
    }

    public function setNumAny(?string $numAny): self
    {
        $this->numAny = $numAny;

        return $this;
    }

    public function getCarpetaPressupost(): ?string
    {
        return $this->carpetaPressupost;
    }

    public function setCarpetaPressupost(?string $carpetaPressupost): self
    {
        $this->carpetaPressupost = $carpetaPressupost;

        return $this;
    }

    public function getCarpetaProforma(): ?string
    {
        return $this->carpetaProforma;
    }

    public function setCarpetaProforma(?string $carpetaProforma): self
    {
        $this->carpetaProforma = $carpetaProforma;

        return $this;
    }

    public function getCarpetaFactura(): ?string
    {
        return $this->carpetaFactura;
    }

    public function setCarpetaFactura(?string $carpetaFactura): self
    {
        $this->carpetaFactura = $carpetaFactura;

        return $this;
    }


}
