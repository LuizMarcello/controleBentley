@extends('admin.home')

@section('titulo-pagina')
    Ilnbs
@endsection

@section('conteudo')

    <div class="row d-flex justify-content-center">
        <button type="button" class="btn btn-secondary btn-sm btn-block">
            <h4>Listagem de Ilnbs</h4>
        </button>

    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Banda</th>
                            <th scope="col">Fabricante</th>
                            <th scope="col">Modelo</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($registros as $registro)
                            <tr>
                                <td>{{ $registro->id }}</td>
                                <td>{{ $registro->banda }}</td>
                                <td>{{ $registro->fabricante }}</td>
                                <td>{{ $registro->modelo }}</td>
                                <td>
                                    <a class="btn btn-outline-success btn-sm"
                                        href="{{ route('admin.ilnbs.detalhes', $registro->id) }}">Visualizar</a>
                                    <a class="btn btn-outline-warning btn-sm"
                                        href="{{ route('admin.ilnbs.editar', $registro->id) }}">Editar</a>
                                    <a class="btn btn-outline-danger btn-sm"
                                        href="{{ route('admin.ilnbs.deletar', $registro->id) }}">Deletar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-md-10">
                <a class="btn btn-primary btn-sm mx-auto" href="{{ route('admin.ilnbs.adicionar') }}" role="button">
                    Incluir Lnb
                </a>
            </div>

            <br>

            <div class="col-md-10">
                <a class="btn btn-primary btn-sm mx-auto" href="/" role="button">
                    Voltar a página principal
                </a>
            </div>

        </div>
    </div>

@endsection
