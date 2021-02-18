@extends('admin.home')

@section('titulo-pagina')
    Detalhes dos grooves
@endsection

@section('conteudo')
    <div class="row">
        <div class="col-md-11">
            <div class="row d-flex justify-content-center">
                <button type="button" class="btn btn-secondary btn-sm btn-block col-md-10">
                    <h4>Detalhes do groove</h4>
                </button>
            </div>
            <br>
            <br>
            <form class="" action="{{ route('admin.grooves.detalhes', $registro->id) }}" method="GET">
                {{ csrf_field() }}
                {{-- <input type="hidden" name="_method" value="put"> --}}
                @include('admin._formLayoutGrooveDetalhes')
                <div class="row">
                    <div class="col-md-4">
                        <a href="{{ route('admin.grooves') }}" class="btn btn-primary btn-sm" role="button"
                            aria-disabled="true">Voltar</a>
                    </div>
                </div>
            </form>
            <br>
        </div>
    </div>
@endsection







