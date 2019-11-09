<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TProductes
 *
 * @ORM\Table(name="t_productes")
 * @ORM\Entity
 */
class TProductes
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Prod", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProd;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ordre", type="smallint", nullable=true)
     */
    private $ordre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ref_Prod", type="string", length=255, nullable=true)
     */
    private $refProd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ETIQUETA", type="string", length=255, nullable=true)
     */
    private $etiqueta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Prod", type="string", length=1000, nullable=true)
     */
    private $nomProd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Prod_Curt", type="string", length=1000, nullable=true)
     */
    private $nomProdCurt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESCRIPOT", type="string", length=255, nullable=true)
     */
    private $descripot;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESCRIPAL", type="string", length=255, nullable=true)
     */
    private $descripal;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Color", type="integer", nullable=true)
     */
    private $color;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Grup_Producte", type="integer", nullable=true)
     */
    private $grupProducte;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Baixa", type="boolean", nullable=true)
     */
    private $baixa;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Disseny", type="boolean", nullable=true)
     */
    private $disseny;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Produccio", type="boolean", nullable=true)
     */
    private $produccio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FOTO", type="string", length=255, nullable=true)
     */
    private $foto;


}
