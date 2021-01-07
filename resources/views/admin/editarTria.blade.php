@extends('admin.home')

@section('titulo-pagina')
    Editar trias
@endsection

@section('conteudo')

    <div class="row">
        <div class="col-md-8">
            <div class="row d-flex justify-content-center">
                <h3>Editando tria</h3>
            </div>

            <div class="col-md-12">
                <form class="" action="{{ route('admin.trias.atualizar', $registro->id) }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="put">
                    @include('admin._formTria')
                    <button class="btn btn-outline-success">Atualizar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
