@extends('admin.home')

@section('titulo-pagina')
    Lnbs
@endsection

@section('conteudo')

    <div class="row d-flex justify-content-center">
        <h3>Listagem de Lnbs</h3>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">NotaFiscal</th>
                            <th scope="col">Banda</th>
                            <th scope="col">Serial</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Fabricante</th>
                            <th scope="col">Situação</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($registros as $registro)
                            <tr>
                                <td>{{ $registro->id }}</td>
                                <td>{{ $registro->notafiscal }}</td>
                                <td>{{ $registro->banda }}</td>
                                <td>{{ $registro->serial }}</td>
                                <td>{{ $registro->modelo }}</td>
                                <td>{{ $registro->fabricante }}</td>
                                <td>{{ $registro->situacao }}</td>
                                <td>
                                    <a class="btn btn-outline-warning btn-sm"
                                        href="{{ route('admin.lnbs.editar', $registro->id) }}">Editar</a>
                                    <a class="btn btn-outline-danger btn-sm"
                                        href="{{ route('admin.lnbs.deletar', $registro->id) }}">Deletar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-md-10">
                <a class="btn btn-primary btn-sm mx-auto" href="{{ route('admin.lnbs.adicionar') }}" role="button">
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