<?php

namespace App\Http\Controllers\Pokemon;

use App\Http\Controllers\Controller;
use App\Services\PokemonApiService;

abstract class BasePokemonController extends Controller
{
    public function __construct(
        protected PokemonApiService $pokemonApiService
    ) {}
}
