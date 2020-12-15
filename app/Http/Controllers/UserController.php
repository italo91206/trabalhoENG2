<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //retorna a tela do index
        $users = User::get();
        return view('adm.config.acesso.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //retorna a tela para cadastro
        return view('adm.config.acesso.create');
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
            'email' => 'required|max:255',
            'senha' => 'required|max:255',
        ]);

        //salva o usuario no banco de dados
        $user = new User([
            'name' => $request->get('nome'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password'))
        ]);

        $user->save();

        return redirect()->route('user.index')->with('success','Usuário cadastrado com sucesso');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //retorna tela de edição
        return view('adm.config.acesso.edit', compact('user'));
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
        //atualiza um usuário
        $request->validate([
            'nome' => 'required|max:255',
            'email' => 'required|max:255',
            'senha' => 'required|max:255',
        ]);

        $user = User::find($id);
        $user->name = $request->get('nome');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('senha'));
        $user->save();

        return redirect()->route('user.index')->with('success','Usuário atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //exclui o usuário
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
