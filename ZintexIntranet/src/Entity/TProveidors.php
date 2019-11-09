<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TProveidors
 *
 * @ORM\Table(name="t_proveidors")
 * @ORM\Entity
 */
class TProveidors
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Prov", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Codi_Prov", type="string", length=50, nullable=true)
     */
    private $codiProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NIF_Prov", type="string", length=50, nullable=true)
     */
    private $nifProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Proveidor", type="string", length=75, nullable=true)
     */
    private $proveidor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Proveidor_Com", type="string", length=75, nullable=true)
     */
    private $proveidorCom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Tract_Prov", type="integer", nullable=true)
     */
    private $tractProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Prov", type="string", length=50, nullable=true)
     */
    private $nomProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cognom_Prov", type="string", length=50, nullable=true)
     */
    private $cognomProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Carrec_Prov", type="string", length=50, nullable=true)
     */
    private $carrecProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dir_Prov", type="string", length=1000, nullable=true)
     */
    private $dirProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodP_Prov", type="string", length=10, nullable=true)
     */
    private $codpProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pob_Prov", type="string", length=50, nullable=true)
     */
    private $pobProv;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Pais_Prov", type="integer", nullable=true)
     */
    private $paisProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tel_Prov", type="string", length=12, nullable=true)
     */
    private $telProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Fax_Prov", type="string", length=12, nullable=true)
     */
    private $faxProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Mob_Prov", type="string", length=12, nullable=true)
     */
    private $mobProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email_Prov", type="string", length=100, nullable=true)
     */
    private $emailProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Web_Prov", type="string", length=50, nullable=true)
     */
    private $webProv;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Met_Pag", type="integer", nullable=true)
     */
    private $metPag;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Inst_Pag", type="integer", nullable=true)
     */
    private $instPag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dia_Pag", type="string", length=2, nullable=true)
     */
    private $diaPag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CC_Prov", type="string", length=20, nullable=true)
     */
    private $ccProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Observacions_Prov", type="string", length=2000, nullable=true)
     */
    private $observacionsProv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Activitat_Prov", type="string", length=1000, nullable=true)
     */
    private $activitatProv;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Mailing", type="boolean", nullable=true)
     */
    private $mailing;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Stock", type="boolean", nullable=true)
     */
    private $stock;

    public function getIdProv(): ?int
    {
        return $this->idProv;
    }

    public function getCodiProv(): ?string
    {
        return $this->codiProv;
    }

    public function setCodiProv(?string $codiProv): self
    {
        $this->codiProv = $codiProv;

        return $this;
    }

    public function getNifProv(): ?string
    {
        return $this->nifProv;
    }

    public function setNifProv(?string $nifProv): self
    {
        $this->nifProv = $nifProv;

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

    public function getProveidorCom(): ?string
    {
        return $this->proveidorCom;
    }

    public function setProveidorCom(?string $proveidorCom): self
    {
        $this->proveidorCom = $proveidorCom;

        return $this;
    }

    public function getTractProv(): ?int
    {
        return $this->tractProv;
    }

    public function setTractProv(?int $tractProv): self
    {
        $this->tractProv = $tractProv;

        return $this;
    }

    public function getNomProv(): ?string
    {
        return $this->nomProv;
    }

    public function setNomProv(?string $nomProv): self
    {
        $this->nomProv = $nomProv;

        return $this;
    }

    public function getCognomProv(): ?string
    {
        return $this->cognomProv;
    }

    public function setCognomProv(?string $cognomProv): self
    {
        $this->cognomProv = $cognomProv;

        return $this;
    }

    public function getCarrecProv(): ?string
    {
        return $this->carrecProv;
    }

    public function setCarrecProv(?string $carrecProv): self
    {
        $this->carrecProv = $carrecProv;

        return $this;
    }

    public function getDirProv(): ?string
    {
        return $this->dirProv;
    }

    public function setDirProv(?string $dirProv): self
    {
        $this->dirProv = $dirProv;

        return $this;
    }

    public function getCodpProv(): ?string
    {
        return $this->codpProv;
    }

    public function setCodpProv(?string $codpProv): self
    {
        $this->codpProv = $codpProv;

        return $this;
    }

    public function getPobProv(): ?string
    {
        return $this->pobProv;
    }

    public function setPobProv(?string $pobProv): self
    {
        $this->pobProv = $pobProv;

        return $this;
    }

    public function getPaisProv(): ?int
    {
        return $this->paisProv;
    }

    public function setPaisProv(?int $paisProv): self
    {
        $this->paisProv = $paisProv;

        return $this;
    }

    public function getTelProv(): ?string
    {
        return $this->telProv;
    }

    public function setTelProv(?string $telProv): self
    {
        $this->telProv = $telProv;

        return $this;
    }

    public function getFaxProv(): ?string
    {
        return $this->faxProv;
    }

    public function setFaxProv(?string $faxProv): self
    {
        $this->faxProv = $faxProv;

        return $this;
    }

    public function getMobProv(): ?string
    {
        return $this->mobProv;
    }

    public function setMobProv(?string $mobProv): self
    {
        $this->mobProv = $mobProv;

        return $this;
    }

    public function getEmailProv(): ?string
    {
        return $this->emailProv;
    }

    public function setEmailProv(?string $emailProv): self
    {
        $this->emailProv = $emailProv;

        return $this;
    }

    public function getWebProv(): ?string
    {
        return $this->webProv;
    }

    public function setWebProv(?string $webProv): self
    {
        $this->webProv = $webProv;

        return $this;
    }

    public function getMetPag(): ?int
    {
        return $this->metPag;
    }

    public function setMetPag(?int $metPag): self
    {
        $this->metPag = $metPag;

        return $this;
    }

    public function getInstPag(): ?int
    {
        return $this->instPag;
    }

    public function setInstPag(?int $instPag): self
    {
        $this->instPag = $instPag;

        return $this;
    }

    public function getDiaPag(): ?string
    {
        return $this->diaPag;
    }

    public function setDiaPag(?string $diaPag): self
    {
        $this->diaPag = $diaPag;

        return $this;
    }

    public function getCcProv(): ?string
    {
        return $this->ccProv;
    }

    public function setCcProv(?string $ccProv): self
    {
        $this->ccProv = $ccProv;

        return $this;
    }

    public function getObservacionsProv(): ?string
    {
        return $this->observacionsProv;
    }

    public function setObservacionsProv(?string $observacionsProv): self
    {
        $this->observacionsProv = $observacionsProv;

        return $this;
    }

    public function getActivitatProv(): ?string
    {
        return $this->activitatProv;
    }

    public function setActivitatProv(?string $activitatProv): self
    {
        $this->activitatProv = $activitatProv;

        return $this;
    }

    public function getMailing(): ?bool
    {
        return $this->mailing;
    }

    public function setMailing(?bool $mailing): self
    {
        $this->mailing = $mailing;

        return $this;
    }

    public function getStock(): ?bool
    {
        return $this->stock;
    }

    public function setStock(?bool $stock): self
    {
        $this->stock = $stock;

        return $this;
    }


}
