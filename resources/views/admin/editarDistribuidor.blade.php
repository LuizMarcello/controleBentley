@extends('admin.home')

@section('titulo-pagina')
    Editar distribuidor
@endsection

@section('conteudo')

    <div class="row d-flex justify-content-center">
        <h3>Editando distribuidor</h3>
    </div>

    <div class="row">
        <form class="" action="{{ route('admin.distribuidores.atualizar', $registro->id) }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            @include('admin._formDistribuidor')

            <button class="btn btn-outline-success">Atualizar</button>
        </form>
    </div>

@endsection
