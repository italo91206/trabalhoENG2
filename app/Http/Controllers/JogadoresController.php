<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class JogadoresController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('adm.index');
    }

    public function carregarJogadores(){
        $jogadores = DB::table('users')
            ->join('jogadores', 'users.id', '=', 'jogadores.id')
            ->select('users.id', 'users.name', 'users.email', 'jogadores.partidas_jogadas','jogadores.vitorias', 'jogadores.derrotas')
            ->get();

        return response($jogadores, 200)
            ->header('Content-Type', 'application/json');
    }

    public function carregarJogador($id){
        $jogador = DB::table('users')
            ->select()
            ->where('id', $id)
            ->get();

        return response($jogador, 200)
            ->header('Content-Type', 'application/json');
    }
}
