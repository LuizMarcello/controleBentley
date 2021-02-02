@extends('admin.home')

@section('titulo-pagina')
    Detalhes dos planos
@endsection

@section('conteudo')

<div class="row d-flex justify-content-center">
    <button type="button" class="btn btn-secondary btn-sm btn-block"><h4>Detalhes do plano</h4></button>
</div>
<br>
<div class="row">
    <form class="" action="{{ route('admin.planos', $registro->id) }}" method="GET">
        {{ csrf_field() }}
        {{-- <input type="hidden" name="_method" value="put"> --}}
        @include('admin._formLayoutPlanoDetalhes')
        <button class="btn btn-outline-success">Voltar</button>
    </form>
</div>

@endsection




