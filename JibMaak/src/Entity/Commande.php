<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="idclient", columns={"idclient"}), @ORM\Index(name="idliv", columns={"idliv"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\commandeRepository")
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="idcmd", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcmd;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_total_cmd", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $prixTotalCmd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_cmd", type="date", nullable=false)
     */
    private $dateCmd;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_cmd", type="string", length=50, nullable=false)
     */
    private $adresseCmd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_prevu", type="date", nullable=false)
     */
    private $datePrevu;

    /**
     * @var int
     *
     * @ORM\Column(name="etat_cmd", type="integer", nullable=false)
     */
    private $etatCmd;

    /**
     * @var \Clients
     *
     * @ORM\ManyToOne(targetEntity="Clients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idclient", referencedColumnName="idclient")
     * })
     */
    private $idclient;

    /**
     * @var \Livreur
     *
     * @ORM\ManyToOne(targetEntity="Livreur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idliv", referencedColumnName="IdLiv")
     * })
     */
    private $idliv;

    public function getIdcmd(): ?int
    {
        return $this->idcmd;
    }

    public function getPrixTotalCmd(): ?string
    {
        return $this->prixTotalCmd;
    }

    public function setPrixTotalCmd(string $prixTotalCmd): self
    {
        $this->prixTotalCmd = $prixTotalCmd;

        return $this;
    }

    public function getDateCmd(): ?\DateTimeInterface
    {
        return $this->dateCmd;
    }

    public function setDateCmd(\DateTimeInterface $dateCmd): self
    {
        $this->dateCmd = $dateCmd;

        return $this;
    }

    public function getAdresseCmd(): ?string
    {
        return $this->adresseCmd;
    }

    public function setAdresseCmd(string $adresseCmd): self
    {
        $this->adresseCmd = $adresseCmd;

        return $this;
    }

    public function getDatePrevu(): ?\DateTimeInterface
    {
        return $this->datePrevu;
    }

    public function setDatePrevu(\DateTimeInterface $datePrevu): self
    {
        $this->datePrevu = $datePrevu;

        return $this;
    }

    public function getEtatCmd(): ?int
    {
        return $this->etatCmd;
    }

    public function setEtatCmd(int $etatCmd): self
    {
        $this->etatCmd = $etatCmd;

        return $this;
    }

    public function getIdclient(): ?Clients
    {
        return $this->idclient;
    }

    public function setIdclient(?Clients $idclient): self
    {
        $this->idclient = $idclient;

        return $this;
    }

    public function getIdliv(): ?Livreur
    {
        return $this->idliv;
    }

    public function setIdliv(?Livreur $idliv): self
    {
        $this->idliv = $idliv;

        return $this;
    }


}
