<?php

namespace App\Http\Controllers;

use App\Model\Torneio;
use App\Model\Formato;
use Illuminate\Http\Request;

class TorneioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //retorna a tela do index
        $torneios = Torneio::get();

        return view('adm.tools.torneio.index', compact('torneios'));
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
        return view('adm.tools.torneio.create', compact('formatos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $file = fopen("C:\\Users\\italo\\Desktop\\arquivo.txt", "w");
        // fwrite($file, "passei aqui");
        // fclose($file);

        $final_inscricao = $request['data_limite_inscricao'];
        $formato = $request['formato'];
        $comeca = $request['data_inicio'];
        $custo = $request['inscricao'];
        $premiacao = $request['premiacao'];
        $nome = $request['nome'];

        if(strlen($nome) >= 10 ){
            if($formato > 0){
                if($comeca == $final_inscricao || $comeca > $final_inscricao){
                    if($custo >= 15){
                        if($premiacao >= ($custo*2)*0.66 ){
                            $torneio = new Torneio([
                                'nome' => $request['nome'],
                                'formato_id' => $request['formato'],
                                'vencedor_id' => null,
                                'is_encerrado' => 0,
                                'qtd_jogadores' => 0,
                                'valor_inscricao' => $request['inscricao'],
                                'dt_limite_inscricao' => $request['data_limite_inscricao'],
                                'dt_inicio' => $request['data_inicio'],
                                'premiacao' => $request['premiacao']
                            ]);
                            $torneio->save();
                
                            return redirect()->route('torneio.index')->with('success','Torneio atualizada com sucesso');
                        }
                        else{
                            return redirect()->back()->with('error','A premiação precisa ser no mínimo 60% do custo de 2 participantes.');
                        }
                    }
                    else{
                        return redirect()->back()->with('error','O custo de inscrição precisa ser no mínimo R$ 15');
                    }   
                }
                else{
                    return redirect()->back()->with('error','A data de começo precisa ser no mínimo a mesma ou então posterior à data final de inscrição.');
                }
            }
            else{
                return redirect()->back()->with('error','Selecione um formato válido.');
            }
        }
        else{
            return redirect()->back()->with('error','O nome precisa de 10 caracteres no mínimo.');
        }
        
    }

    /**
     * See all the Tournament
     *
     * @return \Illuminate\Http\Response
     */
    public function relatorio(){
        $torneios = Torneio::get();
        $formatos = Formato::get();

        return view('adm.tools.torneio.relatorio', compact('torneios', 'formatos'));
    }


    public function encerrar($id){
        $torneio = Torneio::findOrFail($id);
        $torneio->is_encerrado = 1;
        $torneio->save();

        $this->relatorio();
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
        $torneio = Torneio::findOrFail($id);
        $formatos = Formato::get();

        return view('adm.tools.torneio.edit', compact('torneio', 'formatos'));
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
            'formato' => 'required',
            'inscricao' => 'required',
            'data_limite_inscricao' => 'required',
            'data_inicio' => 'required',
            'premiacao' => 'required'
        ]);

        $final_inscricao = $request['data_limite_inscricao'];
        $comeca = $request['data_inicio'];
        $custo = $request['inscricao'];
        $premiacao = $request['premiacao'];

        if($comeca == $final_inscricao || $comeca > $final_inscricao){
            if($custo >= 15){
                if($premiacao >= ($custo*2)*0.66 ){
                    $torneio = Torneio::findOrFail($id);
                    $torneio->nome = $request['nome'];
                    $torneio->formato_id = $request['formato'];
                    $torneio->valor_inscricao = $request['inscricao'];
                    $torneio->dt_limite_inscricao = $request['data_limite_inscricao'];
                    $torneio->dt_inicio = $request['data_inicio'];
                    $torneio->premiacao = $request['premiacao'];
                    $torneio->save();
        
                    return redirect()->route('torneio.index')->with('success','Torneio atualizada com sucesso');
                }
                else{
                    return redirect()->back()->with('error','A premiação precisa ser no mínimo 60% do custo de 2 participantes.');
                }
            }
            else{
                return redirect()->back()->with('error','O custo de inscrição precisa ser no mínimo R$ 15');
            }   
        }
        else{
            return redirect()->back()->with('error','A data de começo precisa ser no mínimo a mesma ou então posterior à data final de inscrição.');
        }
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
        $torneio = Torneio::findOrFail($id);
        $torneio->delete();
        return redirect()->route('torneio.index');
    }
}
