<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\OrderRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: OrderRepository::class)]
#[ORM\Table(name: '`order`')]
class Order
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(length: 255)]
    private ?string $carrierName = null;

    #[ORM\Column]
    private ?float $carrierPrice = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $delivery = null;

    #[ORM\Column]
    private ?int $state = null;

     #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $stripe_session_id = null;


    #[ORM\ManyToOne(inversedBy: 'orders')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\OneToMany(targetEntity: OrderDetails::class, mappedBy: "myOrder")]
    private Collection $orderDetails;

    #[ORM\Column(length: 3)]
    private ?string $currency = null;

    public function __construct()
    {
        $this->orderDetails = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getCarrierName(): ?string
    {
        return $this->carrierName;
    }

    public function setCarrierName(string $carrierName): static
    {
        $this->carrierName = $carrierName;
        return $this;
    }

    public function getCarrierPrice(): ?float
    {
        return $this->carrierPrice;
    }

    public function setCarrierPrice(float $carrierPrice): static
    {
        $this->carrierPrice = $carrierPrice;
        return $this;
    }

    public function getDelivery(): ?string
    {
        return $this->delivery;
    }

    public function setDelivery(string $delivery): static
    {
        $this->delivery = $delivery;
        return $this;
    }

    public function getState(): ?int
    {
        return $this->state;
    }

    public function setState(int $state): static
    {
        $this->state = $state;
        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;
        return $this;
    }

    public function getOrderDetails(): Collection
    {
        return $this->orderDetails;
    }

    public function getTotalHT(): float
    {
        $total = 0;
        foreach ($this->getOrderDetails() as $detail) {
            // Conversion en float pour sécurité
            $price = (float)$detail->getProductPrice();
            $qty = (int)$detail->getProductQuantity();
            $total += $price * $qty;
        }
        return round($total, 2);
    }

    public function getTotalTVA(): float
    {
        $totalTva = 0;
        $productsDetails = $this->getOrderDetails();

        foreach ($productsDetails as $detail) {
            $price = (float)$detail->getProductPrice();
            $qty = (int)$detail->getProductQuantity();
            $tva = (float)$detail->getProductTva();
            $totalTva += ($price * $qty * $tva / 100);
        }
        return round($totalTva, 2);
    }

    public function getTotalTTC(): float
    {
        $ttc = $this->getTotalHT() + $this->getTotalTVA() + (float)$this->getCarrierPrice();
        return round($ttc, 2);
    }

    public function getFormattedTotals(): array
    {
        return [
            'ht' => number_format($this->getTotalHT(), 2, '.', ' '),
            'tva' => number_format($this->getTotalTVA(), 2, '.', ' '),
            'ttc' => number_format($this->getTotalTTC(), 2, '.', ' '),
            'carrier' => number_format($this->getCarrierPrice(), 2, '.', ' ')
        ];
    }


    // Ajoutez ces méthodes de formatage simples
    // public function getFormattedTotalHT(): string
    // {
    //     return number_format($this->getTotalHT(), 2, '.', ' ') . ' MAD';
    // }

    // public function getFormattedTotalTVA(): string
    // {
    //     return number_format($this->getTotalTVA(), 2, '.', ' ') . ' MAD';
    // }

    // public function getFormattedTotalTTC(): string
    // {
    //     return number_format($this->getTotalTTC(), 2, '.', ' ') . ' MAD';
    // }

    // public function getFormattedCarrierPrice(): string
    // {
    //     return number_format($this->getCarrierPrice(), 2, '.', ' ') . ' MAD';
    // }

       public function getStripeSessionId(): ?string
    {
        return $this->stripe_session_id;
    }

    public function setStripeSessionId(?string $stripe_session_id): self
    {
        $this->stripe_session_id = $stripe_session_id;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): static
    {
        $this->currency = $currency;

        return $this;
    }
}
