<?php

namespace App\Entity;

use App\Repository\CrewRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CrewRepository::class)
 */
class Crew
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
     * @ORM\OneToOne(targetEntity=Ship::class, mappedBy="crew", cascade={"persist", "remove"})
     */
    private $ship;

    /**
     * @ORM\OneToMany(targetEntity=Character::class, mappedBy="crew")
     */
    private $members;

    public function __construct()
    {
        $this->members = new ArrayCollection();
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

    public function getShip(): ?Ship
    {
        return $this->ship;
    }

    public function setShip(Ship $ship): self
    {
        $this->ship = $ship;

        // set the owning side of the relation if necessary
        if ($ship->getCrew() !== $this) {
            $ship->setCrew($this);
        }

        return $this;
    }

    /**
     * @return Collection|Character[]
     */
    public function getMembers(): Collection
    {
        return $this->members;
    }

    public function addMember(Character $member): self
    {
        if (!$this->members->contains($member)) {
            $this->members[] = $member;
            $member->setCrew($this);
        }

        return $this;
    }

    public function removeMember(Character $member): self
    {
        if ($this->members->contains($member)) {
            $this->members->removeElement($member);
            // set the owning side to null (unless already changed)
            if ($member->getCrew() === $this) {
                $member->setCrew(null);
            }
        }

        return $this;
    }
}
