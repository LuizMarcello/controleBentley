@extends('admin.home')

@section('titulo-pagina')
    Adicionar Modens
@endsection

@section('conteudo')

    <div class="row">
        <div class="col-md-10">
            <div class="row d-flex justify-content-center">
                <h3>Adicionando modem</h3>
            </div>
            <form class="" action="{{ route('admin.modens.salvar') }}" method="POST">
                {{ csrf_field() }}
                @include('admin._formModem')

                <button class="btn btn-outline-success">Salvar</button>
            </form>
        </div>
    </div>

@endsection
