<?php

namespace App\DTOs;

interface PokemonDTOInterface
{
    public static function fromApiResponse(array $response): self;
}
