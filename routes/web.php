<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TorneiosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JogadoresController;

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

// ROTAS DO ADM
Route::view('/adm','adm.index')->middleware('auth');
Route::view('/adm/config/acesso','adm.config.acesso.index')->middleware('auth');

Route::view('/adm/torneios', 'adm.config.torneio.index')->middleware('auth');
Route::view('/adm/torneios/criar', 'adm.config.torneio.criar')->middleware('auth');

// ADM - ROTA DOS JOGADORES 

Route::view('/adm/config/user/index', 'adm.config.acesso.index')->middleware('auth');
Route::get('/adm/config/user/carregarJogadores', [JogadoresController::class, 'carregarJogadores']);

Route::view('/adm/config/user/edit', 'adm.config.acesso.edit')->middleware('auth');
Route::get('/adm/config/user/edit/{id}', [JogadoresController::class, 'carregarJogador']);

// FIM ROTA DOS JOGADORES

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/adm/torneios/criar/recuperarFormatos', [TorneiosController::class, 'carregarTorneios'] );

Auth::routes();
$user = Auth::user();

Route::get('/home', [HomeController::class, 'index']);