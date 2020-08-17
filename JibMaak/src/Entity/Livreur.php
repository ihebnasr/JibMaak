<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livreur
 *
 * @ORM\Table(name="livreur")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\livreurRepository")
 */
class Livreur
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdLiv", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idliv;

    /**
     * @var string
     *
     * @ORM\Column(name="NomLiv", type="string", length=50, nullable=false)
     */
    private $nomliv;

    /**
     * @var string
     *
     * @ORM\Column(name="PrenomLiv", type="string", length=50, nullable=false)
     */
    private $prenomliv;

    /**
     * @var int
     *
     * @ORM\Column(name="telLiv", type="integer", nullable=false)
     */
    private $telliv;

    public function getIdliv(): ?int
    {
        return $this->idliv;
    }

    public function getNomliv(): ?string
    {
        return $this->nomliv;
    }

    public function setNomliv(string $nomliv): self
    {
        $this->nomliv = $nomliv;

        return $this;
    }

    public function getPrenomliv(): ?string
    {
        return $this->prenomliv;
    }

    public function setPrenomliv(string $prenomliv): self
    {
        $this->prenomliv = $prenomliv;

        return $this;
    }

    public function getTelliv(): ?int
    {
        return $this->telliv;
    }

    public function setTelliv(int $telliv): self
    {
        $this->telliv = $telliv;

        return $this;
    }


}
