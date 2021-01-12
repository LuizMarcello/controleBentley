@extends('admin.home')

@section('titulo-pagina')
    Adicionar iLnbs
@endsection

@section('conteudo')

    <div class="row">
        <div class="col-md-10">
            <div class="row d-flex justify-content-center">
                <h3>Adicionando ilnb</h3>
            </div>
            <form class="" action="{{ route('admin.ilnbs.salvar') }}" method="POST">
                {{ csrf_field() }}
                @include('admin._formIlnb')

                <button class="btn btn-outline-success">Salvar</button>
            </form>
        </div>
    </div>

@endsection
