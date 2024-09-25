<?php

namespace App\DTOs;

class AbilityDTO implements PokemonDTOInterface
{
    public function __construct(
        public string $name,
    ) {}

    public static function fromApiResponse(array $response): self
    {
        return new self(
            $response['ability']['name'],
        );
    }

    public function getName(): string
    {
        return $this->name;
    }
}
