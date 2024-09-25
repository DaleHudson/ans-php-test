<?php

namespace App\Http\Controllers\Pokemon;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SearchPokemonController extends BasePokemonController
{
    public function __invoke(Request $request): JsonResponse
    {
        try {
            $pokemon = $this->pokemonApiService->getPokenameByName(request('name'));
        dd($pokemon);
            return response()->json($pokemon);
        } catch (Exception $e) {
            dd($e->getMessage());
            // TODO display flash message here
        }
    }
}
