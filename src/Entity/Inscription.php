<?php

namespace App\Entity;

use App\Repository\InscriptionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InscriptionRepository::class)
 */
class Inscription
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
    private $codeInscription;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant;

    /**
     * @ORM\ManyToOne(targetEntity=Classe::class, inversedBy="inscriptions")
     */
    private $classe;

    /**
     * @ORM\ManyToMany(targetEntity=Modalite::class, inversedBy="inscriptions")
     */
    private $modalite;

    /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $updatedAt;

    public function __construct()
    {
        $this->modalite = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeInscription(): ?string
    {
        return $this->codeInscription;
    }

    public function setCodeInscription(string $codeInscription): self
    {
        $this->codeInscription = $codeInscription;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

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

    /**
     * @return Collection<int, Modalite>
     */
    public function getModalite(): Collection
    {
        return $this->modalite;
    }

    public function addModalite(Modalite $modalite): self
    {
        if (!$this->modalite->contains($modalite)) {
            $this->modalite[] = $modalite;
        }

        return $this;
    }

    public function removeModalite(Modalite $modalite): self
    {
        $this->modalite->removeElement($modalite);

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
