<?php

namespace App\Http\Controllers;

use App\Model\Carta;
use App\Model\Edicao;
use Illuminate\Http\Request;

class CartaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //retorna a tela do index
        $cartas = Carta::get();
        return view('adm.tools.carta.index', compact('cartas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //retorna a tela para cadastro
        $edicaos = Edicao::get();
        return view('adm.tools.carta.create', compact('edicaos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:255',
            'edicao' => 'required',
            'custo' => 'required',
            'cor' => 'required',
            'raridade' => 'required',
            'descricao' => 'required',
        ]);

        $carta = new Carta([
            'nome' => $request['nome'],
            'edicao_id' => $request['edicao'],
            'custo' => $request['custo'],
            'cor' => $request['cor'],
            'raridade' => $request['raridade'],
            'descricao' => $request['descricao'],
        ]);

        $carta->save();

        return redirect()->route('carta.index')->with('success','Carta cadastrada com sucesso');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //retorna tela de edição
        $carta = Carta::findOrFail($id);
        $edicaos = Edicao::get();
        return view('adm.tools.carta.edit', compact('carta', 'edicaos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|max:255',
            'edicao' => 'required',
            'custo' => 'required',
            'cor' => 'required',
            'raridade' => 'required',
            'descricao' => 'required',
        ]);

        $carta = Carta::findOrFail($id);
        $carta->nome = $request['nome'];
        $carta->edicao_id = $request['edicao'];
        $carta->custo = $request['custo'];
        $carta->cor = $request['cor'];
        $carta->raridade = $request['raridade'];
        $carta->descricao = $request['descricao'];
        $carta->update();

        return redirect()->route('carta.index')->with('success','Carta atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //exclui a carta
        $carta = Carta::findOrFail($id);
        $carta->delete();
        return redirect()->route('carta.index');
    }
}
