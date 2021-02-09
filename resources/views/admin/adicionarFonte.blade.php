@extends('admin.home')

        @section('titulo-pagina')
            Adicionar fontes
        @endsection

        @section('conteudo')

            <div class="row">
                <div class="col-md-10">
                    <div class="row d-flex justify-content-center">
                        <button type="button" class="btn btn-secondary btn-sm btn-block">
                            <h4>Adicionando fonte</h4>
                        </button>

                    </div>
                    <br>
                    <br>
                    <form class="" action="{{ route('admin.fontes.salvar') }}" method="POST">
                        {{ csrf_field() }}
                        @include('admin._formLayoutFonteAdicionar')

                        <button class="btn btn-outline-success btn-sm">Salvarr</button>
                        <a href="{{ route('admin.fontes') }}" class="btn btn-primary btn-sm" role="button"
                            aria-disabled="true">Voltar</a>
                    </form>
                    <br>
                </div>
            </div>

        @endsection