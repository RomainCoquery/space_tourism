<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;

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

Route::get('/', [LangController::class, 'index'])->name('home');
Route::get('/destination', [LangController::class, 'destination'])->name('destination');
Route::get('/crew', [LangController::class, 'crew'])->name('crew');
Route::get('/technology', [LangController::class, 'technology'])->name('technology');

// Route pour le changement de langue
Route::post('/change-lang/{locale}', [LangController::class, 'changeLang'])->name('changeLang');