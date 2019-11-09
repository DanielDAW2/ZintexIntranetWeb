<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TComandaProvAux
 *
 * @ORM\Table(name="t_comanda_prov_aux")
 * @ORM\Entity
 */
class TComandaProvAux
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Comanda_Prov_Aux", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComandaProvAux;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Comanda_Prov", type="integer", nullable=true)
     */
    private $numComandaProv;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Num_Prod_Prov", type="integer", nullable=true)
     */
    private $numProdProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descrip_Prod_Prov", type="string", length=50, nullable=true)
     */
    private $descripProdProv;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Num_Unit_Prod", type="float", precision=10, scale=0, nullable=true)
     */
    private $numUnitProd;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Preu_Unit_Prod", type="float", precision=10, scale=0, nullable=true)
     */
    private $preuUnitProd;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Preu_Total_Prod", type="float", precision=10, scale=0, nullable=true)
     */
    private $preuTotalProd;


}
