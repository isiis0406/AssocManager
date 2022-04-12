<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MembreController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\AssociationMembreController;
use App\Http\Controllers\AssociationEvenementController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/', [PagesController::class , 'index'] )->name('home');

//Gestion Membres

Route::resource('association', AssociationController::class);
Route::resource('association.membres', AssociationMembreController::class);

// Gestion Evenements

Route::resource('association.evenement', AssociationEvenementController::class);



Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('leave');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
