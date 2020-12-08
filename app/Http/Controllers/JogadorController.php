<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class JogadorController extends Controller
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
        return view('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function carregarJogador($id){
        $jogador = DB::table('users')
        ->select()
        ->where('id', $id)
        ->get();        
        // return view('adm.config.acesso.edit', compact('jogador'));
        return response($jogador, 200)
            ->header('Content-Type', 'application/json');
    }
}
