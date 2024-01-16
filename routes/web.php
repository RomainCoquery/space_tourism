<?php

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
    return view('index');
})->name("index");

Route::get('/destination', function () {
    return view('destination');
})->name("destination");

Route::get('/crew', function () {
    return view('crew');
})->name("crew");

Route::get('/technology', function () {
    return view('technology');
})->name("technology");