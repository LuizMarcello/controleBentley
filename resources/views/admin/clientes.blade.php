        @extends('admin.home')

        @section('titulo-pagina')
            Clientes
        @endsection

        @section('conteudo')

            <div class="row d-flex justify-content-center">
                <h3>Lista de Clientes</h3>
            </div>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Rua</th>
                            <th scope="col">Numero</th>
                            <th scope="col">Bairro</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Ativo</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($registros as $registro)
                            <tr>
                                <td>{{ $registro->id }}</td>
                                <td>{{ $registro->nome }}</td>
                                <td>{{ $registro->rua }}</td>
                                <td>{{ $registro->numero }}</td>
                                <td>{{ $registro->bairro }}</td>
                                <td>{{ $registro->cidade }}</td>
                                <td>{{ $registro->estado }}</td>
                                <td>{{ $registro->telefone }}</td>
                                <td>{{ $registro->ativo }}</td>
                                <td>
                                    <a class="btn btn-outline-info btn-sm"
                                        href="{{ route('admin.clientes.editar', $registro->id) }}">Editar</a>
                                    <a class="btn btn-outline-danger btn-sm"
                                        href="{{ route('admin.clientes.deletar', $registro->id) }}">Deletar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row">
                <a class="btn btn-outline-success btn-sm" href="{{ route('admin.clientes.adicionar') }}">Adicionar</a>
            </div>
            <div>
                <a class="btn btn-primary btn-sm mx-auto" href="{{ route('admin.home') }}" role="button">
                    Voltar a página principal
                </a>
            </div>

        @endsection
