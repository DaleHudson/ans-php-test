<?php

namespace App\Http\Controllers\Pokemon;

use Exception;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ShowPokemonController extends BasePokemonController
{
    public function __invoke(Request $request): View
    {
        try {
            // TODO sanitize/validate input here
            $pokemon = $this->pokemonApiService->getPokemonByName($request->name);
        } catch (Exception $e) {
            dd($e->getMessage());
            // TODO display flash message here
        }

        return view('pokemon.show', compact('pokemon'));
    }
}
