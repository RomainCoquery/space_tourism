<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Backoffice\DestinationController;

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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/destination', [PageController::class, 'destination'])->name('destination');
Route::get('/crew', [PageController::class, 'crew'])->name('crew');
Route::get('/technology', [PageController::class, 'technology'])->name('technology');

// Route pour le changement de langue
Route::post('/change-lang/{locale}', [LangController::class, 'changeLang'])->name('changeLang');

//Route backoffice destination
Route::prefix('backoffice')->middleware(['auth'])->group(function () {
    Route::get('/destination/', [DestinationController::class, 'index'])->name('destination.index');
    Route::get('/destination/create', [DestinationController::class, 'create'])->name('destination.create');
    Route::post('/destination/store', [DestinationController::class, 'store'])->name('destination.store');
    Route::get('/destination/show/{id}', [DestinationController::class, 'show'])->name('destination.show');
    Route::get('/destination/edit/{id}', [DestinationController::class, 'edit'])->name('destination.edit');
    Route::put('/destination/update/{id}', [DestinationController::class, 'update'])->name('destination.update');
    Route::delete('/destination/destroy/{id}', [DestinationController::class, 'destroy'])->name('destination.destroy');
});