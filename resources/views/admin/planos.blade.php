        @extends('admin.home')

        @section('titulo-pagina')
            Planos
        @endsection

        @section('conteudo')

            <div class="row d-flex justify-content-center">
                <button type="button" class="btn btn-secondary btn-sm btn-block"><h4>Planos ativos</h4></button>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Cir</th>
                                    <th scope="col">Banda</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($registros as $registro)
                                    <tr>
                                        <td>{{ $registro->id }}</td>
                                        <td>{{ $registro->nome }}</td>
                                        <td>{{ $registro->cir }}</td>
                                        <td>{{ $registro->banda }}</td>

                                        <td>
                                            <a class="btn btn-outline-success btn-sm"
                                                href="{{ route('admin.planos.detalhes', $registro->id) }}">Visualizar</a>
                                            <a class="btn btn-outline-info btn-sm"
                                                href="{{ route('admin.planos.editar', $registro->id) }}">Editar</a>
                                            <a class="btn btn-outline-danger btn-sm"
                                                href="{{ route('admin.planos.deletar', $registro->id) }}">Deletar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                    <div class="col-md-10">
                        <a class="btn btn-primary btn-sm mx-auto" href="{{ route('admin.planos.adicionar') }}"
                            role="button">
                            Incluir novo plano
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
