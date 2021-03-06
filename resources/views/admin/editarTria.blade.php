@extends('admin.home')

@section('titulo-pagina')
    Editar trias
@endsection

@section('conteudo')
    <div class="row">
        <div class="col-md-10">
            <div class="row d-flex justify-content-center">
                <button type="button" class="btn btn-secondary btn-sm btn-block col-md-11">
                    <h4>Editando tria</h4>
                </button>
            </div>
            <br>
            <br>
            <form class="" action="{{ route('admin.trias.atualizar', $registro->id) }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                @include('admin._formLayoutTria')
                <button class="btn btn-outline-success btn-sm">Atualizar</button>
                <a href="{{ route('admin.trias') }}" class="btn btn-primary btn-sm" role="button"
                    aria-disabled="true">Voltar</a>
            </form>
            <br>
        </div>
    </div>

    {{-- Função para registrar o ultimo registro nos select --}}
    @php
    function selected($value, $selected)
    {
        return $value == $selected ? ' selected="selected"' : '';
    }
    @endphp
@endsection
