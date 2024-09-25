<?php

namespace App\DTOs;

class PokemonDetailsDTO implements PokemonDTOInterface
{
    public function __construct(
        private string $name,
        private string $image,
        private int $height,
        private int $weight,
        private string $type
    ){}

    public static function fromApiResponse(array $response): self
    {
        return new self(
            $response['name'],
            $response['sprites']['other']['official-artwork']['front_default'],
            $response['height'],
            $response['weight'],
            $response['types'][0]['type']['name']
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
}
