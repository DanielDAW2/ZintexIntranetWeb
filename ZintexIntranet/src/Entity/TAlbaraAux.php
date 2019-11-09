<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TAlbaraAux
 *
 * @ORM\Table(name="t_albara_aux")
 * @ORM\Entity
 */
class TAlbaraAux
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Albara_Aux", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAlbaraAux;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Albara", type="integer", nullable=true)
     */
    private $numAlbara;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Linia", type="integer", nullable=true)
     */
    private $numLinia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CodProd_Albara", type="integer", nullable=true)
     */
    private $codprodAlbara;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DescripProd_Albara", type="string", length=1000, nullable=true)
     */
    private $descripprodAlbara;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CodParamImp_Albara", type="integer", nullable=true)
     */
    private $codparamimpAlbara;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DescripParamImp_Albara", type="string", length=255, nullable=true)
     */
    private $descripparamimpAlbara;

    /**
     * @var float|null
     *
     * @ORM\Column(name="NumUnit_Albara", type="float", precision=10, scale=0, nullable=true)
     */
    private $numunitAlbara;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PreuUnit_Albara", type="float", precision=10, scale=0, nullable=true)
     */
    private $preuunitAlbara;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Preu_Albara", type="float", precision=10, scale=0, nullable=true)
     */
    private $preuAlbara;


}
