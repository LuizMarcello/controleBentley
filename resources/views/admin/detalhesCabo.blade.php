@extends('admin.home')

@section('titulo-pagina')
    Detalhes dos cabos
@endsection

@section('conteudo')

<div class="row d-flex justify-content-center">
    <button type="button" class="btn btn-secondary btn-sm btn-block">
        <h4>Detalhes do cabo</h4></button>
</div>
<br>
<div class="row">
    <form class="" action="{{ route('admin.cabos', $registro->id) }}" method="GET">
        {{ csrf_field() }}
        {{-- <input type="hidden" name="_method" value="put"> --}}
        @include('admin._formLayoutCaboDetalhes')
        <button class="btn btn-outline-success">Voltar</button>
    </form>
</div>

@endsection




