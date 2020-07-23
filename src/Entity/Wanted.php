<?php

namespace App\Entity;

use App\Repository\WantedRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WantedRepository::class)
 */
class Wanted
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $mount;

    /**
     * @ORM\OneToOne(targetEntity=Character::class, inversedBy="wanted", cascade={"persist", "remove"})
     */
    private $holder;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMount(): ?int
    {
        return $this->mount;
    }

    public function setMount(int $mount): self
    {
        $this->mount = $mount;

        return $this;
    }

    public function getHolder(): ?Character
    {
        return $this->holder;
    }

    public function setHolder(?Character $holder): self
    {
        $this->holder = $holder;

        return $this;
    }
}
