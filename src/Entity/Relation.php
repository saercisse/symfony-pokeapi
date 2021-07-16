<?php

namespace App\Entity;

use App\Repository\RelationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RelationRepository::class)
 */
class Relation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Pokemon;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Attack;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPokemon(): ?string
    {
        return $this->Pokemon;
    }

    public function setPokemon(string $Pokemon): self
    {
        $this->Pokemon = $Pokemon;

        return $this;
    }

    public function getAttack(): ?string
    {
        return $this->Attack;
    }

    public function setAttack(string $Attack): self
    {
        $this->Attack = $Attack;

        return $this;
    }
}
