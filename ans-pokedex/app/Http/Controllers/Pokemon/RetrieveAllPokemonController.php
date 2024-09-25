<?php

namespace App\Http\Controllers\Pokemon;

use App\Http\Controllers\Controller;
use App\Services\PokemonApiService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RetrieveAllPokemonController extends BasePokemonController
{
    public function __invoke(): View
    {
        $pokemon = null;
        try {
            $pokemon = $this->pokemonApiService->getAllPokemon();
        } catch (Exception $e) {
            dd($e->getMessage());
            // TODO display flash message here
        }

        return view('pokemon.index', compact('pokemon'));
    }
}
