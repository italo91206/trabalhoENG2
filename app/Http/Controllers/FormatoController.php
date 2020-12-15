<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Formato;

class FormatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //retorna a tela do index
        $formatos = Formato::get();
        return view('adm.config.formato.index', compact('formatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //retorna a tela para cadastro
        return view('adm.config.formato.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //valida as entradas
        $request->validate([
            'nome' => 'required|max:255',
        ]);

        //salva o usuario no banco de dados
        $formato = new Formato([
            'nome' => $request->get('nome')
        ]);

        $formato->save();

        return redirect()->route('formato.index')->with('success','Formato cadastrado com sucesso');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Formato $formato)
    {
        //retorna tela de edição
        return view('adm.config.formato.edit', compact('formato'));
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
        ]);

        $formato = Formato::find($id);
        $formato->nome = $request->get('nome');
        $formato->save();

        return redirect()->route('formato.index')->with('success','Formato atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //exclui o formato
        $formato = Formato::findOrFail($id);
        $formato->delete();
        return redirect()->route('formato.index');
    }
}
