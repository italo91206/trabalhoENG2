@extends('layouts.adm')

@section('main')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Formatos</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>Formatos</h3>
                                <p>Cadastre um formato novo no sistema</p>
                            </div>
                            <div class="icon">
                                <i class="fab fa-buffer"></i>
                            </div>
                            <a href="/adm/config/formato/create" class="small-box-footer">Acessar <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Lista de Formatos</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome do Formato</th>
                                            <th>Data de Cadastro</th>
                                            <th>Config</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse ($formatos as $formato)
                                        <tr>
                                            <th scope="row">{{ $formato->id }}</th>
                                            <td>{{ $formato->nome }}</td>
                                            <td>{{ $formato->created_at }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('formato.edit', $formato) }}" class="btn text-info"><i class="fas fa-edit"></i></a>
                                                    <button type="button" class="btn text-danger" data-toggle="modal" data-target="#modal-default-{{$formato->id}}">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- MODALS -->
                                        <div class="modal fade" id="modal-default-{{$formato->id}}">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Deseja confirmar a exclusão do Formato?</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                    <form method="POST" action="{{ route('formato.destroy', $formato->id) }}">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="delete">
                                                        <button type="submit" class="btn btn-danger">Confirmar Exclusão</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                    @empty
                                        <div class="alert alert-info alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <h5><i class="icon fas fa-info"></i> Alerta!</h5>
                                            Não possui Formatos Salvos.
                                        </div>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->

            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
