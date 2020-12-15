@extends('layouts.adm')

@section('main')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Editar Torneio</h1>
                    </div>
                </div>
            </div>
        </div>
       
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card card-secondary col-sm">
                        <div class="card-header">
                            <h3 class="card-title">Editar</h3>
                        </div>

                        <form role="form" method="POST" action="{{ route('torneio.update', $torneio->id)}}">
                            @csrf
                            <input type="hidden" name="_method" value="PUT">
                            <div class="card-body">
                                <div class="form-group col-sm">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome" value="{{$torneio->nome}}">
                                </div>

                                <div class="form-group col-sm">
                                    <label for="formato">Formato</label>
                                    <select name="formato" id="formato" class="form-control select2">
                                        <option value="">Selecione</option>
                                        @forelse ($formatos as $formato)
                                        <option {{ $formato->id == $formato->id ? 'selected' : '' }} value="{{$formato->id}}">{{$formato->nome}}</option>
                                        @empty
                                            
                                        @endforelse
                                    </select>
                                </div>

                                <div class="form-group col-sm">
                                    <label for="inscricao">Valor de inscrição</label>
                                    <input type="number" class="form-control" id="inscricao" name="inscricao" value="{{$torneio->valor_inscricao}}">
                                </div>

                                <div class="form-group col-sm">
                                    <label for="data_limite_inscricao">Data limite de inscrição</label>
                                    <input type="date" class="form-control" name="data_limite_inscricao" value="{{$torneio->dt_limite_inscricao}}">
                                </div>

                                <div class="form-group col-sm">
                                    <label for="data_inicio">Data de início</label>
                                    <input type="date" class="form-control" name="data_inicio" value="{{ $torneio->dt_inicio }}">
                                </div>

                                <div class="form-group col-sm">
                                    <label for="premiacao">Premiação</label>
                                    <input type="number" class="form-control" name="premiacao" value="{{ $torneio->premiacao }}">
                                </div>
                            </div>

                            @if(Session::has('error'))
                                <div class="callout callout-danger">
                                    <p>{{ session('error') }}</p>
                                </div>
                            @endif

                            <div class="card-footer">
                                <button type="submit" class="btn btn-secondary">Salvar</button>
                                <a href="/adm/tools/torneio">
                                    <button class="btn btn-danger">Voltar</button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
