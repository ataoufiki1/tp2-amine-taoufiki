<?php

namespace App\Entity;

use App\Repository\FournisseurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FournisseurRepository::class)]
class Fournisseur extends Personne
{
  

    #[ORM\Column(nullable: true)]
    private ?int $fournisseurN_fournisseur = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $produits_fourn = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFournisseurNFournisseur(): ?int
    {
        return $this->fournisseurN_fournisseur;
    }

    public function setFournisseurNFournisseur(?int $fournisseurN_fournisseur): static
    {
        $this->fournisseurN_fournisseur = $fournisseurN_fournisseur;

        return $this;
    }

    public function getProduitsFourn(): ?string
    {
        return $this->produits_fourn;
    }

    public function setProduitsFourn(?string $produits_fourn): static
    {
        $this->produits_fourn = $produits_fourn;

        return $this;
    }

    #[ORM\OneToMany(targetEntity: Produit::class, mappedBy: 'fournisseur')]
    private Collection $produitsFournis;

    public function __construct() {
        $this->produitsFournis = new ArrayCollection();
    }
}
