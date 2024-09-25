<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\Pokemon\RetrieveAllPokemonController::class)->name('pokemon.index');
Route::post('/search', \App\Http\Controllers\Pokemon\SearchPokemonController::class)->name('pokemon.search');
