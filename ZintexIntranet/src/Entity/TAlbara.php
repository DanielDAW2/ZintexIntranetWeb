<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * TAlbara
 *
 * @ORM\Table(name="t_albara")
 * @ORM\Entity
 */
class TAlbara
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Albara", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAlbara;



    /**
     * @var string|null
     *
     * @ORM\Column(name="Descrip_Client_Albara", type="string", length=255, nullable=true)
     */
    private $descripClientAlbara;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Client_Albara", type="string", length=255, nullable=true)
     */
    private $nomClientAlbara;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Direccio_Client_Albara", type="string", length=255, nullable=true)
     */
    private $direccioClientAlbara;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Num_Albara", type="string", length=255, nullable=true)
     */
    private $numAlbara;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Albara", type="datetime", nullable=true)
     */
    private $dataAlbara;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Sortida_Albara", type="datetime", nullable=true)
     */
    private $dataSortidaAlbara;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NRef_Albara", type="string", length=255, nullable=true)
     */
    private $nrefAlbara;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SRef_Albara", type="string", length=255, nullable=true)
     */
    private $srefAlbara;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Facturable_Albara", type="integer", nullable=true)
     */
    private $facturableAlbara;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NumFraProforma_Albara", type="string", length=255, nullable=true)
     */
    private $numfraproformaAlbara;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NumFactura_Albara", type="string", length=255, nullable=true)
     */
    private $numfacturaAlbara;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TClients", inversedBy="TAlbara")
     */
    private $clientAlbara;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TAlbaraAux", mappedBy="numAlbara", orphanRemoval=true)
     */
    private $tAlbaraAuxes;

    public function __construct()
    {
        $this->tAlbaraAuxes = new ArrayCollection();
    }

    public function getIdAlbara(): ?int
    {
        return $this->idAlbara;
    }


    public function getDescripClientAlbara(): ?string
    {
        return $this->descripClientAlbara;
    }

    public function setDescripClientAlbara(?string $descripClientAlbara): self
    {
        $this->descripClientAlbara = $descripClientAlbara;

        return $this;
    }

    public function getNomClientAlbara(): ?string
    {
        return $this->nomClientAlbara;
    }

    public function setNomClientAlbara(?string $nomClientAlbara): self
    {
        $this->nomClientAlbara = $nomClientAlbara;

        return $this;
    }

    public function getDireccioClientAlbara(): ?string
    {
        return $this->direccioClientAlbara;
    }

    public function setDireccioClientAlbara(?string $direccioClientAlbara): self
    {
        $this->direccioClientAlbara = $direccioClientAlbara;

        return $this;
    }

    public function getNumAlbara(): ?string
    {
        return $this->numAlbara;
    }

    public function setNumAlbara(?string $numAlbara): self
    {
        $this->numAlbara = $numAlbara;

        return $this;
    }

    public function getDataAlbara(): ?\DateTimeInterface
    {
        return $this->dataAlbara;
    }

    public function setDataAlbara(?\DateTimeInterface $dataAlbara): self
    {
        $this->dataAlbara = $dataAlbara;

        return $this;
    }

    public function getDataSortidaAlbara(): ?\DateTimeInterface
    {
        return $this->dataSortidaAlbara;
    }

    public function setDataSortidaAlbara(?\DateTimeInterface $dataSortidaAlbara): self
    {
        $this->dataSortidaAlbara = $dataSortidaAlbara;

        return $this;
    }

    public function getNrefAlbara(): ?string
    {
        return $this->nrefAlbara;
    }

    public function setNrefAlbara(?string $nrefAlbara): self
    {
        $this->nrefAlbara = $nrefAlbara;

        return $this;
    }

    public function getSrefAlbara(): ?string
    {
        return $this->srefAlbara;
    }

    public function setSrefAlbara(?string $srefAlbara): self
    {
        $this->srefAlbara = $srefAlbara;

        return $this;
    }

    public function getFacturableAlbara(): ?int
    {
        return $this->facturableAlbara;
    }

    public function setFacturableAlbara(?int $facturableAlbara): self
    {
        $this->facturableAlbara = $facturableAlbara;

        return $this;
    }

    public function getNumfraproformaAlbara(): ?string
    {
        return $this->numfraproformaAlbara;
    }

    public function setNumfraproformaAlbara(?string $numfraproformaAlbara): self
    {
        $this->numfraproformaAlbara = $numfraproformaAlbara;

        return $this;
    }

    public function getNumfacturaAlbara(): ?string
    {
        return $this->numfacturaAlbara;
    }

    public function setNumfacturaAlbara(?string $numfacturaAlbara): self
    {
        $this->numfacturaAlbara = $numfacturaAlbara;

        return $this;
    }

    public function getClientAlbara(): ?TClients
    {
        return $this->clientAlbara;
    }

    public function setClientAlbara(?TClients $clientAlbara): self
    {
        $this->clientAlbara = $clientAlbara;

        return $this;
    }

    /**
     * @return Collection|TAlbaraAux[]
     */
    public function getTAlbaraAuxes(): Collection
    {
        return $this->tAlbaraAuxes;
    }

    public function addTAlbaraAux(TAlbaraAux $tAlbaraAux): self
    {
        if (!$this->tAlbaraAuxes->contains($tAlbaraAux)) {
            $this->tAlbaraAuxes[] = $tAlbaraAux;
            $tAlbaraAux->setNumAlbara($this);
        }

        return $this;
    }

    public function removeTAlbaraAux(TAlbaraAux $tAlbaraAux): self
    {
        if ($this->tAlbaraAuxes->contains($tAlbaraAux)) {
            $this->tAlbaraAuxes->removeElement($tAlbaraAux);
            // set the owning side to null (unless already changed)
            if ($tAlbaraAux->getNumAlbara() === $this) {
                $tAlbaraAux->setNumAlbara(null);
            }
        }

        return $this;
    }


}
