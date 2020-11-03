@extends('layouts.adm')

@section('main')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Acessos</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <main>
                    <div class="row">
                        <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-success">
                            <div class="inner">
                              <h3>150</h3>
              
                              <p>Usuários</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-friends"></i>
                            </div>
                            <a href="#" class="small-box-footer">Cadastrar Novo <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                      </div>
                      <!-- /.row -->
                </main>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@stop