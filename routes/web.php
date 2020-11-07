<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\salasController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//------------------------------------------------------------------------------
// Salas
Route::get('/criarsala', function(){
	return view('salas/criarSala');
});

Route::post('/cadastrandosala', [salasController::class, 'cadastrarSala']);
//------------------------------------------------------------------------------
Route::get('/salassantos',[salasController::class, 'exibirSalas']);