<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PeliculasController;
use App\Http\Controllers\DirectoresController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('categorias',CategoriaController::class);
Route::resource('peliculas',PeliculasController::class);
Route::resource('directores',DirectoresController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
