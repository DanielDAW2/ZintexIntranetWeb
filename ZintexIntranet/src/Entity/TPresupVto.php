<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPresupVto
 *
 * @ORM\Table(name="t_presup_vto")
 * @ORM\Entity
 */
class TPresupVto
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Presup_Vto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPresupVto;



    /**
     * @var string|null
     *
     * @ORM\Column(name="Concepte_Vto", type="string", length=200, nullable=true)
     */
    private $concepteVto;



    /**
     * @var string|null
     *
     * @ORM\Column(name="InstPag_Aux", type="string", length=1000, nullable=true)
     */
    private $instpagAux;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TPresup", inversedBy="tPresupVtos")
     * @ORM\JoinColumn(nullable=false, referencedColumnName="Id_Presup")
     */
    private $numPresup;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TinstrumentPag")
     * @ORM\JoinColumn(nullable=false, referencedColumnName="Id_Inst_Pag")
     */
    private $instpag;






    public function getIdPresupVto(): ?int
    {
        return $this->idPresupVto;
    }


    public function getConcepteVto(): ?string
    {
        return $this->concepteVto;
    }

    public function setConcepteVto(?string $concepteVto): self
    {
        $this->concepteVto = $concepteVto;

        return $this;
    }


    public function getInstpagAux(): ?string
    {
        return $this->instpagAux;
    }

    public function setInstpagAux(?string $instpagAux): self
    {
        $this->instpagAux = $instpagAux;

        return $this;
    }

    public function getNumPresup(): ?TPresup
    {
        return $this->numPresup;
    }

    public function setNumPresup(?TPresup $numPresup): self
    {
        $this->numPresup = $numPresup;

        return $this;
    }

    public function getInstpag(): ?TinstrumentPag
    {
        return $this->instpag;
    }

    public function setInstpag(?TinstrumentPag $instpag): self
    {
        $this->instpag = $instpag;

        return $this;
    }


}
