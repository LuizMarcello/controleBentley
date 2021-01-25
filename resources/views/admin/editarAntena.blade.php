@extends('admin.home')

@section('titulo-pagina')
    Editar antenas
@endsection

@section('conteudo')

    <div class="row">
        <div class="col-md-10">
            <div class="row d-flex justify-content-center">
                <h3>Editando antena</h3>
            </div>

            <div class="col-md-10">
                <form class="" action="{{ route('admin.antenas.atualizar', $registro->id) }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="put">
                    @include('admin._formAntena')
                    <button class="btn btn-outline-success">Atualizar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
