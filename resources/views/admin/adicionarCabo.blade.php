@extends('admin.home')

@section('titulo-pagina')
    Adicionar cabos
@endsection

@section('conteudo')

    <div class="row">
        <div class="col-md-10">
            <div class="row d-flex justify-content-center">
                <button type="button" class="btn btn-secondary btn-sm btn-block">
                    <h4>Adicionando cabo</h4>
                </button>
            </div>
            <br>
            <form class="" action="{{ route('admin.cabos.salvar') }}" method="POST">
                {{ csrf_field() }}
                @include('admin._formLayoutCaboAdicionar')
                <button class="btn btn-outline-success btn-sm">Salvarr</button>
            </form>

            <div class="col">
                <a href="{{ route('admin.cabos') }}" class="btn btn-primary btn-sm" role="button"
                    aria-disabled="true">Voltar</a>
            </div>

        </div>
    </div>

@endsection
