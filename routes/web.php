<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TorneiosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JogadoresController;
use App\Http\Controllers\JogadorController;
use App\Http\Controllers\FormatosController;

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

Route::view('/adm/config/user/edit/{id}', 'adm.config.acesso.edit')->middleware('auth');
Route::get('/carregarFuncoes', [JogadorController::class, 'carregarFuncoes']);
Route::post('/adm/config/user/edit/carregarJogador/{id}', [JogadorController::class, 'carregarJogador']);
Route::post('/usuarios/editar/salvar', [JogadorController::class, 'editarJogador']);

// FIM ROTA DOS JOGADORES

// ADM - ROTA DOS FORMATOS

Route::view('/adm/formatos', 'adm.config.formato.index')->middleware('auth');
Route::get('/adm/formatos/carregar', [FormatosController::class, 'carregarFormatos']);


// FIM ROTA DOS FORMATOS

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/adm/torneios/criar/recuperarFormatos', [TorneiosController::class, 'carregarTorneios'] );

Auth::routes();
$user = Auth::user();

Route::get('/home', [HomeController::class, 'index']);