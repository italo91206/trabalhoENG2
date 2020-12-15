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
      <div class="row">
        <!-- criar um novo torneio -->
        <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>Torneios</h3>
              <p>Cadastre um novo no sistema</p>
            </div>
            <div class="icon">
              <i class="fas fa-file-invoice"></i>
            </div>
            <a href="{{ route('torneio.create') }}" class="small-box-footer">Cadastrar <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>Relatório</h3>
              <p>Veja todos os torneios, abertos ou finalizados.</p>
            </div>

            <div class="icon">
              <i class="fas fa-file-invoice"></i>
            </div>

            <a href="/adm/tools/torneio/relatorio" class="small-box-footer">Ver relatório <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Torneios abertos</h3>
            </div>
            <div class="card-body table-responsive p-0">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Abertura</th>
                    <th>Final de inscrição</th>
                    <th>Jogadores inscritos</th>
                    <th>Premiação</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($torneios as $torneio)
                    @if(!$torneio->is_encerrado)
                      <tr>
                        <th scope="row">{{ $torneio->id }}</th>
                        <td>{{ $torneio->nome }}</td>
                        <td>{{ $torneio->created_at }}</td>
                        <td>{{ $torneio->dt_limite_inscricao }}
                        <td>{{ $torneio->qtd_jogadores }}</td>
                        <td>{{ $torneio->premiacao }}</td>
                        <td>
                          <div class="btn-group">
                            <a href="{{ route('torneio.edit', $torneio->id) }}" class="btn text-info">
                              <i class="fas fa-edit"></i>
                            </a>

                            <button type="button" class="btn text-danger" data-toggle="modal" data-target="#modal-default-{{$torneio->id}}">
                              <i class="fas fa-times"></i>
                            </button>
                          </div>
                        </td>
                      </tr>

                      <!-- MODALS -->
                      <div class="modal fade" id="modal-default-{{$torneio->id}}">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Deseja encerrar este torneio?</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                              <form method="POST" action="/adm/tools/torneio/encerrar/{{$torneio->id}}">
                                @csrf
                                <input type="hidden" name="_method" value="POST">
                                <button type="submit" class="btn btn-danger">Encerrar torneio</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endif

                    @empty
                      <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-info"></i> Alerta!</h5>
                        Não possui torneios cadastrados.
                      </div>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection