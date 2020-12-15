<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Edicao;
use App\Model\Formato;
use PhpParser\Node\Expr\New_;

class EdicaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //retorna a tela do index
        $edicaos = Edicao::get();
        return view('adm.config.edicao.index', compact('edicaos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //retorna a tela para cadastro
        $formatos = Formato::get();
        return view('adm.config.edicao.create', compact('formatos'));
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
            'formato' => 'required',
        ]);

        $edicao = new Edicao([
            'nome' => $request->get('nome'),
            'formato_id' => $request->get('formato')
        ]);

        $edicao->save();

        return redirect()->route('edicao.index')->with('success','Edição cadastrada com sucesso');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Edicao $edicao)
    {
        //retorna tela de edição
        $formatos = Formato::get();
        return view('adm.config.edicao.edit', compact('edicao', 'formatos'));
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
        //valida as entradas
        $request->validate([
            'nome' => 'required|max:255',
            'formato' => 'required',
        ]);

        $edicao = Edicao::find($id);
        $edicao->nome = $request->get('nome');
        $edicao->formato_id = $request->get('formato');
        $edicao->update();

        return redirect()->route('edicao.index')->with('success','Edição atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //exclui a edição
        $edicao = Edicao::findOrFail($id);
        $edicao->delete();
        return redirect()->route('edicao.index');
    }
}
