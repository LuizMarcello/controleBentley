@extends('admin.home')

@section('titulo-pagina')
    Trias
@endsection

@section('conteudo')

    <div class="row d-flex justify-content-center">
        <h3>Listagem de Trias</h3>
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
                            <th scope="col">Serial</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($registros as $registro)
                            <tr>
                                <td>{{ $registro->id }}</td>
                                <td>{{ $registro->banda }}</td>
                                <td>{{ $registro->fabricante }}</td>
                                <td>{{ $registro->serial }}</td>
                                <td>
                                    <a class="btn btn-outline-warning btn-sm"
                                        href="{{ route('admin.trias.editar', $registro->id) }}">Editar</a>
                                    <a class="btn btn-outline-danger btn-sm"
                                        href="{{ route('admin.trias.deletar', $registro->id) }}">Deletar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-md-10">
                <a class="btn btn-primary btn-sm mx-auto" href="{{ route('admin.trias.adicionar') }}" role="button">
                    Incluir tria
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
