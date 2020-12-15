@extends('layouts.adm')

@section('main')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Editar Carta</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="card card-secondary col-sm">
                        <div class="card-header">
                            <h3 class="card-title">Editar</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="POST" action="{{ route('carta.update', $carta->id)}}">
                            @csrf
                            <input type="hidden" name="_method" value="PUT">
                            <div class="card-body">
                                <div class="form-group col-sm">
                                    <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" value="{{$carta->nome}}">
                                </div>
                                <div class="form-group col-sm">
                                    <label for="edicao">Edição</label>
                                    <select name="edicao" id="edicao" class="form-control select2">
                                        <option value="">Selecione</option>
                                        @forelse ($edicaos as $edicao)
                                        <option {{ $edicao->id == $carta->edicao_id ? 'selected' : '' }} value="{{$edicao->id}}">{{$edicao->nome}}</option>
                                        @empty
                                            
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group col-sm">
                                    <label for="custo">Custo</label>
                                    <input type="number" class="form-control" id="custo" name="custo" value="{{$carta->custo}}">
                                </div>
                                <div class="form-group col-sm">
                                    <label for="cor">Cor</label>
                                    <select name="cor" id="cor" class="form-control select2">
                                        <option value="">Selecione</option>
                                        <option {{ $carta->cor == 'u' ? 'selected' : '' }} value="u">Azul</option>
                                        <option {{ $carta->cor == 'w' ? 'selected' : '' }} value="w">Branco</option>
                                        <option {{ $carta->cor == 'b' ? 'selected' : '' }} value="b">Preto</option>
                                        <option {{ $carta->cor == 'g' ? 'selected' : '' }} value="g">Verde</option>
                                        <option {{ $carta->cor == 'r' ? 'selected' : '' }} value="r">Vermelho</option>
                                        <option {{ $carta->cor == 'm' ? 'selected' : '' }} value="m">Multicolorida</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm">
                                    <label for="raridade">Raridade</label>
                                    <select name="raridade" id="raridade" class="form-control select2">
                                        <option value="">Selecione</option>
                                        <option {{ $carta->raridade == 'c' ? 'selected' : '' }} value="c">Comum</option>
                                        <option {{ $carta->raridade == 'i' ? 'selected' : '' }} value="i">Incomum</option>
                                        <option {{ $carta->raridade == 'r' ? 'selected' : '' }} value="r">Rara</option>
                                        <option {{ $carta->raridade == 'm' ? 'selected' : '' }} value="m">Mítica</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm">
                                    <label for="descricao">Descrição</label>
                                    <textarea class="form-control" name="descricao" id="descricao">{{$carta->descricao}}</textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-secondary">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
