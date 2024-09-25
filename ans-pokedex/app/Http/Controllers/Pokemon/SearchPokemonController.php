<?php

namespace App\Http\Controllers\Pokemon;

use Exception;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SearchPokemonController extends BasePokemonController
{
    public function __invoke(Request $request): View
    {
        $request->validate([
            'name' => 'required|string'
        ]);

        try {
            $pokemon = $this->pokemonApiService->getPokemonByName($request->name);
        } catch (Exception $e) {
            dd($e->getMessage());
            // TODO display flash message here
        }

        return view('pokemon.search', compact('pokemon'));
    }
}
