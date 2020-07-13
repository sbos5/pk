<?php

namespace App\Entity;

use App\Repository\LekarzRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LekarzRepository::class)
 */
class Lekarz
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var Specjalizacja
     * @ORM\Column(type="string", length=255, nullable=true)
     * @ORM\OneToMany(targetEntity="App\Entity\Specjalizacja")
     * 
     */
    private $specjalizacja;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSpecjalizacja(): ?string
    {
        return $this->specjalizacja;
    }

    public function setSpecjalizacja(?string $specjalizacja): self
    {
        $this->specjalizacja = $specjalizacja;

        return $this;
    }
}
