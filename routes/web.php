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
    return view('welcome');
})->name('homePage');

Route::get('/chi-siamo', function () {



    return view('chiSiamo');
})->name('chiSiamo');

Route::get('/servizi', function () {



    return view('servizi');
})->name('servizi');

Route::get('/pagine-di-dettaglio', function () {



    return view('pagineDiDettaglio');
})->name('pagineDiDettaglio');