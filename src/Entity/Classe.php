<?php

namespace App\Entity;

use App\Repository\ClasseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClasseRepository::class)
 */
class Classe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $libelle;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $effectifTotal;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $effectifFilles;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $effectigGarcons;

    /**
     * @ORM\OneToMany(targetEntity=Eleve::class, mappedBy="classe")
     */
    private $eleves;

    /**
     * @ORM\OneToMany(targetEntity=Inscription::class, mappedBy="classe")
     */
    private $inscriptions;

    /**
     * @ORM\ManyToMany(targetEntity=Matiere::class, inversedBy="classes")
     */
    private $matieres;

    public function __construct()
    {
        $this->eleves = new ArrayCollection();
        $this->inscriptions = new ArrayCollection();
        $this->matieres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getEffectifTotal(): ?int
    {
        return $this->effectifTotal;
    }

    public function setEffectifTotal(?int $effectifTotal): self
    {
        $this->effectifTotal = $effectifTotal;

        return $this;
    }

    public function getEffectifFilles(): ?int
    {
        return $this->effectifFilles;
    }

    public function setEffectifFilles(?int $effectifFilles): self
    {
        $this->effectifFilles = $effectifFilles;

        return $this;
    }

    public function getEffectigGarcons(): ?int
    {
        return $this->effectigGarcons;
    }

    public function setEffectigGarcons(?int $effectigGarcons): self
    {
        $this->effectigGarcons = $effectigGarcons;

        return $this;
    }

    /**
     * @return Collection<int, Eleve>
     */
    public function getEleves(): Collection
    {
        return $this->eleves;
    }

    public function addElefe(Eleve $elefe): self
    {
        if (!$this->eleves->contains($elefe)) {
            $this->eleves[] = $elefe;
            $elefe->setClasse($this);
        }

        return $this;
    }

    public function removeElefe(Eleve $elefe): self
    {
        if ($this->eleves->removeElement($elefe)) {
            // set the owning side to null (unless already changed)
            if ($elefe->getClasse() === $this) {
                $elefe->setClasse(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Inscription>
     */
    public function getInscriptions(): Collection
    {
        return $this->inscriptions;
    }

    public function addInscription(Inscription $inscription): self
    {
        if (!$this->inscriptions->contains($inscription)) {
            $this->inscriptions[] = $inscription;
            $inscription->setClasse($this);
        }

        return $this;
    }

    public function removeInscription(Inscription $inscription): self
    {
        if ($this->inscriptions->removeElement($inscription)) {
            // set the owning side to null (unless already changed)
            if ($inscription->getClasse() === $this) {
                $inscription->setClasse(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Matiere>
     */
    public function getMatieres(): Collection
    {
        return $this->matieres;
    }

    public function addMatiere(Matiere $matiere): self
    {
        if (!$this->matieres->contains($matiere)) {
            $this->matieres[] = $matiere;
        }

        return $this;
    }

    public function removeMatiere(Matiere $matiere): self
    {
        $this->matieres->removeElement($matiere);

        return $this;
    }
}
