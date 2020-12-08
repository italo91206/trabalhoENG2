@extends('layouts.adm')

@section('main')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Jogadores</h1>
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
              
                              <p>Jogadores cadastrados no total</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-friends"></i>
                            </div>
                            <a href="#" class="small-box-footer">Cadastrar Novo <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>

                        <!-- funcionários -->
                        <div class="col-lg-3 col-6">
                          
                          <div class="small-box bg-success">
                            <div class="inner">
                              <h3 id="user-count" class="hidden">hold</h3>
              
                              <p>Funcionários cadastrados no total</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-friends"></i>
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
                        <h1 class="m-0 text-dark">Jogadores - Visualização geral</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <table id="usuariosView">
                <tr>
                    <th class="id">ID</th>
                    <th class="nome">Nome</th>
                    <th class="email">Email</th>
                    <th class="partidas">Partidas</th>
                    <th class="winrate">Winrate</th>
                    <th class="opcoes">Opções</th>
                </tr>
            </table>
        </section>
        
    </div>

    <div id="loading">
        <div class="spinner-border"></div>
    </div>

    <script src="/js/jogadores-control.js">
@endsection