<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * TFraproforma
 *
 * @ORM\Table(name="t_fraproforma")
 * @ORM\Entity(repositoryClass="App\Repository\TFraproformaRepository")
 */
class TFraproforma
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_FraProf", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")

     */
    private $idFraprof;


    /**
     * @var string|null
     *
     * @ORM\Column(name="Persona_FraProf", type="string", length=50, nullable=true)
     */
    private $personaFraprof;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_FraProf", type="datetime", nullable=true)
     */
    private $dataFraprof;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Num_FraProf", type="string", length=255, nullable=true)
     */
    private $numFraprof;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ref_Presup", type="string", length=255, nullable=true)
     */
    private $refPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ref_Albara", type="string", length=255, nullable=true)
     */
    private $refAlbara;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ref_Factura", type="string", length=255, nullable=true)
     */
    private $refFactura;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NRef", type="string", length=255, nullable=true)
     */
    private $nref;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SRef", type="string", length=255, nullable=true)
     */
    private $sref;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Valorada", type="boolean", nullable=true)
     */
    private $valorada = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Base_Imp", type="float", precision=10, scale=0, nullable=true)
     */
    private $baseImp;

    /**
     * @var float|null
     *
     * @ORM\Column(name="IVA", type="float", precision=10, scale=0, nullable=true)
     */
    private $iva;

    /**
     * @var float|null
     *
     * @ORM\Column(name="REQ", type="float", precision=10, scale=0, nullable=true)
     */
    private $req;

    /**
     * @var float|null
     *
     * @ORM\Column(name="IVA_VAR", type="float", precision=10, scale=0, nullable=true)
     */
    private $ivaVar;

    /**
     * @var float|null
     *
     * @ORM\Column(name="REQ_VAR", type="float", precision=10, scale=0, nullable=true)
     */
    private $reqVar;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Total_Fra", type="float", precision=10, scale=0, nullable=true)
     */
    private $totalFra;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Import_Pendent", type="float", precision=10, scale=0, nullable=true)
     */
    private $importPendent;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Import_Pagat", type="float", precision=10, scale=0, nullable=true)
     */
    private $importPagat;



    /**
     * @var string|null
     *
     * @ORM\Column(name="MetPag_Aux", type="string", length=1000, nullable=true)
     */
    private $metpagAux;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Observ_FraProf", type="string", length=1200, nullable=true)
     */
    private $observFraprof;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Seguiment", type="string", length=1000, nullable=true)
     */
    private $seguiment;





    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Gravacio", type="datetime", nullable=true)
     */
    private $dataGravacio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hora_Gravacio", type="datetime", nullable=true)
     */
    private $horaGravacio;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Acceptada", type="boolean", nullable=true)
     */
    private $acceptada;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Acceptacio", type="datetime", nullable=true)
     */
    private $dataAcceptacio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hora_Acceptacio", type="datetime", nullable=true)
     */
    private $horaAcceptacio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Ultim_Pagament", type="datetime", nullable=true)
     */
    private $ultimPagament;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Facturar", type="boolean", nullable=true)
     */
    private $facturar = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Produccio", type="datetime", nullable=true)
     */
    private $dataProduccio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hora_Produccio", type="datetime", nullable=true)
     */
    private $horaProduccio;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Produccio", type="boolean", nullable=true)
     */
    private $produccio = '0';

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TClients", inversedBy="tFraproformas")
     * @ORM\JoinColumn(referencedColumnName="Id_Cli", name="Client_FraProf")
     */
    private $clientFraprof;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TFraproformaAux", mappedBy="numProforma", orphanRemoval=true)
     * @ORM\JoinColumn( referencedColumnName="idFraproformaAux")
     */
    private $tFraproformaAuxes;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TMetodePag")
     * @ORM\JoinColumn( referencedColumnName="Id_Metode", name="Metode_Pag")
     */
    private $metodePag;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Tautorspresup", inversedBy="tFraProformas")
     * @ORM\JoinColumn( referencedColumnName="Id_AutPresup", name="Num_Autor")
     */
    private $numAutor;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Tautorspresup")
     * @ORM\JoinColumn( referencedColumnName="Id_AutPresup", name="Num_Autor_Proforma")
     */
    private $numAutorProforma;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TFraproformaPlazos", mappedBy="numFraproforma")
     */
    private $tFraproformaPlazos;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TFraproformaVto", mappedBy="numProforma")
     */
    private $tFraproformaVtos;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TOrdreTreball", mappedBy="numFraproforma")
     */
    private $tOrdreTreballs;



    public function __construct()
    {
        $this->tFraproformaAuxes = new ArrayCollection();
        $this->tFraproformaPlazos = new ArrayCollection();
        $this->tFraproformaVtos = new ArrayCollection();
        $this->tOrdreTreballs = new ArrayCollection();
    }

    public function getIdFraprof(): ?int
    {
        return $this->idFraprof;
    }

    public function getClientFraprof(): ?TClients
    {
        return $this->clientFraprof;
    }

    public function setClientFraprof(?TClients $clientFraprof): self
    {
        $this->clientFraprof = $clientFraprof;

        return $this;
    }

    public function getPersonaFraprof(): ?string
    {
        return $this->personaFraprof;
    }

    public function setPersonaFraprof(?string $personaFraprof): self
    {
        $this->personaFraprof = $personaFraprof;

        return $this;
    }

    public function getDataFraprof(): ?\DateTimeInterface
    {
        return $this->dataFraprof;
    }

    public function setDataFraprof(?\DateTimeInterface $dataFraprof): self
    {
        $this->dataFraprof = $dataFraprof;

        return $this;
    }

    public function getNumFraprof(): ?string
    {
        return $this->numFraprof;
    }

    public function setNumFraprof(?string $numFraprof): self
    {
        $this->numFraprof = $numFraprof;

        return $this;
    }

    public function getRefPresup(): ?string
    {
        return $this->refPresup;
    }

    public function setRefPresup(?string $refPresup): self
    {
        $this->refPresup = $refPresup;

        return $this;
    }

    public function getRefAlbara(): ?string
    {
        return $this->refAlbara;
    }

    public function setRefAlbara(?string $refAlbara): self
    {
        $this->refAlbara = $refAlbara;

        return $this;
    }

    public function getRefFactura(): ?string
    {
        return $this->refFactura;
    }

    public function setRefFactura(?string $refFactura): self
    {
        $this->refFactura = $refFactura;

        return $this;
    }

    public function getNref(): ?string
    {
        return $this->nref;
    }

    public function setNref(?string $nref): self
    {
        $this->nref = $nref;

        return $this;
    }

    public function getSref(): ?string
    {
        return $this->sref;
    }

    public function setSref(?string $sref): self
    {
        $this->sref = $sref;

        return $this;
    }

    public function getValorada(): ?bool
    {
        return $this->valorada;
    }

    public function setValorada(?bool $valorada): self
    {
        $this->valorada = $valorada;

        return $this;
    }

    public function getBaseImp(): ?float
    {
        return $this->baseImp;
    }

    public function setBaseImp(?float $baseImp): self
    {
        $this->baseImp = $baseImp;

        return $this;
    }

    public function getIva(): ?float
    {
        return $this->iva;
    }

    public function setIva(?float $iva): self
    {
        $this->iva = $iva;

        return $this;
    }

    public function getReq(): ?float
    {
        return $this->req;
    }

    public function setReq(?float $req): self
    {
        $this->req = $req;

        return $this;
    }

    public function getIvaVar(): ?float
    {
        return $this->ivaVar;
    }

    public function setIvaVar(?float $ivaVar): self
    {
        $this->ivaVar = $ivaVar;

        return $this;
    }

    public function getReqVar(): ?float
    {
        return $this->reqVar;
    }

    public function setReqVar(?float $reqVar): self
    {
        $this->reqVar = $reqVar;

        return $this;
    }

    public function getTotalFra(): ?float
    {
        return $this->totalFra;
    }

    public function setTotalFra(?float $totalFra): self
    {
        $this->totalFra = $totalFra;

        return $this;
    }

    public function getImportPendent(): ?float
    {
        return $this->importPendent;
    }

    public function setImportPendent(?float $importPendent): self
    {
        $this->importPendent = $importPendent;

        return $this;
    }

    public function getImportPagat(): ?float
    {
        return $this->importPagat;
    }

    public function setImportPagat(?float $importPagat): self
    {
        $this->importPagat = $importPagat;

        return $this;
    }

    public function getMetpagAux(): ?string
    {
        return $this->metpagAux;
    }

    public function setMetpagAux(?string $metpagAux): self
    {
        $this->metpagAux = $metpagAux;

        return $this;
    }

    public function getObservFraprof(): ?string
    {
        return $this->observFraprof;
    }

    public function setObservFraprof(?string $observFraprof): self
    {
        $this->observFraprof = $observFraprof;

        return $this;
    }

    public function getSeguiment(): ?string
    {
        return $this->seguiment;
    }

    public function setSeguiment(?string $seguiment): self
    {
        $this->seguiment = $seguiment;

        return $this;
    }

    public function getDataGravacio(): ?\DateTimeInterface
    {
        return $this->dataGravacio;
    }

    public function setDataGravacio(?\DateTimeInterface $dataGravacio): self
    {
        $this->dataGravacio = $dataGravacio;

        return $this;
    }

    public function getHoraGravacio(): ?\DateTimeInterface
    {
        return $this->horaGravacio;
    }

    public function setHoraGravacio(?\DateTimeInterface $horaGravacio): self
    {
        $this->horaGravacio = $horaGravacio;

        return $this;
    }

    public function getAcceptada(): ?bool
    {
        return $this->acceptada;
    }

    public function setAcceptada(?bool $acceptada): self
    {
        $this->acceptada = $acceptada;

        return $this;
    }

    public function getDataAcceptacio(): ?\DateTimeInterface
    {
        return $this->dataAcceptacio;
    }

    public function setDataAcceptacio(?\DateTimeInterface $dataAcceptacio): self
    {
        $this->dataAcceptacio = $dataAcceptacio;

        return $this;
    }

    public function getHoraAcceptacio(): ?\DateTimeInterface
    {
        return $this->horaAcceptacio;
    }

    public function setHoraAcceptacio(?\DateTimeInterface $horaAcceptacio): self
    {
        $this->horaAcceptacio = $horaAcceptacio;

        return $this;
    }

    public function getUltimPagament(): ?\DateTimeInterface
    {
        return $this->ultimPagament;
    }

    public function setUltimPagament(?\DateTimeInterface $ultimPagament): self
    {
        $this->ultimPagament = $ultimPagament;

        return $this;
    }

    public function getFacturar(): ?bool
    {
        return $this->facturar;
    }

    public function setFacturar(?bool $facturar): self
    {
        $this->facturar = $facturar;

        return $this;
    }

    public function getDataProduccio(): ?\DateTimeInterface
    {
        return $this->dataProduccio;
    }

    public function setDataProduccio(?\DateTimeInterface $dataProduccio): self
    {
        $this->dataProduccio = $dataProduccio;

        return $this;
    }

    public function getHoraProduccio(): ?\DateTimeInterface
    {
        return $this->horaProduccio;
    }

    public function setHoraProduccio(?\DateTimeInterface $horaProduccio): self
    {
        $this->horaProduccio = $horaProduccio;

        return $this;
    }

    public function getProduccio(): ?bool
    {
        return $this->produccio;
    }

    public function setProduccio(?bool $produccio): self
    {
        $this->produccio = $produccio;

        return $this;
    }

    public function addClientFraprof(TFraProformaAux $clientFraprof): self
    {
        if (!$this->clientFraprof->contains($clientFraprof)) {
            $this->clientFraprof[] = $clientFraprof;
            $clientFraprof->setNumProforma($this);
        }

        return $this;
    }

    public function removeClientFraprof(TFraProformaAux $clientFraprof): self
    {
        if ($this->clientFraprof->contains($clientFraprof)) {
            $this->clientFraprof->removeElement($clientFraprof);
            // set the owning side to null (unless already changed)
            if ($clientFraprof->getNumProforma() === $this) {
                $clientFraprof->setNumProforma(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TFraproformaAux[]
     */
    public function getTFraproformaAuxes(): Collection
    {
        return $this->tFraproformaAuxes;
    }

    public function addTFraproformaAux(TFraproformaAux $tFraproformaAux): self
    {
        if (!$this->tFraproformaAuxes->contains($tFraproformaAux)) {
            $this->tFraproformaAuxes[] = $tFraproformaAux;
            $tFraproformaAux->setNumProforma($this);
        }

        return $this;
    }

    public function removeTFraproformaAux(TFraproformaAux $tFraproformaAux): self
    {
        if ($this->tFraproformaAuxes->contains($tFraproformaAux)) {
            $this->tFraproformaAuxes->removeElement($tFraproformaAux);
            // set the owning side to null (unless already changed)
            if ($tFraproformaAux->getNumProforma() === $this) {
                $tFraproformaAux->setNumProforma(null);
            }
        }

        return $this;
    }

    public function getMetodePag(): ?TMetodePag
    {
        return $this->metodePag;
    }

    public function setMetodePag(?TMetodePag $metodePag): self
    {
        $this->metodePag = $metodePag;

        return $this;
    }

    public function getNumAutor(): ?Tautorspresup
    {
        return $this->numAutor;
    }

    public function setNumAutor(?Tautorspresup $numAutor): self
    {
        $this->numAutor = $numAutor;

        return $this;
    }

    public function getNumAutorProforma(): ?Tautorspresup
    {
        return $this->numAutorProforma;
    }

    public function setNumAutorProforma(?Tautorspresup $numAutorProforma): self
    {
        $this->numAutorProforma = $numAutorProforma;

        return $this;
    }

    /**
     * @return Collection|TFraproformaPlazos[]
     */
    public function getTFraproformaPlazos(): Collection
    {
        return $this->tFraproformaPlazos;
    }

    public function addTFraproformaPlazo(TFraproformaPlazos $tFraproformaPlazo): self
    {
        if (!$this->tFraproformaPlazos->contains($tFraproformaPlazo)) {
            $this->tFraproformaPlazos[] = $tFraproformaPlazo;
            $tFraproformaPlazo->setNumFraproforma($this);
        }

        return $this;
    }

    public function removeTFraproformaPlazo(TFraproformaPlazos $tFraproformaPlazo): self
    {
        if ($this->tFraproformaPlazos->contains($tFraproformaPlazo)) {
            $this->tFraproformaPlazos->removeElement($tFraproformaPlazo);
            // set the owning side to null (unless already changed)
            if ($tFraproformaPlazo->getNumFraproforma() === $this) {
                $tFraproformaPlazo->setNumFraproforma(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TFraproformaVto[]
     */
    public function getTFraproformaVtos(): Collection
    {
        return $this->tFraproformaVtos;
    }

    public function addTFraproformaVto(TFraproformaVto $tFraproformaVto): self
    {
        if (!$this->tFraproformaVtos->contains($tFraproformaVto)) {
            $this->tFraproformaVtos[] = $tFraproformaVto;
            $tFraproformaVto->setNumProforma($this);
        }

        return $this;
    }

    public function removeTFraproformaVto(TFraproformaVto $tFraproformaVto): self
    {
        if ($this->tFraproformaVtos->contains($tFraproformaVto)) {
            $this->tFraproformaVtos->removeElement($tFraproformaVto);
            // set the owning side to null (unless already changed)
            if ($tFraproformaVto->getNumProforma() === $this) {
                $tFraproformaVto->setNumProforma(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TOrdreTreball[]
     */
    public function getTOrdreTreballs(): Collection
    {
        return $this->tOrdreTreballs;
    }

    public function addTOrdreTreball(TOrdreTreball $tOrdreTreball): self
    {
        if (!$this->tOrdreTreballs->contains($tOrdreTreball)) {
            $this->tOrdreTreballs[] = $tOrdreTreball;
            $tOrdreTreball->setNumFraproforma($this);
        }

        return $this;
    }

    public function removeTOrdreTreball(TOrdreTreball $tOrdreTreball): self
    {
        if ($this->tOrdreTreballs->contains($tOrdreTreball)) {
            $this->tOrdreTreballs->removeElement($tOrdreTreball);
            // set the owning side to null (unless already changed)
            if ($tOrdreTreball->getNumFraproforma() === $this) {
                $tOrdreTreball->setNumFraproforma(null);
            }
        }

        return $this;
    }


}
