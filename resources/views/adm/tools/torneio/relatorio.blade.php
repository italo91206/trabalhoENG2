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
        <div class="col-12">
          <div class="card">
            <div class="card-body table-responsive p-0">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Formato</th>
                    <th>Abertura</th>
                    <th>Final de inscrição</th>
                    <th>Data de início</th>
                    <th>Jogadores inscritos</th>
                    <th>Premiação</th>
                    <th>Situação</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($torneios as $torneio)
                  <tr>
                    <th scope="row">{{ $torneio->id }}</th>
                    <td>{{ $torneio->nome }}</td>
                    <td>
                      @forelse($formatos as $formato)
                        @if($torneio->formato_id == $formato->id)
                          {{$formato->nome}}
                        @endif
                        @empty
                      @endforelse
                    </td>
                    <td>{{ $torneio->created_at }}</td>
                    <td>{{ $torneio->dt_limite_inscricao }}</td>
                    <td>{{ $torneio->dt_inicio }}</td>
                    <td>{{ $torneio->qtd_jogadores }}</td>
                    <td>{{ $torneio->premiacao }}</td>
                    @if($torneio->is_encerrado)
                      <td class="text-red"><b>Encerrado</b></td>
                    @else
                      <td class="text-green"><b>Aberto</b></td>
                    @endif
                    <td>
                      <div class="btn-group">
                        <a href="{{ route('torneio.edit', $torneio->id) }}" class="btn text-info">
                          <i class="fas fa-edit"></i>
                        </a>

                        <button type="button" class="btn text-danger" data-toggle="modal" data-target="#modal-default-{{$torneio->id}}">
                          <i class="fas fa-trash-alt"></i>
                        </button>
                      </div>
                    </td>
                  </tr>
                  <!-- MODALS -->
                  <div class="modal fade" id="modal-default-{{$torneio->id}}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Deseja confirmar a exclusão deste torneio?</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                          <form method="POST" action="{{ route('torneio.destroy', $torneio->id) }}">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                            <button type="submit" class="btn btn-danger">Confirmar Exclusão</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
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

      <div class="row">
        <div class="col-12">
          <a href="/adm/tools/torneio">
            <button class="btn btn-danger">Voltar</button>
          </a>
        </div>
      </div>
      
    </div>
  </section>
</div>
@endsection