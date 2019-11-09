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
     * @var int|null
     *
     * @ORM\Column(name="Id_Producte", type="integer", nullable=true)
     */
    private $idProducte;

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


}
