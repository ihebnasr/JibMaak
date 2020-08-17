<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\CategoriesRepository")
 */
class Categories
{
    /**
     * @var int
     *
     * @ORM\Column(name="idcate", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcate;

    /**
     * @var string
     *
     * @ORM\Column(name="designatio_cate", type="string", length=50, nullable=false)
     */
    private $designatioCate;

    public function getIdcate(): ?int
    {
        return $this->idcate;
    }

    public function getDesignatioCate(): ?string
    {
        return $this->designatioCate;
    }

    public function setDesignatioCate(string $designatioCate): self
    {
        $this->designatioCate = $designatioCate;

        return $this;
    }


}
