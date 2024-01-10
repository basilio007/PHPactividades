<?php
use App\Http\Controllers\PokemonController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", [PokemonController::class,"index"])->name("pokemon.index");

//añadir
Route::post("/crear", [PokemonController::class,"create"])->name("pokemon.create");
//modificar
Route::post("/actualizar", [PokemonController::class,"update"])->name("pokemon.update");

Route::get("/bor-{id}", [PokemonController::class,"delete"])->name("pokemon.delete");


