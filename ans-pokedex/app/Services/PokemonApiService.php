<?php

namespace App\Services;

use App\DTOs\PokemonDetailsDTO;
use App\DTOs\PokemonDTO;
use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class PokemonApiService
{
    // BaseUrl protected so I can update the base url in a child class in the future
    public function __construct(
        protected string $baseUrl = 'https://pokeapi.co/api/v2/'
    ) {}

    public function getAllPokemon(): Collection
    {
        $response = Http::get($this->baseUrl . 'pokemon?limit=150');

        if ($response->failed()) {
            throw new Exception("Failed to retrieve all pokemon");
        }

        $pokemonData = $response->json()['results'];

        return collect($pokemonData)
            ->sortBy('name')
            ->map(function ($pokemon) {
                return PokemonDTO::fromApiResponse($pokemon);
            });
    }

    public function getPokemonByName(string $name): PokemonDetailsDTO
    {
        $response = Http::get($this->baseUrl . 'pokemon/' . $name);

        if ($response->failed()) {
            throw new Exception("Failed to retrieve pokemon by name");
        }

        return PokemonDetailsDTO::fromApiResponse($response->json());
    }
}
