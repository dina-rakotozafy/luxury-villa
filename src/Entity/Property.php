<?php

namespace App\Entity;

use App\Repository\PropertyRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PropertyRepository::class)]
class Property
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $address = null;

    #[ORM\Column(length: 255)]
    private ?string $country = null;

    #[ORM\Column(length: 255)]
    private ?string $city = null;

    #[ORM\Column(length: 255)]
    private ?string $photos = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $videos = null;

    #[ORM\Column]
    private ?int $price = null;

    #[ORM\Column]
    private ?int $surface = null;

    #[ORM\Column]
    private ?int $roomNumber = null;

    #[ORM\Column]
    private ?int $bathroomNumber = null;

    #[ORM\Column]
    private ?int $floorNumber = null;

    #[ORM\Column(nullable: true)]
    private ?int $parkingAvailable = null;

    #[ORM\Column(length: 255)]
    private ?string $paymentMethod = null;

    #[ORM\Column]
    private ?bool $isContractReady = null;

    #[ORM\Column(nullable: true)]
    private ?bool $isFeatured = null;

    #[ORM\Column(nullable: true)]
    private ?bool $isMainSlider = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $safety = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

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

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): static
    {
        $this->country = $country;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getPhotos(): ?string
    {
        return $this->photos;
    }

    public function setPhotos(string $photos): static
    {
        $this->photos = $photos;

        return $this;
    }

    public function getVideos(): ?string
    {
        return $this->videos;
    }

    public function setVideos(?string $videos): static
    {
        $this->videos = $videos;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getSurface(): ?int
    {
        return $this->surface;
    }

    public function setSurface(int $surface): static
    {
        $this->surface = $surface;

        return $this;
    }

    public function getRoomNumber(): ?int
    {
        return $this->roomNumber;
    }

    public function setRoomNumber(int $roomNumber): static
    {
        $this->roomNumber = $roomNumber;

        return $this;
    }

    public function getBathroomNumber(): ?int
    {
        return $this->bathroomNumber;
    }

    public function setBathroomNumber(int $bathroomNumber): static
    {
        $this->bathroomNumber = $bathroomNumber;

        return $this;
    }

    public function getFloorNumber(): ?int
    {
        return $this->floorNumber;
    }

    public function setFloorNumber(int $floorNumber): static
    {
        $this->floorNumber = $floorNumber;

        return $this;
    }

    public function getParkingAvailable(): ?int
    {
        return $this->parkingAvailable;
    }

    public function setParkingAvailable(?int $parkingAvailable): static
    {
        $this->parkingAvailable = $parkingAvailable;

        return $this;
    }

    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(string $paymentMethod): static
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    public function isContractReady(): ?bool
    {
        return $this->isContractReady;
    }

    public function setContractReady(bool $isContractReady): static
    {
        $this->isContractReady = $isContractReady;

        return $this;
    }

    public function isFeatured(): ?bool
    {
        return $this->isFeatured;
    }

    public function setFeatured(?bool $isFeatured): static
    {
        $this->isFeatured = $isFeatured;

        return $this;
    }

    public function isMainSlider(): ?bool
    {
        return $this->isMainSlider;
    }

    public function setMainSlider(?bool $isMainSlider): static
    {
        $this->isMainSlider = $isMainSlider;

        return $this;
    }

    public function getSafety(): ?string
    {
        return $this->safety;
    }

    public function setSafety(?string $safety): static
    {
        $this->safety = $safety;

        return $this;
    }
}
