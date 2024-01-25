<?php

namespace App\Entity;

use App\Repository\SalarieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SalarieRepository::class)]
class Salarie extends Personne
{
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $matricule = null;

    #[ORM\Column(nullable: true)]
    private ?int $departement = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $poste = null;

    #[ORM\Column(nullable: true)]
    private ?int $salaire = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(?string $matricule): static
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getDepartement(): ?int
    {
        return $this->departement;
    }

    public function setDepartement(?int $departement): static
    {
        $this->departement = $departement;

        return $this;
    }

    public function getPoste(): ?string
    {
        return $this->poste;
    }

    public function setPoste(?string $poste): static
    {
        $this->poste = $poste;

        return $this;
    }

    public function getSalaire(): ?int
    {
        return $this->salaire;
    }

    public function setSalaire(?int $salaire): static
    {
        $this->salaire = $salaire;

        return $this;
    }
}


function createSalarieInstance()
{
    // Création d'une instance de Salarie
    $salarie = new Salarie();

    // Attribution d'une valeur à la propriété departement
    $salarie->setDepartement(123); // Remplacez 123 par la valeur souhaitée

    // Accès à la propriété departement
    $departement = $salarie->getDepartement();

    // Utilisation de la valeur de departement
    echo "Département : " . $departement;
}

// Call the function or method to create the Salarie instance
createSalarieInstance();
