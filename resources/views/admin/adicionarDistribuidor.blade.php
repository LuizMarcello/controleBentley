@extends('admin.home')

@section('titulo-pagina')
    Adicionar Distribuidor
@endsection

@section('conteudo')

    <div class="row d-flex justify-content-center">
        <h3>Adicionando distribuidor</h3>
    </div>

    <div class="row">
        <form class="" action="{{ route('admin.distribuidores.salvar') }}" method="POST">
            {{ csrf_field() }}
            @include('admin._formDistribuidor')

            <button class="btn btn-outline-success">Salvar</button>
        </form>
    </div>

@endsection
