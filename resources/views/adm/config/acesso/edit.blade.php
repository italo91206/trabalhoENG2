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
                    <form>
                        <?php echo csrf_field() ?>

                        <div class="form-group">
                            <label for="">ID de usuário</label>
                            <input type="text" id="user_id" disabled>
                        </div>

                        <div class="form-group">
                            <label for="">Nome de usuário</label>
                            <input type="text" id="user_name" disabled>
                        </div>

                        <div class="form-group">
                            <label for="">E-mail</label>
                            <input type="text" id="user_email">
                        </div>

                        <div class="form-group">
                            <label for="">Função</label>
                            <input type="text" id="user_job">
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