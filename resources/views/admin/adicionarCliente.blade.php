        @extends('admin.home')

        @section('titulo-pagina')
            Adicionar clientes
        @endsection

        @section('conteudo')

            <div class="row">
                <div class="col-md-10">
                    <div class="row d-flex justify-content-center">
                        <h3>
                            <p>Adicionando cliente</p>
                        </h3>
                    </div>
                    <form class="" action="{{ route('admin.clientes.salvar') }}" method="POST">
                        {{ csrf_field() }}
                        @include('admin._formLayoutCliente')

                        <button class="btn btn-outline-success">Salvarr</button>
                    </form>
                </div>
            </div>

        @endsection
