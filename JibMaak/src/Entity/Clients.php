<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clients
 *
 * @ORM\Table(name="clients")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ClientsRepository")
 */
class Clients
{
    /**
     * @var int
     *
     * @ORM\Column(name="idclient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idclient;

    /**
     * @var string
     *
     * @ORM\Column(name="NomCl", type="string", length=50, nullable=false)
     */
    private $nomcl;

    /**
     * @var string
     *
     * @ORM\Column(name="PrenomCL", type="string", length=50, nullable=false)
     */
    private $prenomcl;

    /**
     * @var int
     *
     * @ORM\Column(name="TelCL", type="integer", nullable=false)
     */
    private $telcl;

    /**
     * @var string
     *
     * @ORM\Column(name="AdressCL", type="string", length=50, nullable=false)
     */
    private $adresscl;

    public function getIdclient(): ?int
    {
        return $this->idclient;
    }

    public function getNomcl(): ?string
    {
        return $this->nomcl;
    }

    public function setNomcl(string $nomcl): self
    {
        $this->nomcl = $nomcl;

        return $this;
    }

    public function getPrenomcl(): ?string
    {
        return $this->prenomcl;
    }

    public function setPrenomcl(string $prenomcl): self
    {
        $this->prenomcl = $prenomcl;

        return $this;
    }

    public function getTelcl(): ?int
    {
        return $this->telcl;
    }

    public function setTelcl(int $telcl): self
    {
        $this->telcl = $telcl;

        return $this;
    }

    public function getAdresscl(): ?string
    {
        return $this->adresscl;
    }

    public function setAdresscl(string $adresscl): self
    {
        $this->adresscl = $adresscl;

        return $this;
    }


}
