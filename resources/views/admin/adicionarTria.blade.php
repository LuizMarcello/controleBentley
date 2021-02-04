        @extends('admin.home')

        @section('titulo-pagina')
            Adicionar trias
        @endsection

        @section('conteudo')

            <div class="row">
                <div class="col-md-10">
                    <div class="row d-flex justify-content-center">
                        <button type="button" class="btn btn-secondary btn-sm btn-block">
                            <h4>Adicionando tria</h4>
                        </button>

                    </div>
                    <br>
                    <br>
                    <form class="" action="{{ route('admin.trias.salvar') }}" method="POST">
                        {{ csrf_field() }}
                        @include('admin._formLayoutTriaAdicionar')

                        <button class="btn btn-outline-success btn-sm">Salvarr</button>
                        <a href="{{ route('admin.trias') }}" class="btn btn-primary btn-sm" role="button"
                            aria-disabled="true">Voltar</a>
                    </form>
                    <br>
                </div>
            </div>

        @endsection
