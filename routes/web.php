<?php

use Illuminate\Support\Facades\Route;

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
    // Qui devo richiamare il file creato in config, dove si trova l'array:
    $comics = config('comics');
    return view('home',
    [
        'comics' => $comics,
    ]
    );
})->name('homepage');

// Seconda pagina con il prodotto:
Route::get('/product', function () {
    return view('product');
})->name('product');