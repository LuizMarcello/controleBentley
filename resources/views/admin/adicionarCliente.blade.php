        @extends('admin.home')

        @section('titulo-pagina')
            Adicionar clientes
        @endsection

        @section('conteudo')

            <div class="row">
                <div class="col-md-10">
                    <div class="row d-flex justify-content-center">
                        <h3>Adicionando cliente</h3>
                    </div>
                    <form class="" action="{{ route('admin.clientes.salvar') }}" method="POST">
                        {{ csrf_field() }}
                        @include('admin._formLayoutClienteAdicionar')
                        <button class="btn btn-outline-success btn-sm">Salvarr</button>
                    </form>
                    <br>
                    <div class="row">
                        <a href="{{ route('admin.clientes') }}" class="btn btn-primary btn-sm" role="button"
                            aria-disabled="true">Voltar</a>
                    </div>
                </div>
            </div>

        @endsection





