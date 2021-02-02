@extends('admin.home')

@section('titulo-pagina')
    Detalhes dos clientes
@endsection

@section('conteudo')

<div class="row d-flex justify-content-center">
    <button type="button" class="btn btn-secondary btn-sm btn-block"><h4>Detalhes do Cliente</h4></button>
</div>
<br>
<div class="row">
    <form class="" action="{{ route('admin.clientes', $registro->id) }}" method="GET">
        {{ csrf_field() }}
        {{-- <input type="hidden" name="_method" value="put"> --}}
        @include('admin._formLayoutClienteDetalhes')
        <button class="btn btn-outline-success">Voltar</button>
    </form>
</div>

<a href="{{ route('admin.clientes') }}" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Voltar</a>

@endsection




