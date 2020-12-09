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

        return response($jogador, 200)
            ->header('Content-Type', 'application/json');
    }

    public function carregarFuncoes(){
        $funcoes = DB::table('funcoes')
            ->select()
            ->get();

        return response($funcoes, 200)
            ->header('Content-Type', 'application/json');
    }

    public function editarJogador(Request $request){
        $dados = $request->all();
        $arquivo = fopen("C:\\Users\\italo\\Desktop\\arquivo.txt", "w");
        fwrite($arquivo, var_dump($request->all()));

        return response($request->all(), 200)
            ->header('Content-Type', 'application/json');
    }
}
