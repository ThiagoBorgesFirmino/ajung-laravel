<?php

use App\Http\Controllers\EquipeController;
use App\Http\Controllers\EquipeCreateController;
use App\Http\Controllers\EquipeListController;
use App\Http\Controllers\PortifolioAdminController;
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

use App\Http\Controllers\PortifolioController;

Route::get('/', function () {
    return view('index');
});
Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/portifolio', [PortifolioController::class, 'portifolio']);
Route::get('/portifolioshow/{id}', [PortifolioController::class, 'show'])->name("portifolioshow");
Route::get('/equipe', [EquipeController::class, 'equipe']);

Route::get('/contato', function () {
    return view('contato');
});

Auth::routes(['register'=>false]); // True = Habilita Cadastro, False = Desabilita cadastro;

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Equipe */
Route::get('/admin/equipelist', [EquipeListController::class, 'index'])->name('equipelist');
Route::get('/admin/equipecreate', [EquipeCreateController::class, 'equipeCreate']);
Route::post('/admin/equipecreate', [EquipeCreateController::class, 'store'])->name('equipecreate');
Route::get('/admin/equipe/equipeedit/{id}', [EquipeAdminController::class, 'edit']);
Route::get('/admin/equipeupdate/{id}', [EquipeAdminController::class, 'update'])->name('equipeupdate');

/* Portifolio */
Route::get('/admin/portifoliolist', [PortifolioAdminController::class, 'index'])->name('portifoliolist');
Route::get('/admin/portifoliocreate', [PortifolioAdminController::class, 'portifolioCreate']);
Route::post('/admin/portifoliocreate', [PortifolioAdminController::class, 'store'])->name('portifoliocreate');
Route::delete('/admin/portifoliolist/{id}', [PortifolioAdminController::class, 'destroy']);
Route::get('/admin/portifolioedit/{id}', [PortifolioAdminController::class, 'edit']);
Route::post('/admin/portifolioupdate/{id}', [PortifolioAdminController::class, 'update'])->name('portifolioupdate');