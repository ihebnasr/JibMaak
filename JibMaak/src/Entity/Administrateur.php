<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrateur
 *
 * @ORM\Table(name="administrateur")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\AdministrateurRepository")
 */
class Administrateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="idAdmin", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idadmin;

    /**
     * @var string
     *
     * @ORM\Column(name="Nomadmin", type="string", length=50, nullable=false)
     */
    private $nomadmin;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenomadmin", type="string", length=50, nullable=false)
     */
    private $prenomadmin;

    /**
     * @var string
     *
     * @ORM\Column(name="telAdmin", type="string", length=50, nullable=false)
     */
    private $teladmin;

    public function getIdadmin(): ?int
    {
        return $this->idadmin;
    }

    public function getNomadmin(): ?string
    {
        return $this->nomadmin;
    }

    public function setNomadmin(string $nomadmin): self
    {
        $this->nomadmin = $nomadmin;

        return $this;
    }

    public function getPrenomadmin(): ?string
    {
        return $this->prenomadmin;
    }

    public function setPrenomadmin(string $prenomadmin): self
    {
        $this->prenomadmin = $prenomadmin;

        return $this;
    }

    public function getTeladmin(): ?string
    {
        return $this->teladmin;
    }

    public function setTeladmin(string $teladmin): self
    {
        $this->teladmin = $teladmin;

        return $this;
    }


}
