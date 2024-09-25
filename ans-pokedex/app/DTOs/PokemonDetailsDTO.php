<?php

namespace App\DTOs;

use Illuminate\Support\Collection;

class PokemonDetailsDTO implements PokemonDTOInterface
{
    public function __construct(
        private string $name,
        private string $image,
        private int $height,
        private int $weight,
        private string $type,
        private Collection $abilities
    ){}

    public static function fromApiResponse(array $response): self
    {
        $abilities = collect($response['abilities'])->map(function ($ability) {
            return AbilityDTO::fromApiResponse($ability);
        });

        return new self(
            $response['name'],
            $response['sprites']['other']['official-artwork']['front_default'],
            $response['height'],
            $response['weight'],
            $response['types'][0]['type']['name'],
            $abilities
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getAbilities(): Collection
    {
        return $this->abilities;
    }
}
