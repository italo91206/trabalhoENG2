@extends('layouts.adm')

@section('main')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Cadastrar Formato</h1>
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
                            <h3 class="card-title">Novo Formato</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="POST" action="{{ route('formato.store')}}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome"
                                        placeholder="Enter name">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-secondary">Salvar</button>
                                <a href="/adm/config/formato">
                                    <button class="btn btn-danger">Voltar</button>
                                </a>
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
