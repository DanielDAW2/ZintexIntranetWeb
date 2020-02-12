<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TFacturaRepository")
 * @ORM\Table(name="t_factura")
 */
class TFactura
{
    /**
     * @ORM\Column(name="Id_Factura", type="integer", nullable=false)
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $Id_Factura;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TClients", inversedBy="tFacturas")
     * @ORM\JoinColumn(referencedColumnName="Id_Cli", name="Client_Factura")
     */
    private $Client_Factura;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $Data_factura;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $Data_Vto_Factura;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $Num_Factura;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $NRef;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $SRef;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $Ref_Proforma;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Ref_Albara;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Ref_Presup;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $Base_Imp = 0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $IVA_VAR = 0;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $IVA = 21;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $REQ_VAR = 0;

    /**
     * @ORM\Column(type="float", name="REQ", nullable=true)
     */
    private $REQ = 0;

    /**
     * @ORM\Column(type="float", nullable=true)
    
     */
    private $Total_Fra;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $Import_Pendent;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $Import_Pagat;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TMetodePag")
     * @ORM\JoinColumn(referencedColumnName="Id_Metode", name="Metode_Pag")
     */
    private $Metode_Pag;

    /**
     * @ORM\Column(type="string", length=255, nullable=true, name="MetPag_Aux")
     */
    private $MetPag_Aux;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $Ultim_Pagament;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TFacturaAux", mappedBy="numFactura", orphanRemoval=true)
     */
    private $tFacturaAuxes;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TFacturaVto", mappedBy="numFactura")
     */
    private $tFacturaVtos;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TFacturaVtoAux", mappedBy="idFactura")
     */
    private $tFacturaVtoAuxes;

    public function __construct()
    {
        $this->tFacturaAuxes = new ArrayCollection();
        $this->tFacturaVtos = new ArrayCollection();
        $this->tFacturaVtoAuxes = new ArrayCollection();
    }

    public function getId_Factura(): ?int
    {
        return $this->Id_Factura;
    }

    public function getClientFactura(): ?TClients
    {
        return $this->Client_Factura;
    }

    public function setClientFactura(?TClients $Client_Factura): self
    {
        $this->Client_Factura = $Client_Factura;

        return $this;
    }

    public function getDataFactura(): ?\DateTimeInterface
    {
        return $this->Data_factura;
    }

    public function setDataFactura(?\DateTimeInterface $Data_factura): self
    {
        $this->Data_factura = $Data_factura;

        return $this;
    }

    public function getDataVtoFactura(): ?\DateTimeInterface
    {
        return $this->Data_Vto_Factura;
    }

    public function setDataVtoFactura(?\DateTimeInterface $Data_Vto_Factura): self
    {
        $this->Data_Vto_Factura = $Data_Vto_Factura;

        return $this;
    }

    public function getNumFactura(): ?string
    {
        return $this->Num_Factura;
    }

    public function setNumFactura(string $Num_Factura): self
    {
        $this->Num_Factura = $Num_Factura;

        return $this;
    }

    public function getNRef(): ?string
    {
        return $this->NRef;
    }

    public function setNRef(?string $NRef): self
    {
        $this->NRef = $NRef;

        return $this;
    }

    public function getSRef(): ?string
    {
        return $this->SRef;
    }

    public function setSRef(?string $SRef): self
    {
        $this->SRef = $SRef;

        return $this;
    }

    public function getRefProforma(): ?string
    {
        return $this->Ref_Proforma;
    }

    public function setRefProforma(?string $Ref_Proforma): self
    {
        $this->Ref_Proforma = $Ref_Proforma;

        return $this;
    }

    public function getRefAlbara(): ?string
    {
        return $this->Ref_Albara;
    }

    public function setRefAlbara(?string $Ref_Albara): self
    {
        $this->Ref_Albara = $Ref_Albara;

        return $this;
    }

    public function getRefPresup(): ?string
    {
        return $this->Ref_Presup;
    }

    public function setRefPresup(?string $Ref_Presup): self
    {
        $this->Ref_Presup = $Ref_Presup;

        return $this;
    }

    public function getBaseImp(): ?float
    {
        return $this->Base_Imp;
    }

    public function setBaseImp(?float $Base_Imp): self
    {
        $this->Base_Imp = $Base_Imp;

        return $this;
    }

    public function getIVAVAR(): ?int
    {
        return $this->IVA_VAR;
    }

    public function setIVAVAR(?int $IVA_VAR): self
    {
        $this->IVA_VAR = $IVA_VAR;

        return $this;
    }

    public function getIVA(): ?float
    {
        return $this->IVA;
    }

    public function setIVA(?float $IVA): self
    {
        $this->IVA = $IVA;

        return $this;
    }

    public function getREQVAR(): ?float
    {
        return $this->REQ_VAR;
    }

    public function setREQVAR(?float $REQ_VAR): self
    {
        $this->REQ_VAR = $REQ_VAR;

        return $this;
    }

    public function getREQ(): ?float
    {
        return $this->REQ;
    }

    public function setREQ(float $REQ): self
    {
        $this->REQ = $REQ;

        return $this;
    }

    public function getTotalFra(): ?float
    {
        return $this->Total_Fra;
    }

    public function setTotalFra(?float $Total_Fra): self
    {
        $this->Total_Fra = $Total_Fra;

        return $this;
    }

    public function getImportPendent(): ?float
    {
        return $this->Import_Pendent;
    }

    public function setImportPendent(?float $Import_Pendent): self
    {
        $this->Import_Pendent = $Import_Pendent;

        return $this;
    }

    public function getImportPagat(): ?float
    {
        return $this->Import_Pagat;
    }

    public function setImportPagat(?float $Import_Pagat): self
    {
        $this->Import_Pagat = $Import_Pagat;

        return $this;
    }

    public function getMetodePag(): ?TMetodePag
    {
        return $this->Metode_Pag;
    }

    public function setMetodePag(?TMetodePag $Metode_Pag): self
    {
        $this->Metode_Pag = $Metode_Pag;

        return $this;
    }

    public function getMetPagAux(): ?string
    {
        return $this->MetPag_Aux;
    }

    public function setMetPagAux(?string $MetPag_Aux): self
    {
        $this->MetPag_Aux = $MetPag_Aux;

        return $this;
    }

    public function getUltimPagament(): ?\DateTimeInterface
    {
        return $this->Ultim_Pagament;
    }

    public function setUltimPagament(?\DateTimeInterface $Ultim_Pagament): self
    {
        $this->Ultim_Pagament = $Ultim_Pagament;

        return $this;
    }

    /**
     * @return Collection|TFacturaAux[]
     */
    public function getTFacturaAuxes(): Collection
    {
        return $this->tFacturaAuxes;
    }

    public function addTFacturaAux(TFacturaAux $tFacturaAux): self
    {
        if (!$this->tFacturaAuxes->contains($tFacturaAux)) {
            $this->tFacturaAuxes[] = $tFacturaAux;
            $tFacturaAux->setNumFactura($this);
        }

        return $this;
    }

    public function removeTFacturaAux(TFacturaAux $tFacturaAux): self
    {
        if ($this->tFacturaAuxes->contains($tFacturaAux)) {
            $this->tFacturaAuxes->removeElement($tFacturaAux);
            // set the owning side to null (unless already changed)
            if ($tFacturaAux->getNumFactura() === $this) {
                $tFacturaAux->setNumFactura(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TFacturaVto[]
     */
    public function getTFacturaVtos(): Collection
    {
        return $this->tFacturaVtos;
    }

    public function addTFacturaVto(TFacturaVto $tFacturaVto): self
    {
        if (!$this->tFacturaVtos->contains($tFacturaVto)) {
            $this->tFacturaVtos[] = $tFacturaVto;
            $tFacturaVto->setNumFactura($this);
        }

        return $this;
    }

    public function removeTFacturaVto(TFacturaVto $tFacturaVto): self
    {
        if ($this->tFacturaVtos->contains($tFacturaVto)) {
            $this->tFacturaVtos->removeElement($tFacturaVto);
            // set the owning side to null (unless already changed)
            if ($tFacturaVto->getNumFactura() === $this) {
                $tFacturaVto->setNumFactura(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TFacturaVtoAux[]
     */
    public function getTFacturaVtoAuxes(): Collection
    {
        return $this->tFacturaVtoAuxes;
    }

    public function addTFacturaVtoAux(TFacturaVtoAux $tFacturaVtoAux): self
    {
        if (!$this->tFacturaVtoAuxes->contains($tFacturaVtoAux)) {
            $this->tFacturaVtoAuxes[] = $tFacturaVtoAux;
            $tFacturaVtoAux->setIdFactura($this);
        }

        return $this;
    }

    public function removeTFacturaVtoAux(TFacturaVtoAux $tFacturaVtoAux): self
    {
        if ($this->tFacturaVtoAuxes->contains($tFacturaVtoAux)) {
            $this->tFacturaVtoAuxes->removeElement($tFacturaVtoAux);
            // set the owning side to null (unless already changed)
            if ($tFacturaVtoAux->getIdFactura() === $this) {
                $tFacturaVtoAux->setIdFactura(null);
            }
        }

        return $this;
    }

    public function getIdFactura(): ?int
    {
        return $this->Id_Factura;
    }
}
