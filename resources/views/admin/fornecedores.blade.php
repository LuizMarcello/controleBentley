        @extends('admin.home')

        @section('titulo-pagina')
            Fornecedores
        @endsection

        @section('conteudo')

            <div class="row d-flex justify-content-center">
                <h3>Lista de Fornecedores</h3>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Cnpj</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Rua</th>
                                    <th scope="col">Numero</th>
                                    <th scope="col">Bairro</th>
                                    <th scope="col">Cidade</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">Situação</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($registros as $registro)
                                    <tr>
                                        <td>{{ $registro->id }}</td>
                                        <td>{{ $registro->cnpj }}</td>
                                        <td>{{ $registro->nome }}</td>
                                        <td>{{ $registro->rua }}</td>
                                        <td>{{ $registro->numero }}</td>
                                        <td>{{ $registro->bairro }}</td>
                                        <td>{{ $registro->cidade }}</td>
                                        <td>{{ $registro->estado }}</td>
                                        <td>{{ $registro->telefone }}</td>
                                        <td>{{ $registro->situacao }}</td>
                                        <td>
                                            <a class="btn btn-outline-info btn-sm"
                                                href="{{ route('admin.fornecedores.editar', $registro->id) }}">Editar</a>
                                            <a class="btn btn-outline-danger btn-sm"
                                                href="{{ route('admin.fornecedores.deletar', $registro->id) }}">Deletar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-10">
                        <a class="btn btn-primary btn-sm mx-auto" href="{{ route('admin.fornecedores.adicionar') }}"
                            role="button">
                            Incluir novo fornecedor
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
