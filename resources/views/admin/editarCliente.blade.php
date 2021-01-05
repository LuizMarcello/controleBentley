@extends('admin.home')

@section('titulo-pagina')
    Editar clientes
@endsection

@section('conteudo')

<div class="row d-flex justify-content-center">
    <h3>Editando cliente</h3>
</div>

<div class="row">
    <form class="" action="{{ route('admin.clientes.atualizar', $registro->id) }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin._formCliente')
        <button class="btn btn-outline-success">Atualizar</button>
    </form>
</div>

@endsection




