<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Fournisseur;
use App\Entity\Produit;
use App\Entity\ProduitFactory;
use App\Entity\InvalidPriceException;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $reference = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $produit = null;

    #[ORM\Column]
    private ?int $prix = null;

    #[ORM\ManyToOne(targetEntity: Fournisseur::class, inversedBy: 'produitsFournis')]
    #[ORM\JoinColumn(name: 'fournisseur_id', referencedColumnName: 'id')]
    private ?Fournisseur $fournisseur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReference(): ?int
    {
        return $this->reference;
    }

    public function setReference(int $reference): static
    {
        $this->reference = $reference;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getProduit(): ?string
    {
        return $this->produit;
    }

    public function setProduit(string $produit): static
    {
        $this->produit = $produit;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self {
        if ($prix < 0) {
            throw new InvalidPriceException("Le prix ne peut pas être négatif.");
        }
        $this->prix = $prix;
        return $this;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): static
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }


    public function vendre() {
        
    
    }

    public function addProduit(Produit $produit) {
        // Vérification si le produit existe déjà
        if ($this->checkIfProduitExists($produit)) {
            throw new DuplicateProductException("Ce produit existe déjà.");
        }
    
        
    }
}
