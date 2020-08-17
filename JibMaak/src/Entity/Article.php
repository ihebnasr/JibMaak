<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article", indexes={@ORM\Index(name="idcate", columns={"idcate"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @var int
     *
     * @ORM\Column(name="idart", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idart;

    /**
     * @var string
     *
     * @ORM\Column(name="designation_art", type="string", length=50, nullable=false)
     */
    private $designationArt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecreation_art", type="date", nullable=false)
     */
    private $datecreationArt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modif_art", type="date", nullable=false)
     */
    private $dateModifArt;

    /**
     * @var int
     *
     * @ORM\Column(name="etat_art", type="integer", nullable=false)
     */
    private $etatArt;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=500, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="promo_art", type="decimal", precision=10, scale=3, nullable=false)
     */
    private $promoArt;

    /**
     * @var \Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcate", referencedColumnName="idcate")
     * })
     */
    private $idcate;

    public function getIdart(): ?int
    {
        return $this->idart;
    }

    public function getDesignationArt(): ?string
    {
        return $this->designationArt;
    }

    public function setDesignationArt(string $designationArt): self
    {
        $this->designationArt = $designationArt;

        return $this;
    }

    public function getDatecreationArt(): ?\DateTimeInterface
    {
        return $this->datecreationArt;
    }

    public function setDatecreationArt(\DateTimeInterface $datecreationArt): self
    {
        $this->datecreationArt = $datecreationArt;

        return $this;
    }

    public function getDateModifArt(): ?\DateTimeInterface
    {
        return $this->dateModifArt;
    }

    public function setDateModifArt(\DateTimeInterface $dateModifArt): self
    {
        $this->dateModifArt = $dateModifArt;

        return $this;
    }

    public function getEtatArt(): ?int
    {
        return $this->etatArt;
    }

    public function setEtatArt(int $etatArt): self
    {
        $this->etatArt = $etatArt;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getPromoArt(): ?string
    {
        return $this->promoArt;
    }

    public function setPromoArt(string $promoArt): self
    {
        $this->promoArt = $promoArt;

        return $this;
    }

    public function getIdcate(): ?Categories
    {
        return $this->idcate;
    }

    public function setIdcate(?Categories $idcate): self
    {
        $this->idcate = $idcate;

        return $this;
    }


}
