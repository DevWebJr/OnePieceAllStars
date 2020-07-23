<?php

namespace App\Entity;

use App\Repository\FruitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FruitRepository::class)
 */
class Fruit
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $capacity;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\ManyToMany(targetEntity=Character::class, inversedBy="fruits")
     */
    private $holder;

    /**
     * @ORM\ManyToOne(targetEntity=SortOfFruit::class, inversedBy="fruits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sortOfFruit;

    public function __construct()
    {
        $this->holder = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCapacity(): ?string
    {
        return $this->capacity;
    }

    public function setCapacity(string $capacity): self
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection|Character[]
     */
    public function getHolder(): Collection
    {
        return $this->holder;
    }

    public function addHolder(Character $holder): self
    {
        if (!$this->holder->contains($holder)) {
            $this->holder[] = $holder;
        }

        return $this;
    }

    public function removeHolder(Character $holder): self
    {
        if ($this->holder->contains($holder)) {
            $this->holder->removeElement($holder);
        }

        return $this;
    }

    public function getSortOfFruit(): ?SortOfFruit
    {
        return $this->sortOfFruit;
    }

    public function setSortOfFruit(?SortOfFruit $sortOfFruit): self
    {
        $this->sortOfFruit = $sortOfFruit;

        return $this;
    }
}
