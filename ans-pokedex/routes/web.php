<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\Pokemon\RetrieveAllPokemonController::class)->name('pokemon.index');
Route::post('/search', \App\Http\Controllers\Pokemon\SearchPokemonController::class)->name('pokemon.search');
Route::get('/show/{name}', \App\Http\Controllers\Pokemon\ShowPokemonController::class)->name('pokemon.show');
