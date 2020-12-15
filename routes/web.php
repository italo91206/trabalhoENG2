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
    return view('welcome');
});


Auth::routes();

Route::view('/adm','adm.index')->name('adm')->middleware('auth');

Route::resource('/adm/config/user', 'UserController')->middleware('auth');
Route::resource('/adm/config/formato', 'FormatoController')->middleware('auth');
Route::resource('/adm/config/edicao', 'EdicaoController')->middleware('auth');



Route::resource('/adm/tools/carta', 'CartaController')->middleware('auth');

Route::get('/adm/tools/torneio/relatorio', 'TorneioController@relatorio')->middleware('auth');
Route::post('/adm/tools/torneio/encerrar/{id}', 'TorneioController@encerrar')->middleware('auth');
Route::resource('/adm/tools/torneio', 'TorneioController')->middleware('auth');

