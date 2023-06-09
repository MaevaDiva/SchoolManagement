<?php

namespace App\Entity;

use App\Repository\CompteurmatriculeProfesseurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompteurmatriculeProfesseurRepository::class)
 */
class CompteurmatriculeProfesseur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}
