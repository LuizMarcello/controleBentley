        @extends('admin.home')
        @section('titulo-pagina')
            Grooves
        @endsection
        @section('conteudo')
            <div class="row d-flex justify-content-center">
                <button type="button" class="btn btn-secondary btn-sm btn-block">
                    <h4>Listagem de grooves</h4>
                </button>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Marca</th>
                                    <th scope="col">Modelo</th>
                                    <th scope="col">Banda</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($registros as $registro)
                                    <tr>
                                        <td>{{ $registro->id }}</td>
                                        <td>{{ $registro->marca }}</td>
                                        <td>{{ $registro->modelo }}</td>
                                        <td>{{ $registro->banda }}</td>
                                        <td>
                                            <a class="btn btn-outline-success btn-sm"
                                                href="{{ route('admin.grooves.detalhes', $registro->id) }}">Visualizar</a>
                                            <a class="btn btn-outline-info btn-sm"
                                                href="{{ route('admin.grooves.editar', $registro->id) }}">Editar</a>
                                                <a class="btn btn-outline-danger btn-sm"
                                                href="{{ route('admin.grooves.deletar', $registro->id) }}">Deletar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-10">
                        <a class="btn btn-primary btn-sm mx-auto" href="{{ route('admin.grooves.adicionar') }}"
                            role="button">
                            Incluir groove
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





            