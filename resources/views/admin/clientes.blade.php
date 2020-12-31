        @extends('admin.templateHome')

        @section('titulo-pagina')
                Clientes
        @endsection

        @section('conteudo')
   
        <div class="container">
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
                                <td>{{ $registro->ativo }}</td>
                                <td>
                                    <a class="btn btn-outline-info"
                                        href="{{ route('admin.clientes.editar', $registro->id) }}">Editar</a>
                                    <a class="btn btn-outline-danger"
                                        href="{{ route('admin.clientes.deletar', $registro->id) }}">Deletar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row">
                <a class="btn btn-outline-success" href="{{ route('admin.clientes.adicionar') }}">Adicionar</a>
            </div>
            <div>
                <a class="btn btn-primary btn-sm col-6 mx-auto" href="{{ route('admin.home') }}" role="button">
                    Voltar a página principal
                </a>
            </div>

            @endsection
           


        