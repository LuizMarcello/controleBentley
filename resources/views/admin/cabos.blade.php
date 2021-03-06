@extends('admin.home')
        @section('titulo-pagina')
            Cabos
        @endsection
        @section('conteudo')
            <div class="row d-flex justify-content-center">
                <button type="button" class="btn btn-secondary btn-sm btn-block">
                    <h4>Listagem de cabos</h4>
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
                                    <th scope="col">Tipo de cabo</th>
                                    <th scope="col">Fabricante</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($registros as $registro)
                                    <tr>
                                        <td>{{ $registro->id }}</td>
                                        <td>{{ $registro->tipodecabo }}</td>
                                        <td>{{ $registro->fabricante }}</td>
                                        <td>
                                            <a class="btn btn-outline-success btn-sm"
                                                href="{{ route('admin.cabos.detalhes', $registro->id) }}">Visualizar</a>
                                            <a class="btn btn-outline-info btn-sm"
                                                href="{{ route('admin.cabos.editar', $registro->id) }}">Editar</a>
                                            <a class="btn btn-outline-danger btn-sm"
                                                href="{{ route('admin.cabos.deletar', $registro->id) }}">Deletar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-10">
                        <a class="btn btn-primary btn-sm mx-auto" href="{{ route('admin.cabos.adicionar') }}"
                            role="button">
                            Incluir cabo
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


