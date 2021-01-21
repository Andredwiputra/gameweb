<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\PokemonController2;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/admin', 'admin.v_homeadmin');

Route::get('/game', [GameController::class, 'index'])->name('game');
Route::get('/game/detail/{id_game}', [GameController::class, 'detail']);
Route::get('/game/add', [GameController::class, 'tambah']);
Route::get('/game/edit/{id_game}', [GameController::class, 'edit']);
Route::get('/game/delete/{id_game}',[GameController::class, 'delete']);

Route::get('/pokemon', [PokemonController::class, 'index'])->name('pokemon');
Route::get('/pokemon2', [PokemonController2::class, 'index'])->name('pokemon');


Route::post('/game/insert', [GameController::class, 'insert']);
Route::post('/game/update/{id_game}', [GameController::class, 'update']);
