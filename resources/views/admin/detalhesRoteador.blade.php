@extends('admin.home')

@section('titulo-pagina')
    Detalhes dos roteadores
@endsection

{{-- @section('conteudo')
    <div class="row d-flex justify-content-center">
        <button type="button" class="btn btn-secondary btn-sm btn-block">
            <h4>Detalhes do roteador</h4>
        </button>
    </div>

    <br>

    <div class="row">
        <form class="" action="{{ route('admin.roteadores.detalhes', $registro->id) }}" method="GET">
            {{ csrf_field() }} --}}
{{-- <input type="hidden" name="_method" value="put"> --}}
{{-- @include('admin._formLayoutRoteadorDetalhes')
            <a href="{{ route('admin.roteadores') }}" class="btn btn-primary btn-sm" role="button"
                aria-disabled="true">Voltar</a>
        </form>
    </div>

@endsection --}}




@section('conteudo')
    <div class="row">
        <div class="col-md-11">
            <div class="row d-flex justify-content-center">
                <button type="button" class="btn btn-secondary btn-sm btn-block col-md-10">
                    <h4>Detalhes do roteador</h4>
                </button>
            </div>
            <br>
            <br>
            <form class="" action="{{ route('admin.roteadores.detalhes', $registro->id) }}" method="GET">
                {{ csrf_field() }}
                {{-- <input type="hidden" name="_method" value="put"> --}}
                @include('admin._formLayoutRoteadorDetalhes')
                <div class="row">
                    <div class="col-md-4">
                        <a href="{{ route('admin.roteadores') }}" class="btn btn-primary btn-sm" role="button"
                            aria-disabled="true">Voltar</a>
                    </div>
                </div>
            </form>
            <br>
        </div>
    </div>
@endsection
