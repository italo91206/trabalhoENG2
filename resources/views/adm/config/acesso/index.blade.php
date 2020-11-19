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
                        <div class="col-lg-3 col-6">
                          
                          <div class="small-box bg-success">
                            <div class="inner">
                              <h3 id="user-count" class="hidden">hold</h3>
              
                              <p>Usuários cadastrados no total</p>
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
                        <h1 class="m-0 text-dark">Visualização geral</h1>
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

    <style>
        #usuariosView .id {
            width: 45px;
        }

        #usuariosView .nome {
            width: 200px;
        }

        #usuariosView .email {
            width: 220px;
        }

        #usuariosView .partidas {
            width: 100px;
            text-align: center;
        }

        #usuariosView .winrate {
            width: 100px;
            text-align: center;
        }

        #usuariosView .opcoes {
            width: 160px;
            text-align: center;
        }

        button.disabled {
            opacity: 0.5;
            pointer-events: none;
        }

        th {
            border-bottom: solid 2px #868686;
            padding-bottom: 10px;
        }

        button.disabled {
            opacity: 0.5;
            pointer-events: none;
        }

        button {
            border: none;
            background: #343a40;
            border-radius: 5px;
            width: 25px;
            height: 25px;
            color: #fff;
            margin-right: 5px;
            font-size: 10px;
        }

        #usuariosView tbody:last-child tr {
            border-bottom: solid 1px #343a40;
        }

        tr:hover {
            background: #e6e6e6;
        }

        .hidden{
            visibility: hidden;
        }
    </style>
    <script src="/js/jogadores-control.js">
@stop