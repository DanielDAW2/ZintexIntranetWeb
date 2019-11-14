<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * TOrdreTreball
 *
 * @ORM\Table(name="t_ordre_treball")
 * @ORM\Entity
 */
class TOrdreTreball
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Ordre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdre;



    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Client", type="string", length=150, nullable=true)
     */
    private $nomClient;



    /**
     * @var string|null
     *
     * @ORM\Column(name="Num_SubOrdre", type="string", length=255, nullable=true)
     */
    private $numSubordre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Campanya", type="string", length=255, nullable=true)
     */
    private $campanya;



    /**
     * @var string|null
     *
     * @ORM\Column(name="Descrip_Ordre_Treball", type="string", length=255, nullable=true)
     */
    private $descripOrdreTreball;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Proveidor", type="string", length=100, nullable=true)
     */
    private $proveidor;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Entrega_Disseny", type="datetime", nullable=true)
     */
    private $entregaDisseny;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Sortida_Calandra", type="datetime", nullable=true)
     */
    private $sortidaCalandra;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Sortida_Impressio", type="datetime", nullable=true)
     */
    private $sortidaImpressio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Sortida_Produccio", type="datetime", nullable=true)
     */
    private $sortidaProduccio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Entrega_Client", type="datetime", nullable=true)
     */
    private $entregaClient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dissenyador", type="string", length=50, nullable=true)
     */
    private $dissenyador;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Posta_Marxa", type="string", length=50, nullable=true)
     */
    private $postaMarxa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Calandra", type="string", length=50, nullable=true)
     */
    private $calandra;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Anonim", type="boolean", nullable=true)
     */
    private $anonim;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Adreça_Entrega", type="boolean", nullable=true)
     */
    private $adre�aEntrega;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Recull_Client", type="boolean", nullable=true)
     */
    private $recullClient;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Ports_Deguts", type="boolean", nullable=true)
     */
    private $portsDeguts;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Servei_Urgent_8_30", type="boolean", nullable=true)
     */
    private $serveiUrgent830;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Servei_Urgent_10", type="boolean", nullable=true)
     */
    private $serveiUrgent10;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Servei_Urgent_12", type="boolean", nullable=true)
     */
    private $serveiUrgent12;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Servei_Urgent_14", type="boolean", nullable=true)
     */
    private $serveiUrgent14;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Observacions_Disseny", type="string", length=255, nullable=true)
     */
    private $observacionsDisseny;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Observacions_Produccio", type="string", length=255, nullable=true)
     */
    private $observacionsProduccio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Persona", type="string", length=50, nullable=true)
     */
    private $persona;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Resum_Unitats", type="string", length=255, nullable=true)
     */
    private $resumUnitats;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Resum_Productes", type="string", length=255, nullable=true)
     */
    private $resumProductes;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Unitats", type="integer", nullable=true)
     */
    private $unitats;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TClients", inversedBy="tOrdreTreballs")
     * @ORM\JoinColumn(referencedColumnName="Id_Cli")
     */
    private $numClient;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TGrupProducte", inversedBy="tOrdreTreballs")
     * @ORM\JoinColumn(referencedColumnName="Id_GrupProducte")
     */
    private $grupProducte;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TFraProforma", inversedBy="tOrdreTreballs")
     * @ORM\JoinColumn(referencedColumnName="Id_FraProf")
     */
    private $numFraproforma;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TOrdreTreballAux", mappedBy="numOrdreTreball", orphanRemoval=true)
     * @ORM\JoinColumn(referencedColumnName="Id_Ordre_Treball_Aux")
     */
    private $tOrdreTreballAuxes;

    public function __construct()
    {
        $this->tOrdreTreballAuxes = new ArrayCollection();
    }

    public function getIdOrdre(): ?int
    {
        return $this->idOrdre;
    }


    public function getNomClient(): ?string
    {
        return $this->nomClient;
    }

    public function setNomClient(?string $nomClient): self
    {
        $this->nomClient = $nomClient;

        return $this;
    }


    public function getNumSubordre(): ?string
    {
        return $this->numSubordre;
    }

    public function setNumSubordre(?string $numSubordre): self
    {
        $this->numSubordre = $numSubordre;

        return $this;
    }

    public function getCampanya(): ?string
    {
        return $this->campanya;
    }

    public function setCampanya(?string $campanya): self
    {
        $this->campanya = $campanya;

        return $this;
    }


    public function getDescripOrdreTreball(): ?string
    {
        return $this->descripOrdreTreball;
    }

    public function setDescripOrdreTreball(?string $descripOrdreTreball): self
    {
        $this->descripOrdreTreball = $descripOrdreTreball;

        return $this;
    }

    public function getProveidor(): ?string
    {
        return $this->proveidor;
    }

    public function setProveidor(?string $proveidor): self
    {
        $this->proveidor = $proveidor;

        return $this;
    }

    public function getEntregaDisseny(): ?\DateTimeInterface
    {
        return $this->entregaDisseny;
    }

    public function setEntregaDisseny(?\DateTimeInterface $entregaDisseny): self
    {
        $this->entregaDisseny = $entregaDisseny;

        return $this;
    }

    public function getSortidaCalandra(): ?\DateTimeInterface
    {
        return $this->sortidaCalandra;
    }

    public function setSortidaCalandra(?\DateTimeInterface $sortidaCalandra): self
    {
        $this->sortidaCalandra = $sortidaCalandra;

        return $this;
    }

    public function getSortidaImpressio(): ?\DateTimeInterface
    {
        return $this->sortidaImpressio;
    }

    public function setSortidaImpressio(?\DateTimeInterface $sortidaImpressio): self
    {
        $this->sortidaImpressio = $sortidaImpressio;

        return $this;
    }

    public function getSortidaProduccio(): ?\DateTimeInterface
    {
        return $this->sortidaProduccio;
    }

    public function setSortidaProduccio(?\DateTimeInterface $sortidaProduccio): self
    {
        $this->sortidaProduccio = $sortidaProduccio;

        return $this;
    }

    public function getEntregaClient(): ?\DateTimeInterface
    {
        return $this->entregaClient;
    }

    public function setEntregaClient(?\DateTimeInterface $entregaClient): self
    {
        $this->entregaClient = $entregaClient;

        return $this;
    }

    public function getDissenyador(): ?string
    {
        return $this->dissenyador;
    }

    public function setDissenyador(?string $dissenyador): self
    {
        $this->dissenyador = $dissenyador;

        return $this;
    }

    public function getPostaMarxa(): ?string
    {
        return $this->postaMarxa;
    }

    public function setPostaMarxa(?string $postaMarxa): self
    {
        $this->postaMarxa = $postaMarxa;

        return $this;
    }

    public function getCalandra(): ?string
    {
        return $this->calandra;
    }

    public function setCalandra(?string $calandra): self
    {
        $this->calandra = $calandra;

        return $this;
    }

    public function getAnonim(): ?bool
    {
        return $this->anonim;
    }

    public function setAnonim(?bool $anonim): self
    {
        $this->anonim = $anonim;

        return $this;
    }

    public function getAdre�aEntrega(): ?bool
    {
        return $this->adre�aEntrega;
    }

    public function setAdre�aEntrega(?bool $adre�aEntrega): self
    {
        $this->adre�aEntrega = $adre�aEntrega;

        return $this;
    }

    public function getRecullClient(): ?bool
    {
        return $this->recullClient;
    }

    public function setRecullClient(?bool $recullClient): self
    {
        $this->recullClient = $recullClient;

        return $this;
    }

    public function getPortsDeguts(): ?bool
    {
        return $this->portsDeguts;
    }

    public function setPortsDeguts(?bool $portsDeguts): self
    {
        $this->portsDeguts = $portsDeguts;

        return $this;
    }

    public function getServeiUrgent830(): ?bool
    {
        return $this->serveiUrgent830;
    }

    public function setServeiUrgent830(?bool $serveiUrgent830): self
    {
        $this->serveiUrgent830 = $serveiUrgent830;

        return $this;
    }

    public function getServeiUrgent10(): ?bool
    {
        return $this->serveiUrgent10;
    }

    public function setServeiUrgent10(?bool $serveiUrgent10): self
    {
        $this->serveiUrgent10 = $serveiUrgent10;

        return $this;
    }

    public function getServeiUrgent12(): ?bool
    {
        return $this->serveiUrgent12;
    }

    public function setServeiUrgent12(?bool $serveiUrgent12): self
    {
        $this->serveiUrgent12 = $serveiUrgent12;

        return $this;
    }

    public function getServeiUrgent14(): ?bool
    {
        return $this->serveiUrgent14;
    }

    public function setServeiUrgent14(?bool $serveiUrgent14): self
    {
        $this->serveiUrgent14 = $serveiUrgent14;

        return $this;
    }

    public function getObservacionsDisseny(): ?string
    {
        return $this->observacionsDisseny;
    }

    public function setObservacionsDisseny(?string $observacionsDisseny): self
    {
        $this->observacionsDisseny = $observacionsDisseny;

        return $this;
    }

    public function getObservacionsProduccio(): ?string
    {
        return $this->observacionsProduccio;
    }

    public function setObservacionsProduccio(?string $observacionsProduccio): self
    {
        $this->observacionsProduccio = $observacionsProduccio;

        return $this;
    }

    public function getPersona(): ?string
    {
        return $this->persona;
    }

    public function setPersona(?string $persona): self
    {
        $this->persona = $persona;

        return $this;
    }

    public function getResumUnitats(): ?string
    {
        return $this->resumUnitats;
    }

    public function setResumUnitats(?string $resumUnitats): self
    {
        $this->resumUnitats = $resumUnitats;

        return $this;
    }

    public function getResumProductes(): ?string
    {
        return $this->resumProductes;
    }

    public function setResumProductes(?string $resumProductes): self
    {
        $this->resumProductes = $resumProductes;

        return $this;
    }

    public function getUnitats(): ?int
    {
        return $this->unitats;
    }

    public function setUnitats(?int $unitats): self
    {
        $this->unitats = $unitats;

        return $this;
    }

    public function getNumClient(): ?TClients
    {
        return $this->numClient;
    }

    public function setNumClient(?TClients $numClient): self
    {
        $this->numClient = $numClient;

        return $this;
    }

    public function getGrupProducte(): ?TGrupProducte
    {
        return $this->grupProducte;
    }

    public function setGrupProducte(?TGrupProducte $grupProducte): self
    {
        $this->grupProducte = $grupProducte;

        return $this;
    }

    public function getNumFraproforma(): ?TFraProforma
    {
        return $this->numFraproforma;
    }

    public function setNumFraproforma(?TFraProforma $numFraproforma): self
    {
        $this->numFraproforma = $numFraproforma;

        return $this;
    }

    /**
     * @return Collection|TOrdreTreballAux[]
     */
    public function getTOrdreTreballAuxes(): Collection
    {
        return $this->tOrdreTreballAuxes;
    }

    public function addTOrdreTreballAux(TOrdreTreballAux $tOrdreTreballAux): self
    {
        if (!$this->tOrdreTreballAuxes->contains($tOrdreTreballAux)) {
            $this->tOrdreTreballAuxes[] = $tOrdreTreballAux;
            $tOrdreTreballAux->setNumOrdreTreball($this);
        }

        return $this;
    }

    public function removeTOrdreTreballAux(TOrdreTreballAux $tOrdreTreballAux): self
    {
        if ($this->tOrdreTreballAuxes->contains($tOrdreTreballAux)) {
            $this->tOrdreTreballAuxes->removeElement($tOrdreTreballAux);
            // set the owning side to null (unless already changed)
            if ($tOrdreTreballAux->getNumOrdreTreball() === $this) {
                $tOrdreTreballAux->setNumOrdreTreball(null);
            }
        }

        return $this;
    }


}
