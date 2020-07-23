<?php

namespace App\Entity;

use App\Repository\CharacterRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CharacterRepository::class)
 * @ORM\Table(name="`character`")
 */
class Character
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
     * @ORM\Column(type="text", nullable=true)
     */
    private $story;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $portrait;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $video;

    /**
     * @ORM\ManyToOne(targetEntity=Crew::class, inversedBy="members")
     */
    private $crew;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="characters")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\OneToOne(targetEntity=Wanted::class, mappedBy="holder", cascade={"persist", "remove"})
     */
    private $wanted;

    /**
     * @ORM\ManyToMany(targetEntity=Haki::class, mappedBy="characters")
     */
    private $hakis;

    /**
     * @ORM\ManyToMany(targetEntity=Fruit::class, mappedBy="holder")
     */
    private $fruits;

    public function __construct()
    {
        $this->hakis = new ArrayCollection();
        $this->fruits = new ArrayCollection();
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

    public function getStory(): ?string
    {
        return $this->story;
    }

    public function setStory(?string $story): self
    {
        $this->story = $story;

        return $this;
    }

    public function getPortrait(): ?string
    {
        return $this->portrait;
    }

    public function setPortrait(string $portrait): self
    {
        $this->portrait = $portrait;

        return $this;
    }

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(?string $video): self
    {
        $this->video = $video;

        return $this;
    }

    public function getCrew(): ?Crew
    {
        return $this->crew;
    }

    public function setCrew(?Crew $crew): self
    {
        $this->crew = $crew;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getWanted(): ?Wanted
    {
        return $this->wanted;
    }

    public function setWanted(?Wanted $wanted): self
    {
        $this->wanted = $wanted;

        // set (or unset) the owning side of the relation if necessary
        $newHolder = null === $wanted ? null : $this;
        if ($wanted->getHolder() !== $newHolder) {
            $wanted->setHolder($newHolder);
        }

        return $this;
    }

    /**
     * @return Collection|Haki[]
     */
    public function getHakis(): Collection
    {
        return $this->hakis;
    }

    public function addHaki(Haki $haki): self
    {
        if (!$this->hakis->contains($haki)) {
            $this->hakis[] = $haki;
            $haki->addCharacter($this);
        }

        return $this;
    }

    public function removeHaki(Haki $haki): self
    {
        if ($this->hakis->contains($haki)) {
            $this->hakis->removeElement($haki);
            $haki->removeCharacter($this);
        }

        return $this;
    }

    /**
     * @return Collection|Fruit[]
     */
    public function getFruits(): Collection
    {
        return $this->fruits;
    }

    public function addFruit(Fruit $fruit): self
    {
        if (!$this->fruits->contains($fruit)) {
            $this->fruits[] = $fruit;
            $fruit->addHolder($this);
        }

        return $this;
    }

    public function removeFruit(Fruit $fruit): self
    {
        if ($this->fruits->contains($fruit)) {
            $this->fruits->removeElement($fruit);
            $fruit->removeHolder($this);
        }

        return $this;
    }
}
