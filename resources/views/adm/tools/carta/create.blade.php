@extends('layouts.adm')

@section('main')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Cadastrar Carta</h1>
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
                            <h3 class="card-title">Nova Carta</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="POST" action="{{ route('carta.store')}}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group col-sm">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome">
                                </div>
                                <div class="form-group col-sm">
                                    <label for="edicao">Edição</label>
                                    <select name="edicao" id="edicao" class="form-control select2">
                                        <option value="">Selecione</option>
                                        @forelse ($edicaos as $edicao)
                                        <option value="{{$edicao->id}}">{{$edicao->nome}}</option>
                                        @empty
                                            
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group col-sm">
                                    <label for="custo">Custo</label>
                                    <input type="number" class="form-control" id="custo" name="custo">
                                </div>
                                <div class="form-group col-sm">
                                    <label for="cor">Cor</label>
                                    <select name="cor" id="cor" class="form-control select2">
                                        <option value="">Selecione</option>
                                        <option value="u">Azul</option>
                                        <option value="w">Branco</option>
                                        <option value="b">Preto</option>
                                        <option value="g">Verde</option>
                                        <option value="r">Vermelho</option>
                                        <option value="m">Multicolorida</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm">
                                    <label for="raridade">Raridade</label>
                                    <select name="raridade" id="raridade" class="form-control select2">
                                        <option value="">Selecione</option>
                                        <option value="c">Comum</option>
                                        <option value="i">Incomum</option>
                                        <option value="r">Rara</option>
                                        <option value="m">Mítica</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm">
                                    <label for="descricao">Descrição</label>
                                    <textarea class="form-control" name="descricao" id="descricao"></textarea>
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
