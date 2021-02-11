@extends('admin.home')

@section('titulo-pagina')
    Editar planos
@endsection

@section('conteudo')
    <div class="row">
        <div class="col-md-10">
            <div class="row d-flex justify-content-center">
                <h3>Editando plano</h3>
            </div>
            <form class="" action="{{ route('admin.planos.atualizar', $registro->id) }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                @include('admin._formLayoutPlano')
                <button class="btn btn-outline-success btn-sm">Atualizar</button>
            </form>

            <div class="col">
                <a href="{{ route('admin.planos') }}" class="btn btn-primary btn-sm" role="button"
                    aria-disabled="true">Voltar</a>
            </div>
        </div>
    </div>

@endsection
