<?php

namespace App\Http\Controllers\FaqsController;
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
    return view('home');
})->name('home'); 


Route::get('/accedi', function () {
    return view('accedi');
})->name('accedi');

Route::get('/privacypolicy', function () {
    return view('privacypolicy');
})->name('privacypolicy');

Route::get('/terminiecondizioni', function () {
    return view('terminiecondizioni');
})->name('terminiecondizioni');

Route::get('/registrati', function () {
    return view('registrati');
})->name('registrati');

Route::get('/locatariocatalog', function () {
    return view('locatario_catalog');
})->name('locatariocatalog');

Route::get('/chisiamo', function () {
    return view('chisiamo');
})->name('chisiamo');

Route::get('/faqs','App\Http\Controllers\FaqsController@index')
->name('faqs');

Route::get('/public_catalog','App\Http\Controllers\AnnunciController@index')
->name('public_catalog');