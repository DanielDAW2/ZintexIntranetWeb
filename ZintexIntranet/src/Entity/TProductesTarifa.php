<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TProductesTarifa
 *
 * @ORM\Table(name="t_productes_tarifa")
 * @ORM\Entity
 */
class TProductesTarifa
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Prod_Tarifa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProdTarifa;

    

    /**
     * @var string|null
     *
     * @ORM\Column(name="Marca", type="string", length=5, nullable=true)
     */
    private $marca;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Path_Excel", type="string", length=255, nullable=true)
     */
    private $pathExcel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Sheet_Excel", type="string", length=255, nullable=true)
     */
    private $sheetExcel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Columna_Ample", type="string", length=4, nullable=true)
     */
    private $columnaAmple;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Columna_Rang", type="string", length=4, nullable=true)
     */
    private $columnaRang;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Fila_Rang1", type="integer", nullable=true)
     */
    private $filaRang1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Fila_Rang2", type="integer", nullable=true)
     */
    private $filaRang2;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TProductes", inversedBy="tProductesTarifas")
     * @ORM\JoinColumn(referencedColumnName="Id_Prod", name="Id_Producte")
     */
    private $idProducte;




    public function setIdProducte(?TProductes $idProducte): self
    {
        $this->idProducte = $idProducte;

        return $this;
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

    public function getPathExcel(): ?string
    {
        return $this->pathExcel;
    }

    public function setPathExcel(?string $pathExcel): self
    {
        $this->pathExcel = $pathExcel;

        return $this;
    }

    public function getSheetExcel(): ?string
    {
        return $this->sheetExcel;
    }

    public function setSheetExcel(?string $sheetExcel): self
    {
        $this->sheetExcel = $sheetExcel;

        return $this;
    }

    public function getColumnaAmple(): ?string
    {
        return $this->columnaAmple;
    }

    public function setColumnaAmple(?string $columnaAmple): self
    {
        $this->columnaAmple = $columnaAmple;

        return $this;
    }

    public function getColumnaRang(): ?string
    {
        return $this->columnaRang;
    }

    public function setColumnaRang(?string $columnaRang): self
    {
        $this->columnaRang = $columnaRang;

        return $this;
    }

    public function getFilaRang1(): ?int
    {
        return $this->filaRang1;
    }

    public function setFilaRang1(?int $filaRang1): self
    {
        $this->filaRang1 = $filaRang1;

        return $this;
    }

    public function getFilaRang2(): ?int
    {
        return $this->filaRang2;
    }

    public function setFilaRang2(?int $filaRang2): self
    {
        $this->filaRang2 = $filaRang2;

        return $this;
    }

    public function getIdProducte(): ?TProductes
    {
        return $this->idProducte;
    }


}
