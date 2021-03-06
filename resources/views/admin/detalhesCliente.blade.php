@extends('admin.home')

@section('titulo-pagina')
    Detalhes dos clientes
@endsection

@section('conteudo')
    <div class="row d-flex justify-content-center">
        <button type="button" class="btn btn-secondary btn-sm btn-block">
            <h4>Detalhes do Cliente</h4>
        </button>
    </div>

    <br>

    <div class="row">
        <form class="" action="{{ route('admin.clientes', $registro->id) }}" method="GET">
            {{ csrf_field() }}
            {{-- <input type="hidden" name="_method" value="put">
            --}}
            @include('admin._formLayoutClienteDetalhes')
            {{-- <button class="btn btn-outline-success btn-sm">Voltatttr</button>
            --}}
        </form>

        <div class="row">
            <div class="form-group col-md-5">
                <!-- Botão que dispara o Modal -->
                <br>
                <button type="button" class="btn btn-primary btn btn-sm" data-toggle="modal" data-target="#migClienteModal">
                    Migrações
                </button>

                <!-- Inicio do modal migracao -->
                <div class="modal fade" id="migClienteModal" tabindex="-1" role="dialog"
                    aria-labelledby="migClienteModalLabel">

                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="migClienteModalLabel">Migrações realizadas</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body form-group">

                                <form action="{{ route('admin.clientes.adicionar') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="put">
                                    <textarea class="form-control rounded-0" name="migracao" cols="4" rows="15"
                                        value="{{ isset($registro->migracao) ? $registro->migracao : '' }}"></textarea>
                                    <button type="submit" class="btn btn-outline-success">Atualizar</button>
                                </form>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                <button type="button" class="btn btn-primary">Salvar</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            {{-- fim do modal migracao --}}
            <br>

            <div class="form-group col-md-5">
                <!-- Botão que dispara o Modal -->
                <br>
                <button type="button" class="btn btn-primary btn btn-sm" data-toggle="modal" data-target="#obsClienteModal">
                    Observações
                </button>

                <!-- Inicio do modal observacao-->
                <div class="modal fade" id="obsClienteModal" tabindex="-1" role="dialog"
                    aria-labelledby="obsClienteModalLabel">

                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="obsClienteModalLabel">Observações</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body form-group">

                                <form action="{{ route('admin.clientes.adicionar') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="put">
                                    <textarea class="form-control rounded-0" name="observacao" cols="4" rows="15"
                                        value="{{ isset($registro->observacao) ? $registro->observacao : '' }}"></textarea>
                                    <button type="submit" class="btn btn-outline-success">Atualizar</button>
                                </form>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                <button type="button" class="btn btn-primary">Salvar</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            {{-- fim do modal observacao --}}
        </div>
    </div>
    <div class="row">
        <a href="{{ route('admin.clientes') }}" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Voltar</a>
    </div>
@endsection
