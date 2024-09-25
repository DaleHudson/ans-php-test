<?php

namespace App\DTOs;

class PokemonDTO implements PokemonDTOInterface
{
    public function __construct(
        private string $name,
        private string $url
    ) {}

    public static function fromApiResponse(array $response): self
    {
        return new self(
            $response['name'],
            $response['url']
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
