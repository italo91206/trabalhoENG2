@extends('layouts.adm')

@section('main')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Editar usuário: </h1>
                    </div>
                </div>
            </div>
        </div>
        
        <section class="content">
            <div class="container-fluid">
                <main>
                    <form onchange="index.validaForm()">
                        <?php echo csrf_field() ?>

                        <div class="form-group">
                            <label for="">ID de usuário</label>
                            <input type="text" id="user_id"  class="form-control" disabled>
                        </div>

                        <div class="form-group">
                            <label for="">Nome de usuário</label>
                            <input type="text" id="user_name"  class="form-control" disabled>
                        </div>

                        <div class="form-group">
                            <label for="">E-mail</label>
                            <input type="text" id="user_email" class="form-control" disabled>
                        </div>

                        <div class="form-group">
                            <label for="">Habilitado</label>
                            <select name="" id="is_active" class="form-control" disabled>
                                <option name="placeholder_only" value="" selected></option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Função</label>
                            <select id="user_job" value="" class="form-control" disabled>
                                <option name="placeholder_only" id="0" selected></option>
                            </select>
                            <!-- <input type="text" id="user_job" class="form-control"> -->
                        </div>

                        <div class="form-group flex">
                            <input type="button" onclick="index.mandarAlteracoes()" id="save_edit" value="Salvar alterações" class="btn btn-block btn-success" disabled>
                            <input type="button" onclick="index.excluirUsuario()" id="delete_user" value="Excluir usuário" class="btn btn-block btn-danger" disabled>
                        </div>
                    </form>
                </main>
            </div>
        </section>
        
        <div id="loading">
            <div class="spinner-border"></div>
        </div>
    </div>

    <script src="/js/jogador-control.js">
@stop