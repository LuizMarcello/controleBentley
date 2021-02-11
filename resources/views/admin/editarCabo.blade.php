@extends('admin.home')

@section('titulo-pagina')
    Editar cabos
@endsection

@section('conteudo')
    <div class="row">
        <div class="col-md-10">
            <div class="row d-flex justify-content-center">
                <button type="button" class="btn btn-secondary btn-sm btn-block">
                    <h4>Editando cabo</h4>
                </button>
            </div>
            <br>
            <form class="" action="{{ route('admin.cabos.atualizar', $registro->id) }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                @include('admin._formLayoutCabo')
                <button class="btn btn-outline-success btn-sm">Atualizar</button>
            </form>

            <div class="col">
                <a href="{{ route('admin.cabos') }}" class="btn btn-primary btn-sm" role="button"
                    aria-disabled="true">Voltar</a>
            </div>
        </div>
    </div>

@endsection
