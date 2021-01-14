        @extends('admin.home')

        @section('titulo-pagina')
            Adicionar fornecedor
        @endsection

        @section('conteudo')

            <div class="row d-flex justify-content-center">
                <h3>Adicionando Fornecedores</h3>
            </div>

            <div class="row">
                <form class="" action="{{ route('admin.fornecedores.salvar') }}" method="POST">
                    {{ csrf_field() }}
                    @include('admin._formFornecedor')
                    <button class="col-6 mx-auto btn btn-outline-success">Salvar</button>
                </form>
            </div>
            <div>
                <a class="btn btn-primary btn-sm col-6 mx-auto" href="{{ route('admin.home') }}" role="button">
                    Voltar a página principal
                </a>
            </div>

        @endsection
