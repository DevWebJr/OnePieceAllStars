<?php

namespace App\Entity;

use App\Repository\KingdomRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=KingdomRepository::class)
 */
class Kingdom
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
     * @ORM\OneToMany(targetEntity=Arc::class, mappedBy="kingdom", orphanRemoval=true)
     */
    private $arc;

    public function __construct()
    {
        $this->arc = new ArrayCollection();
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
     * @return Collection|Arc[]
     */
    public function getArc(): Collection
    {
        return $this->arc;
    }

    public function addArc(Arc $arc): self
    {
        if (!$this->arc->contains($arc)) {
            $this->arc[] = $arc;
            $arc->setKingdom($this);
        }

        return $this;
    }

    public function removeArc(Arc $arc): self
    {
        if ($this->arc->contains($arc)) {
            $this->arc->removeElement($arc);
            // set the owning side to null (unless already changed)
            if ($arc->getKingdom() === $this) {
                $arc->setKingdom(null);
            }
        }

        return $this;
    }
}
