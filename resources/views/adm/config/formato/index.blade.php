@extends('layouts.adm')

@section('main')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Formatos de jogos</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <main>
                    <div class="row">
                        
                        <!-- jogadores -->
                        <div class="col-lg-3 col-6">
                          
                          <div class="small-box bg-success">
                            <div class="inner">
                              <h3 id="user-count" class="hidden">hold</h3>
              
                              <p>Formatos cadastrados no total</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-clone"></i>
                            </div>
                            <a href="#" class="small-box-footer">Cadastrar Novo <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                    </div>

                    
                </main>
            </div>
        </section>

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Formatos - Visualização geral</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <table id="formatosView">
                <tr>
                    <th class="id">ID</th>
                    <th class="nome">Nome</th>
                    <th class="data-criacao">Data de criação</th>
                    <th class="last-updated">Ultima vez atualizado</th>
                    <th class="created-by">Criado por</th>
                </tr>
            </table>
        </section>
        
    </div>

    <div id="loading">
        <div class="spinner-border"></div>
    </div>

    <script src="/js/formatos-control.js">
@endsection