        @extends('admin.home')

        @section('titulo-pagina')
            Adicionar lnbs
        @endsection

        @section('conteudo')

            <div class="row">
                <div class="col-md-10">
                    <div class="row d-flex justify-content-center">
                        <button type="button" class="btn btn-secondary btn-sm btn-block">
                            <h4>Adicionando lnb</h4>
                        </button>
                    </div>
                    <br>
                    <form class="" action="{{ route('admin.lnbs.salvar') }}" method="POST">
                        {{ csrf_field() }}
                        @include('admin._formLayoutLnbAdicionar')

                        <button class="btn btn-outline-success btn-sm">Salvarr</button>
                        <a href="{{ route('admin.lnbs') }}" class="btn btn-primary btn-sm" role="button"
                            aria-disabled="true">Voltar</a>
                    </form>
                    <br>
                </div>
            </div>

        @endsection


