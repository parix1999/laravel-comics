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
//Bisogna aggiungere un'argomento, li passiamo l'id come una varibile tramite le graffe
//Perchè ci serve l'id per ogni tipo di prodotto, si aggiunge come se fosse un path,
//Che in fin fine è quello che verrà scritto nell'url:
//La sintassi: graffe id e si invia nella funzione di call back:
Route::get('/product/{id}', function ($id) {
    
    $arrayIndex = $id - 1;

    $comics = config('comics');
    return view('product',
    [
        //Li diamo id come chiave, e id come valore:
        'arrayIndex' => $arrayIndex,
        //Qua li si passa i dati della nostra array: serve tutta l'array, e poi
        //Recuperiamo ciò di cui abbiamo bisongo:
        'comics' => $comics,
    ]
    );
})->name('product');