@extends('admin.home')

@section('titulo-pagina')
    Detalhes dos modens
@endsection

@section('conteudo')
    <div class="row d-flex justify-content-center">
        <button type="button" class="btn btn-secondary btn-sm btn-block">
            <h4>Detalhes do modem</h4>
        </button>
    </div>

    <br>

    <div class="row">
        <form class="" action="{{ route('admin.modens.detalhes', $registro->id) }}" method="GET">
            {{ csrf_field() }}
            {{-- <input type="hidden" name="_method" value="put"> --}}
            @include('admin._formLayoutModemDetalhes')
            <a href="{{ route('admin.modens') }}" class="btn btn-primary btn-sm" role="button"
                aria-disabled="true">Voltar</a>
        </form>
    </div>

@endsection



