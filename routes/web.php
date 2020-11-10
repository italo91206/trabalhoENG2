<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\TorneiosController;

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

//rotas do adm
Route::view('/adm','adm.index')->middleware('auth');
Route::view('/adm/config/acesso','adm.config.acesso.index')->middleware('auth');

Route::view('/adm/torneios', 'adm.config.torneio.index')->middleware('auth');
Route::view('/adm/torneios/criar', 'adm.config.torneio.criar')->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adm/torneios/criar/recuperarFormatos@carregarTorneios');

Auth::routes();
$user = Auth::user();

Route::get('/home', 'HomeController@index')->name('home');