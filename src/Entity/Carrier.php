<?php

namespace App\Entity;

use App\Repository\CarrierRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarrierRepository::class)]
class Carrier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
    private ?float $price = null;

    #[ORM\Column(length: 100)]
    private ?string $duration = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 4, scale: 0)]
    private ?string $price_devise = null;

      /**
     * @var list<string> The carrier's destinations
     */
    #[ORM\Column]
    private array $destination = [];

    public function __toString()
    {
        return $this->name;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(string $duration): static
    {
        $this->duration = $duration;

        return $this;
    }

    public function getPriceDevise(): ?string
    {
        return $this->price_devise;
    }

    public function setPriceDevise(string $price_devise): static
    {
        $this->price_devise = $price_devise;

        return $this;
    }

    public function getDestination(): ?array
    {
                $destination = $this->destination;

                $destination[] = "";
                return array_unique($destination);

    }

    public function setDestination(array $destination): static
    {
        $this->destination = $destination;

        return $this;
    }
}
