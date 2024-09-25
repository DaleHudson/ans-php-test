<?php

namespace App\Http\Controllers\Pokemon;

use App\Http\Controllers\Controller;
use App\Services\PokemonApiService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class RetrieveAllPokemonController extends BasePokemonController
{
    public function __invoke(): View
    {
        $pokemon = null;
        try {
            // TODO paginate the results
            if (!Cache::has("pokemon")) {
                $pokemonData = $this->pokemonApiService->getAllPokemon();
                Cache::put("pokemon", $pokemonData, 3600);
            }

            $pokemon = Cache::get("pokemon");
        } catch (Exception $e) {
            dd($e->getMessage());
            // TODO display flash message here
        }

        return view('pokemon.index', compact('pokemon'));
    }
}
