@extends('admin.home')

@section('titulo-pagina')
        Estoque total
@endsection

@section('conteudo')

<div class="row">
    <div class="col-md-8">
            <div class="row justify-content-center">
                <h5>Todos os componentes cadastrados</h5>

            </div>

            <table class="table table-striped table table-sm">

                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome do Componente</th>
                        <th>Banda</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($registros as $registro)
                        <tr>
                            <td>{{ $registro->id }}</td>
                            <td>{{-- O nome na tabela vira um link --}}
                                {{-- <a href="{{ route('componente.show', $registro->id) }}">
                                    {{ $registro->name }}
                                </a> --}}
                                {{ $registro->nome }}
                            </td>
                            <td>{{ $registro->banda }}</td>
                            <td>
                                <a class="btn btn-outline-info btn-sm"
                                    href="{{ route('admin.estoquetotal.editar', $registro->id) }}">Editar</a>
                                <a class="btn btn-outline-danger btn-sm"
                                    href="{{ route('admin.estoquetotal.deletar', $registro->id) }}">Deletar</a>
                            </td>
                        </tr>
                    {{--  Quando um for estiver vazio, mostrar um valor padrão --}}
                    @empty
                        <p><td>Nenhum produto cadastrado</td></p>
                    @endforelse
                </tbody>
            </table>


            <div class="col-md-8">
                <h6>Para detalhes dos componentes, clique no seu nome</h6>
            </div>

            <div class="col-md-10">
                <a class="btn btn-primary btn-sm mx-auto" href="{{ route('admin.estoquetotal.adicionar') }}" role="button">
                    Cadastrar novo tipo de componente
                </a>
            </div>
            <br>

            {{-- <a href="{{ route('componentes.create') }}">Cadastrar novo tipo de componente</a> --}}

            <div class="col-md-10">
                <a class="btn btn-primary btn-sm mx-auto" href="/" role="button">
                    Voltar a página principal
                </a>
            </div>
    </div>

</div>

@endsection




















