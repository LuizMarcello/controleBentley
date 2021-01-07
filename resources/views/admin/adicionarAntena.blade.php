        @extends('admin.home')

        @section('titulo-pagina')
            Adicionar clientes
        @endsection

        @section('conteudo')

            <div class="row d-flex justify-content-center">
                <h3>Adicionando Antenas</h3>
            </div>

            <div class="row">
                <form class="" action="{{ route('admin.antenas.salvar') }}" method="POST">
                    {{ csrf_field() }}
                    @include('admin._formAntena')
                    <button class="col-6 mx-auto btn btn-outline-success">Salvar</button>
                </form>
            </div>
            <div>
                <a class="btn btn-primary btn-sm col-6 mx-auto" href="{{ route('admin.home') }}" role="button">
                    Voltar a página principal
                </a>
            </div>

        @endsection
