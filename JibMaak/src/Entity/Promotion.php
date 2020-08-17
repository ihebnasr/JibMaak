<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion", indexes={@ORM\Index(name="idart", columns={"idart"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\PromotionRepository")
 */
class Promotion
{
    /**
     * @var int
     *
     * @ORM\Column(name="idpromo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpromo;

    /**
     * @var string
     *
     * @ORM\Column(name="designation_promo", type="string", length=50, nullable=false)
     */
    private $designationPromo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="datetime", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="datetime", nullable=false)
     */
    private $dateFin;

    /**
     * @var \Article
     *
     * @ORM\ManyToOne(targetEntity="Article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idart", referencedColumnName="idart")
     * })
     */
    private $idart;

    public function getIdpromo(): ?int
    {
        return $this->idpromo;
    }

    public function getDesignationPromo(): ?string
    {
        return $this->designationPromo;
    }

    public function setDesignationPromo(string $designationPromo): self
    {
        $this->designationPromo = $designationPromo;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getIdart(): ?Article
    {
        return $this->idart;
    }

    public function setIdart(?Article $idart): self
    {
        $this->idart = $idart;

        return $this;
    }


}
