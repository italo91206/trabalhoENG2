@extends('layouts.adm')

@section('main')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Torneios</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <main>
                    <div class="row">
                        <!-- criar torneio -->
                        <div class="col-lg-3 col-6">
                          <div class="small-box bg-info">
                            <div class="inner">
                            </div>

                            <div class="icon">
                                <i class="fas fa-plus-circle"></i>
                            </div>
                            <a href="/adm/torneios/criar" class="small-box-footer">Criar novo torneio <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>

                        <!-- inscrever participantes em determinado torneio -->
                        <div class="col-lg-3 col-6">
                          <div class="small-box bg-success">
                            <div class="inner">
                            </div>

                            <div class="icon">
                                <i class="fas fa-user-friends"></i>
                            </div>
                            <a href="#" class="small-box-footer">Inscrever novos participantes <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>

                        <!-- Finalizar torneio -->
                        <div class="col-lg-3 col-6">
                          <div class="small-box bg-danger">
                            <div class="inner">
                            </div>
                            <div class="icon">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <a href="#" class="small-box-footer">Finalizar torneio <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                      </div>
                </main>
            </div>
        </section>
    </div>

    <style>
        .inner{
            height: 112px;
        }
    </style>
@stop