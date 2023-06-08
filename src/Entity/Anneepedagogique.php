<?php

namespace App\Entity;

use App\Repository\AnneepedagogiqueRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AnneepedagogiqueRepository::class)
 */
class Anneepedagogique
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $libelleAnnee;

    /**
     * @ORM\OneToOne(targetEntity=Classe::class, cascade={"persist", "remove"})
     */
    private $classe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleAnnee(): ?string
    {
        return $this->libelleAnnee;
    }

    public function setLibelleAnnee(string $libelleAnnee): self
    {
        $this->libelleAnnee = $libelleAnnee;

        return $this;
    }

    public function getClasse(): ?Classe
    {
        return $this->classe;
    }

    public function setClasse(?Classe $classe): self
    {
        $this->classe = $classe;

        return $this;
    }
}
