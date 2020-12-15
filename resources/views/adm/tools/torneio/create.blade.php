@extends('layouts.adm')

@section('main')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Criar Torneio</h1>
                    </div>
                </div>
            </div>
        </div>
       
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card card-secondary col-sm">
                        <div class="card-header">
                            <h3 class="card-title">Criar</h3>
                        </div>

                        <form role="form" method="POST" action="{{ route('torneio.store') }}">
                            @csrf
                            <input type="hidden" name="_method" value="POST">
                            <div class="card-body">
                                <div class="form-group col-sm">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome" value="">
                                </div>

                                <div class="form-group col-sm">
                                    <label for="formato">Formato</label>
                                    <select name="formato" id="formato" class="form-control select2">
                                        <option value="0" selected>Selecione um formato</option>
                                        @forelse ($formatos as $formato)
                                        <option  value="{{$formato->id}}">{{$formato->nome}}</option>
                                        @empty
                                            
                                        @endforelse
                                    </select>
                                </div>

                                <div class="form-group col-sm">
                                    <label for="inscricao">Valor de inscrição</label>
                                    <input type="number" class="form-control" id="inscricao" name="inscricao" value="">
                                </div>

                                <div class="form-group col-sm">
                                    <label for="data_limite_inscricao">Data limite de inscrição</label>
                                    <input type="date" class="form-control" name="data_limite_inscricao" value="">
                                </div>

                                <div class="form-group col-sm">
                                    <label for="data_inicio">Data de início</label>
                                    <input type="date" class="form-control" name="data_inicio" value="">
                                </div>

                                <div class="form-group col-sm">
                                    <label for="premiacao">Premiação</label>
                                    <input type="number" class="form-control" name="premiacao" value="">
                                </div>
                            </div>

                            @if(Session::has('error'))
                                <div class="callout callout-danger">
                                    <p>{{ session('error') }}</p>
                                </div>
                            @endif

                            <div class="card-footer">
                                <button type="submit" class="btn btn-secondary">Criar</button>
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
