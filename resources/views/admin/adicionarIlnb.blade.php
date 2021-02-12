        @extends('admin.home')

        @section('titulo-pagina')
            Adicionar ilnbs
        @endsection

        @section('conteudo')

            <div class="row">
                <div class="col-md-10">
                    <div class="row d-flex justify-content-center">
                        <button type="button" class="btn btn-secondary btn-sm btn-block">
                            <h4>Adicionando ilnb</h4>
                        </button>
                    </div>
                    <br>
                    <form class="" action="{{ route('admin.ilnbs.salvar') }}" method="POST">
                        {{ csrf_field() }}
                        @include('admin._formLayoutIlnbAdicionar')

                        <button class="btn btn-outline-success btn-sm">Salvarr</button>
                        <a href="{{ route('admin.ilnbs') }}" class="btn btn-primary btn-sm" role="button"
                            aria-disabled="true">Voltar</a>
                    </form>
                    <br>
                </div>
            </div>

        @endsection


