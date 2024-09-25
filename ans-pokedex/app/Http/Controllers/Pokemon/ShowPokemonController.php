<?php

namespace App\Http\Controllers\Pokemon;

class ShowPokemonController extends BasePokemonController
{
    public function __invoke()
    {
        return view('pokemon.show');
    }
}
