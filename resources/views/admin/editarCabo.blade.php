@extends('admin.home')

@section('titulo-pagina')
    Editar cabos
@endsection

@section('conteudo')

    <div class="row">
        <div class="col-md-8">
            <div class="row d-flex justify-content-center">
                <h3>Editando Cabo</h3>
            </div>

            <div class="col-md-12">
                <form class="" action="{{ route('admin.cabos.atualizar', $registro->id) }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="put">
                    @include('admin._formCabo')

                    <button class="btn btn-outline-success">Atualizar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
