@extends('admin.home')

@section('titulo-pagina')
    Adicionar cabos
@endsection

@section('conteudo')
    <div class="row">
        <div class="col-md-11">
            <div class="row d-flex justify-content-center">
                <button type="button" class="btn btn-secondary btn-sm btn-block col-md-10">
                    <h4>Adicionando cabo</h4>
                </button>
            </div>
            <br>
            <br>
            <form class="" action="{{ route('admin.cabos.salvar') }}" method="POST">
                {{ csrf_field() }}
                {{-- <input type="hidden" name="_method" value="put"> --}}
                @include('admin._formLayoutCabo')
                <div class="col-md-4">
                    <button class="btn btn-outline-success btn-sm">Salvar</button>
                    <a href="{{ route('admin.cabos') }}" class="btn btn-primary btn-sm" role="button"
                        aria-disabled="true">Voltar</a>
                </div>
            </form>
            <br>
        </div>
    </div>
@endsection
