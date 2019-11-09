<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPresup
 *
 * @ORM\Table(name="t_presup")
 * @ORM\Entity
 */
class TPresup
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Presup", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Num_Presup", type="string", length=50, nullable=true)
     */
    private $numPresup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Client_Presup", type="integer", nullable=true)
     */
    private $clientPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Marca_Cli", type="string", length=255, nullable=true)
     */
    private $marcaCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Persona_Presup", type="string", length=255, nullable=true)
     */
    private $personaPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dades_Client_Presup", type="string", length=1000, nullable=true)
     */
    private $dadesClientPresup;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Presup", type="datetime", nullable=true)
     */
    private $dataPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Text_Data_Presup", type="string", length=50, nullable=true)
     */
    private $textDataPresup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Autor_Presup", type="integer", nullable=true)
     */
    private $autorPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FraProf_Presup", type="string", length=50, nullable=true)
     */
    private $fraprofPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Fra_Presup", type="string", length=50, nullable=true)
     */
    private $fraPresup;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Deneg_Presup", type="boolean", nullable=true)
     */
    private $denegPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NRef1", type="string", length=150, nullable=true)
     */
    private $nref1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NRef2", type="string", length=150, nullable=true)
     */
    private $nref2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TerminiE_Presup", type="string", length=200, nullable=true)
     */
    private $terminiePresup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MetPag_Presup", type="integer", nullable=true)
     */
    private $metpagPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MetPag_Aux", type="string", length=200, nullable=true)
     */
    private $metpagAux;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ObservAux_Presup", type="string", length=1000, nullable=true)
     */
    private $observauxPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ObservVto_Presup", type="string", length=1000, nullable=true)
     */
    private $observvtoPresup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Titol_PlazoEntrega_Aux", type="string", length=1000, nullable=true)
     */
    private $titolPlazoentregaAux;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NoUrgente_Titol_Aux", type="string", length=1000, nullable=true)
     */
    private $nourgenteTitolAux;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NoUrgente_Descrip_Aux", type="string", length=1000, nullable=true)
     */
    private $nourgenteDescripAux;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Urgente_Titol_Aux", type="string", length=1000, nullable=true)
     */
    private $urgenteTitolAux;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Urgente_Descrip1_Aux", type="string", length=1000, nullable=true)
     */
    private $urgenteDescrip1Aux;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Urgente_Recargo_Aux", type="string", length=1000, nullable=true)
     */
    private $urgenteRecargoAux;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Urgente_Descrip2_Aux", type="string", length=1000, nullable=true)
     */
    private $urgenteDescrip2Aux;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Urgente_Descrip3_Aux", type="string", length=1000, nullable=true)
     */
    private $urgenteDescrip3Aux;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PedidoSup_Titol_Aux", type="string", length=1000, nullable=true)
     */
    private $pedidosupTitolAux;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PedidoSup_Descrip_Aux", type="string", length=1000, nullable=true)
     */
    private $pedidosupDescripAux;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Data_Alta", type="datetime", nullable=true)
     */
    private $dataAlta;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hora_Alta", type="datetime", nullable=true)
     */
    private $horaAlta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Seguiment", type="string", length=1000, nullable=true)
     */
    private $seguiment;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Comercial", type="integer", nullable=true)
     */
    private $comercial;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Total_Presup", type="float", precision=10, scale=0, nullable=true)
     */
    private $totalPresup;

    public function getIdPresup(): ?int
    {
        return $this->idPresup;
    }

    public function getNumPresup(): ?string
    {
        return $this->numPresup;
    }

    public function setNumPresup(?string $numPresup): self
    {
        $this->numPresup = $numPresup;

        return $this;
    }

    public function getClientPresup(): ?int
    {
        return $this->clientPresup;
    }

    public function setClientPresup(?int $clientPresup): self
    {
        $this->clientPresup = $clientPresup;

        return $this;
    }

    public function getMarcaCli(): ?string
    {
        return $this->marcaCli;
    }

    public function setMarcaCli(?string $marcaCli): self
    {
        $this->marcaCli = $marcaCli;

        return $this;
    }

    public function getPersonaPresup(): ?string
    {
        return $this->personaPresup;
    }

    public function setPersonaPresup(?string $personaPresup): self
    {
        $this->personaPresup = $personaPresup;

        return $this;
    }

    public function getDadesClientPresup(): ?string
    {
        return $this->dadesClientPresup;
    }

    public function setDadesClientPresup(?string $dadesClientPresup): self
    {
        $this->dadesClientPresup = $dadesClientPresup;

        return $this;
    }

    public function getDataPresup(): ?\DateTimeInterface
    {
        return $this->dataPresup;
    }

    public function setDataPresup(?\DateTimeInterface $dataPresup): self
    {
        $this->dataPresup = $dataPresup;

        return $this;
    }

    public function getTextDataPresup(): ?string
    {
        return $this->textDataPresup;
    }

    public function setTextDataPresup(?string $textDataPresup): self
    {
        $this->textDataPresup = $textDataPresup;

        return $this;
    }

    public function getAutorPresup(): ?int
    {
        return $this->autorPresup;
    }

    public function setAutorPresup(?int $autorPresup): self
    {
        $this->autorPresup = $autorPresup;

        return $this;
    }

    public function getFraprofPresup(): ?string
    {
        return $this->fraprofPresup;
    }

    public function setFraprofPresup(?string $fraprofPresup): self
    {
        $this->fraprofPresup = $fraprofPresup;

        return $this;
    }

    public function getFraPresup(): ?string
    {
        return $this->fraPresup;
    }

    public function setFraPresup(?string $fraPresup): self
    {
        $this->fraPresup = $fraPresup;

        return $this;
    }

    public function getDenegPresup(): ?bool
    {
        return $this->denegPresup;
    }

    public function setDenegPresup(?bool $denegPresup): self
    {
        $this->denegPresup = $denegPresup;

        return $this;
    }

    public function getNref1(): ?string
    {
        return $this->nref1;
    }

    public function setNref1(?string $nref1): self
    {
        $this->nref1 = $nref1;

        return $this;
    }

    public function getNref2(): ?string
    {
        return $this->nref2;
    }

    public function setNref2(?string $nref2): self
    {
        $this->nref2 = $nref2;

        return $this;
    }

    public function getTerminiePresup(): ?string
    {
        return $this->terminiePresup;
    }

    public function setTerminiePresup(?string $terminiePresup): self
    {
        $this->terminiePresup = $terminiePresup;

        return $this;
    }

    public function getMetpagPresup(): ?int
    {
        return $this->metpagPresup;
    }

    public function setMetpagPresup(?int $metpagPresup): self
    {
        $this->metpagPresup = $metpagPresup;

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

    public function getObservauxPresup(): ?string
    {
        return $this->observauxPresup;
    }

    public function setObservauxPresup(?string $observauxPresup): self
    {
        $this->observauxPresup = $observauxPresup;

        return $this;
    }

    public function getObservvtoPresup(): ?string
    {
        return $this->observvtoPresup;
    }

    public function setObservvtoPresup(?string $observvtoPresup): self
    {
        $this->observvtoPresup = $observvtoPresup;

        return $this;
    }

    public function getTitolPlazoentregaAux(): ?string
    {
        return $this->titolPlazoentregaAux;
    }

    public function setTitolPlazoentregaAux(?string $titolPlazoentregaAux): self
    {
        $this->titolPlazoentregaAux = $titolPlazoentregaAux;

        return $this;
    }

    public function getNourgenteTitolAux(): ?string
    {
        return $this->nourgenteTitolAux;
    }

    public function setNourgenteTitolAux(?string $nourgenteTitolAux): self
    {
        $this->nourgenteTitolAux = $nourgenteTitolAux;

        return $this;
    }

    public function getNourgenteDescripAux(): ?string
    {
        return $this->nourgenteDescripAux;
    }

    public function setNourgenteDescripAux(?string $nourgenteDescripAux): self
    {
        $this->nourgenteDescripAux = $nourgenteDescripAux;

        return $this;
    }

    public function getUrgenteTitolAux(): ?string
    {
        return $this->urgenteTitolAux;
    }

    public function setUrgenteTitolAux(?string $urgenteTitolAux): self
    {
        $this->urgenteTitolAux = $urgenteTitolAux;

        return $this;
    }

    public function getUrgenteDescrip1Aux(): ?string
    {
        return $this->urgenteDescrip1Aux;
    }

    public function setUrgenteDescrip1Aux(?string $urgenteDescrip1Aux): self
    {
        $this->urgenteDescrip1Aux = $urgenteDescrip1Aux;

        return $this;
    }

    public function getUrgenteRecargoAux(): ?string
    {
        return $this->urgenteRecargoAux;
    }

    public function setUrgenteRecargoAux(?string $urgenteRecargoAux): self
    {
        $this->urgenteRecargoAux = $urgenteRecargoAux;

        return $this;
    }

    public function getUrgenteDescrip2Aux(): ?string
    {
        return $this->urgenteDescrip2Aux;
    }

    public function setUrgenteDescrip2Aux(?string $urgenteDescrip2Aux): self
    {
        $this->urgenteDescrip2Aux = $urgenteDescrip2Aux;

        return $this;
    }

    public function getUrgenteDescrip3Aux(): ?string
    {
        return $this->urgenteDescrip3Aux;
    }

    public function setUrgenteDescrip3Aux(?string $urgenteDescrip3Aux): self
    {
        $this->urgenteDescrip3Aux = $urgenteDescrip3Aux;

        return $this;
    }

    public function getPedidosupTitolAux(): ?string
    {
        return $this->pedidosupTitolAux;
    }

    public function setPedidosupTitolAux(?string $pedidosupTitolAux): self
    {
        $this->pedidosupTitolAux = $pedidosupTitolAux;

        return $this;
    }

    public function getPedidosupDescripAux(): ?string
    {
        return $this->pedidosupDescripAux;
    }

    public function setPedidosupDescripAux(?string $pedidosupDescripAux): self
    {
        $this->pedidosupDescripAux = $pedidosupDescripAux;

        return $this;
    }

    public function getDataAlta(): ?\DateTimeInterface
    {
        return $this->dataAlta;
    }

    public function setDataAlta(?\DateTimeInterface $dataAlta): self
    {
        $this->dataAlta = $dataAlta;

        return $this;
    }

    public function getHoraAlta(): ?\DateTimeInterface
    {
        return $this->horaAlta;
    }

    public function setHoraAlta(?\DateTimeInterface $horaAlta): self
    {
        $this->horaAlta = $horaAlta;

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

    public function getComercial(): ?int
    {
        return $this->comercial;
    }

    public function setComercial(?int $comercial): self
    {
        $this->comercial = $comercial;

        return $this;
    }

    public function getTotalPresup(): ?float
    {
        return $this->totalPresup;
    }

    public function setTotalPresup(?float $totalPresup): self
    {
        $this->totalPresup = $totalPresup;

        return $this;
    }


}
