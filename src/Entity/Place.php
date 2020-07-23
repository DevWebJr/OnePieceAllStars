<?php

namespace App\Entity;

use App\Repository\PlaceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlaceRepository::class)
 */
class Place
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
     * @ORM\OneToMany(targetEntity=Kingdom::class, mappedBy="place", orphanRemoval=true)
     */
    private $kingdoms;

    public function __construct()
    {
        $this->kingdoms = new ArrayCollection();
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

    /**
     * @return Collection|Kingdom[]
     */
    public function getKingdoms(): Collection
    {
        return $this->kingdoms;
    }

    public function addKingdom(Kingdom $kingdom): self
    {
        if (!$this->kingdoms->contains($kingdom)) {
            $this->kingdoms[] = $kingdom;
            $kingdom->setPlace($this);
        }

        return $this;
    }

    public function removeKingdom(Kingdom $kingdom): self
    {
        if ($this->kingdoms->contains($kingdom)) {
            $this->kingdoms->removeElement($kingdom);
            // set the owning side to null (unless already changed)
            if ($kingdom->getPlace() === $this) {
                $kingdom->setPlace(null);
            }
        }

        return $this;
    }
}
