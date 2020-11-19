<?php

namespace app\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TorneiosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function carregarTorneios(){
        $formatos = DB::table('formatojogo')->get();

        return response($formatos, 200)
            ->header('Content-Type', 'application/json');
    }
}
