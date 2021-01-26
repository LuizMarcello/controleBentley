@extends('admin.home')

@section('titulo-pagina')
    Editar clientes
@endsection

@section('conteudo')

    <div class="row d-flex justify-content-center">
        <h3>Editando cliente</h3>
    </div>

    <form class="" action="{{ route('admin.clientes.atualizar', $registro->id) }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin._formLayoutCliente')
        <button class="btn btn-outline-success btn-sm">Atualizar</button>
    </form>

    <div class="col">
        <a href="{{ route('admin.clientes') }}" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Voltar</a>
    </div>

@endsection

