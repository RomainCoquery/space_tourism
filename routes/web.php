<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Backoffice\DestinationController;
use App\Http\Controllers\Backoffice\CrewController;
use App\Http\Controllers\Backoffice\TechnologyController;
use App\Http\Controllers\Backoffice\BackofficeController;

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

//Route backoffice
Route::get('/backoffice', [BackofficeController::class, 'index'])->name('backoffice');

//Route backoffice destination
Route::prefix('backoffice')->middleware(['auth'])->group(function () {
    Route::get('/destination/', [DestinationController::class, 'index'])->name('destination.index');
    Route::get('/destination/add', [DestinationController::class, 'create'])->name('destination.add');
    Route::post('/destination/store', [DestinationController::class, 'store'])->name('destination.store');
    Route::get('/destination/show/{id}', [DestinationController::class, 'show'])->name('destination.show');
    Route::get('/destination/edit/{id}', [DestinationController::class, 'edit'])->name('destination.edit');
    Route::put('/destination/update/{id}', [DestinationController::class, 'update'])->name('destination.update');
    Route::get('/destination/delete/{id}', [DestinationController::class, 'delete'])->name('destination.delete');
    Route::delete('/destination/destroy/{id}', [DestinationController::class, 'destroy'])->name('destination.destroy');
});

//Route backoffice crew
Route::prefix('backoffice')->middleware(['auth'])->group(function () {
    Route::get('/crew/', [CrewController::class, 'index'])->name('crew.index');
    Route::get('/crew/add', [CrewController::class, 'create'])->name('crew.add');
    Route::post('/crew/store', [CrewController::class, 'store'])->name('crew.store');
    Route::get('/crew/show/{id}', [CrewController::class, 'show'])->name('crew.show');
    Route::get('/crew/edit/{id}', [CrewController::class, 'edit'])->name('crew.edit');
    Route::put('/crew/update/{id}', [CrewController::class, 'update'])->name('crew.update');
    Route::get('/crew/delete/{id}', [CrewController::class, 'delete'])->name('crew.delete');
    Route::delete('/crew/destroy/{id}', [CrewController::class, 'destroy'])->name('crew.destroy');
});

//Route backoffice technology
Route::prefix('backoffice')->middleware(['auth'])->group(function () {
    Route::get('/technology/', [TechnologyController::class, 'index'])->name('technology.index');
    Route::get('/technology/add', [TechnologyController::class, 'create'])->name('technology.add');
    Route::post('/technology/store', [TechnologyController::class, 'store'])->name('technology.store');
    Route::get('/technology/show/{id}', [TechnologyController::class, 'show'])->name('technology.show');
    Route::get('/technology/edit/{id}', [TechnologyController::class, 'edit'])->name('technology.edit');
    Route::put('/technology/update/{id}', [TechnologyController::class, 'update'])->name('technology.update');
    Route::get('/technology/delete/{id}', [TechnologyController::class, 'delete'])->name('technology.delete');
    Route::delete('/technology/destroy/{id}', [TechnologyController::class, 'destroy'])->name('technology.destroy');
});