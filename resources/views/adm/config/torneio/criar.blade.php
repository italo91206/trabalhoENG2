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
                    <form onchange="index.validaForm()">
                        <div class="form-group">
                            <label for="">Nome do torneio</label>
                            <input type="text" id="input-torneio-nome" placeholder="Torneio de Verão amador 2020 MTG" class="form-control">
                            <div class="form-erro"></div>
                        </div>

                        <div class="form-group">
                            <label for="">Formato de jogo</label>
                            <select name="" id="select-formatos-de-jogo" class="form-control" disabled>
                            </select>
                            <div class="form-erro"></div>
                        </div>

                        <div class="form-group">
                            <label for="">Número máximo de participantes</label>
                            <input type="text" id="input-max-participantes" placeholder="12" class="form-control" disabled>
                            <div class="form-erro"></div>
                        </div>

                        <div class="form-group">
                            <label for="">Valor de inscrição</label>
                            <input type="number" id="input-valor-inscricao" placeholder="R$ 25,00" class="form-control" disabled>
                            <div class="form-erro"></div>
                        </div>

                        <div class="form-group">
                            <label for="">Data limite de inscrição</label>
                            <input type="text" id="input-data-limite-inscricao" placeholder="25/10/2020" class="form-control" disabled>
                            <div class="form-erro"></div>
                        </div>

                        <div class="form-group">
                            <label for="">Data de início de torneio</label>
                            <input type="text" id="input-data-comeco-torneio" placeholder="27/10/2020" class="form-control" disabled>
                            <div class="form-erro"></div>
                        </div>

                        <div class="form-group">
                            <button action="submit" id="torneio-btn" class="btn btn-info disabled">Criar torneio</button>
                        </div>
                    </form>
                </main>
            </div>
        </section>

        <div id="loading" class="hide">
            <div class="spinner-border"></div>
        </div>

    </div>
    
    <style>
        .form-erro {
            color: red;
        }
    </style>

    <script src="/js/torneios-form-control.js">
@stop