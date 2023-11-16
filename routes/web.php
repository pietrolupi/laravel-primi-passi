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
    $nome = 'Pietro';
    $cognome = 'Lupi';
    return view('home', compact('nome','cognome'));
});

Route::get('/colori', function () {

    $colori = ['nero', 'viola', 'rosso', 'grigio', 'giallo'];
    $showColori = true;
    return view('colori', compact('colori', 'showColori'));
});

Route::get('/film', function () {

    $movies = ['FightClub', 'La Pimpa', 'Pulp Fiction', 'Peppa Pig', 'Evil Dead'];
    return view('film', compact('movies'));
});
