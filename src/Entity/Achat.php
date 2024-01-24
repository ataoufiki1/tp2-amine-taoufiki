<?php

namespace App\Entity;

use App\Repository\AchatRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AchatRepository::class)]
class Achat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $N_achat = null;

    #[ORM\Column(length: 255)]
    private ?string $produit_achteté = null;

  

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_dachat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNAchat(): ?int
    {
        return $this->N_achat;
    }

    public function setNAchat(int $N_achat): static
    {
        $this->N_achat = $N_achat;

        return $this;
    }

    public function getProduitAchteté(): ?string
    {
        return $this->produit_achteté;
    }

    public function setProduitAchteté(string $produit_achteté): static
    {
        $this->produit_achteté = $produit_achteté;

        return $this;
    }

    public function getClient(): ?string
    {
        return $this->client;
    }

    public function setClient(string $client): static
    {
        $this->client = $client;

        return $this;
    }

    public function getDateDachat(): ?\DateTimeInterface
    {
        return $this->date_dachat;
    }

    public function setDateDachat(\DateTimeInterface $date_dachat): static
    {
        $this->date_dachat = $date_dachat;

        return $this;
    }
    #[ORM\ManyToOne(targetEntity: Client::class, inversedBy: 'achats')]
    #[ORM\JoinColumn(name: 'client_id', referencedColumnName: 'id')]
    private ?Client $client;


    private $pricingStrategy;

    public function __construct(PricingStrategy $strategy) {
        $this->pricingStrategy = $strategy;
    }

    public function finalizePurchase($amount) {
        return $this->pricingStrategy->calculatePrice($amount);
    }
}
