@extends('layouts.adm')

@section('main')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Editar Edição</h1>
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
                        <form role="form" method="POST" action="{{ route('edicao.update', $edicao->id)}}">
                            @csrf
                            <input type="hidden" name="_method" value="PUT">
                            <div class="card-body">
                                <div class="form-group col-sm">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome" value="{{$edicao->nome}}"
                                        placeholder="Enter name">
                                </div>
                                <div class="form-group col-sm">
                                    <label for="formato">Formato</label>
                                    <select name="formato" id="formato" class="form-control select2">
                                        <option value="">Selecione</option>
                                        @forelse ($formatos as $formato)
                                        <option {{ $formato->id == $edicao->id ? 'selected' : '' }} value="{{$formato->id}}">{{$formato->nome}}</option>
                                        @empty
                                            
                                        @endforelse
                                    </select>
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
