@extends('admin.home')

@section('titulo-pagina')
    Detalhes do cliente
@endsection

@section('conteudo')

<div class="row d-flex justify-content-center">
    <h3>Detalhes do cliente</h3>
</div>

<div class="row">
    <form class="" action="{{ route('admin.clientes', $registro->id) }}" method="GET">
        {{ csrf_field() }}
        {{-- <input type="hidden" name="_method" value="put"> --}}
        @include('admin._formLayoutClienteDetalhes')
        <button class="btn btn-outline-success">Voltar</button>
    </form>
</div>

@endsection




