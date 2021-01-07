@extends('admin.home')

@section('titulo-pagina')
    Adicionar trias
@endsection

@section('conteudo')

    <div class="row">
        <div class="col-md-12">
            <div class="row d-flex justify-content-center">
                <h3>Adicionando tria</h3>
            </div>

            <div class="col-md-8">
                <form class="" action="{{ route('admin.trias.salvar') }}" method="POST">
                    {{ csrf_field() }}
                    @include('admin._formTria')

                    <button class="btn btn-outline-success">Salvar</button>
                </form>
            </div>

        </div>
    </div>

@endsection
