<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
class Client extends Personne
{
  

    #[ORM\Column(nullable: true)]
    private ?int $N_Client = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $historique_achat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNClient(): ?int
    {
        return $this->N_Client;
    }

    public function setNClient(?int $N_Client): static
    {
        $this->N_Client = $N_Client;

        return $this;
    }

    public function getHistoriqueAchat(): ?string
    {
        return $this->historique_achat;
    }

    public function setHistoriqueAchat(?string $historique_achat): static
    {
        $this->historique_achat = $historique_achat;

        return $this;
    }
    #[ORM\OneToMany(targetEntity: Achat::class, mappedBy: 'client')]
    private Collection $achats;

    public function __construct() {
        $this->achats = new ArrayCollection();
    }
}
