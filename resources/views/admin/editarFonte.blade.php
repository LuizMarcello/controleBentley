@extends('admin.home')

@section('titulo-pagina')
    Editar fontes
@endsection

@section('conteudo')

    <div class="row d-flex justify-content-center">
        <button type="button" class="btn btn-secondary btn-sm btn-block">
            <h4>Editando fonte</h4>
        </button>
    </div>
    <br>
    <br>

    <form class="" action="{{ route('admin.fontes.atualizar', $registro->id) }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin._formLayoutFonte')
        <button class="btn btn-outline-success btn-sm">Atualizar</button>
        <a href="{{ route('admin.fontes') }}" class="btn btn-primary btn-sm" role="button"
            aria-disabled="true">Voltar</a>
    </form>

    {{-- Função para registrar o ultimo registro nos select --}}
    @php
    function selected($value, $selected)
    {
        return $value == $selected ? ' selected="selected"' : '';
    }
    @endphp

@endsection
