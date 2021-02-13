@extends('admin.home')

@section('titulo-pagina')
    Detalhes dos ilnbs
@endsection

@section('conteudo')
    <div class="row d-flex justify-content-center">
        <button type="button" class="btn btn-secondary btn-sm btn-block">
            <h4>Detalhes do ilnb</h4>
        </button>
    </div>

    <br>

    <div class="row">
        <form class="" action="{{ route('admin.ilnbs.detalhes', $registro->id) }}" method="GET">
            {{ csrf_field() }}
            {{-- <input type="hidden" name="_method" value="put"> --}}
            @include('admin._formLayoutIlnbDetalhes')
            <a href="{{ route('admin.ilnbs') }}" class="btn btn-primary btn-sm" role="button"
                aria-disabled="true">Voltar</a>
        </form>
    </div>

@endsection



