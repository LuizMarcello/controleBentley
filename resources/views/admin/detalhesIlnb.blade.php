@extends('admin.home')

@section('titulo-pagina')
    Detalhes dos ilnbs
@endsection

@section('conteudo')
    <div class="row">
        <div class="col-md-11">
            <div class="row d-flex justify-content-center">
                <button type="button" class="btn btn-secondary btn-sm btn-block col-md-10">
                    <h4>Detalhes do ilnb</h4>
                </button>
            </div>
            <br>
            <br>
            <form class="" action="{{ route('admin.ilnbs.detalhes', $registro->id) }}" method="GET">
                {{ csrf_field() }}
                {{--  <input type="hidden" name="_method" value="put">  --}}
                @include('admin._formLayoutIlnbDetalhes')
                <div class="row">
                    <div class="col-md-4">
                        <a href="{{ route('admin.ilnbs') }}" class="btn btn-primary btn-sm" role="button"
                            aria-disabled="true">Voltar</a>
                    </div>
                </div>
            </form>
            <br>
        </div>
    </div>
    
@endsection
                        







