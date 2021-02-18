        @extends('admin.home')

        @section('titulo-pagina')
            Adicionar lnbs
        @endsection

        @section('conteudo')
            <div class="row">
                <div class="col-md-10">
                    <div class="row d-flex justify-content-center">
                        <button type="button" class="btn btn-secondary btn-sm btn-block col-md-10">
                            <h4>Adicionando lnb</h4>
                        </button>
                    </div>
                    <br>
                    <br>
                    <form class="" action="{{ route('admin.lnbs.salvar') }}" method="POST">
                        {{ csrf_field() }}
                        {{-- <input type="hidden" name="_method" value="put"> --}}
                        @include('admin._formLayoutLnbAdicionar')
                        <div class="row">
                            <div class="col-md-4">
                                <button class="btn btn-outline-success btn-sm">Salvarr</button>
                                <a href="{{ route('admin.lnbs') }}" class="btn btn-primary btn-sm" role="button"
                                    aria-disabled="true">Voltar</a>
                            </div>
                        </div>
                    </form>
                    <br>
                </div>
            </div>
        @endsection
        



