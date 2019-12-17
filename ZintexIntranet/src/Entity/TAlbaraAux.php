<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TAlbaraAux
 *
 * @ORM\Table(name="t_albara_aux")
 * @ORM\Entity(repositoryClass="App\Repository\TAlbaraAuxRepository")
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
     * @ORM\Column(name="Num_Linia", type="integer", nullable=true)
     */
    private $numLinia;



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

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TAlbara", inversedBy="tAlbaraAuxes")
     * @ORM\JoinColumn(nullable=false, referencedColumnName="Id_Albara", name="Num_Albara")
     */
    private $numAlbara;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TProductes", inversedBy="tAlbaraAuxes")
     * @ORM\JoinColumn(name="CodProd_Albara", referencedColumnName="Id_Prod")
     */
    private $codprodAlbara;

    public function getIdAlbaraAux(): ?int
    {
        return $this->idAlbaraAux;
    }

    public function getNumLinia(): ?int
    {
        return $this->numLinia;
    }

    public function setNumLinia(?int $numLinia): self
    {
        $this->numLinia = $numLinia;

        return $this;
    }

    public function getCodprodAlbara(): ?TProductes
    {
        return $this->codprodAlbara;
    }

    public function setCodprodAlbara(?TProductes $codprodAlbara): self
    {
        $this->codprodAlbara = $codprodAlbara;

        return $this;
    }

    public function getDescripprodAlbara(): ?string
    {
        return $this->descripprodAlbara;
    }

    public function setDescripprodAlbara(?string $descripprodAlbara): self
    {
        $this->descripprodAlbara = $descripprodAlbara;

        return $this;
    }

    public function getCodparamimpAlbara(): ?int
    {
        return $this->codparamimpAlbara;
    }

    public function setCodparamimpAlbara(?int $codparamimpAlbara): self
    {
        $this->codparamimpAlbara = $codparamimpAlbara;

        return $this;
    }

    public function getDescripparamimpAlbara(): ?string
    {
        return $this->descripparamimpAlbara;
    }

    public function setDescripparamimpAlbara(?string $descripparamimpAlbara): self
    {
        $this->descripparamimpAlbara = $descripparamimpAlbara;

        return $this;
    }

    public function getNumunitAlbara(): ?float
    {
        return $this->numunitAlbara;
    }

    public function setNumunitAlbara(?float $numunitAlbara): self
    {
        $this->numunitAlbara = $numunitAlbara;

        return $this;
    }

    public function getPreuunitAlbara(): ?float
    {
        return $this->preuunitAlbara;
    }

    public function setPreuunitAlbara(?float $preuunitAlbara): self
    {
        $this->preuunitAlbara = $preuunitAlbara;

        return $this;
    }

    public function getPreuAlbara(): ?float
    {
        return $this->preuAlbara;
    }

    public function setPreuAlbara(?float $preuAlbara): self
    {
        $this->preuAlbara = $preuAlbara;

        return $this;
    }

    public function getNumAlbara(): ?TAlbara
    {
        return $this->numAlbara;
    }

    public function setNumAlbara(?TAlbara $numAlbara): self
    {
        $this->numAlbara = $numAlbara;

        return $this;
    }


}
