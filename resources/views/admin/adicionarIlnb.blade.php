        @extends('admin.home')

        @section('titulo-pagina')
            Adicionar ilnbs
        @endsection

        @section('conteudo')
            <div class="row">
                <div class="col-md-11">
                    <div class="row d-flex justify-content-center">
                        <button type="button" class="btn btn-secondary btn-sm btn-block col-md-10">
                            <h4>Adicionando ilnb</h4>
                        </button>
                    </div>
                    <br>
                    <br>
                    <form class="" action="{{ route('admin.ilnbs.salvar') }}" method="POST">
                        {{ csrf_field() }}
                        {{-- <input type="hidden" name="_method" value="put"> --}}
                        @include('admin._formLayoutIlnbAdicionar')
                        <div class="row">
                            <div class="col-md-4">
                                <button class="btn btn-outline-success btn-sm">Salvarr</button>
                                <a href="{{ route('admin.ilnbs') }}" class="btn btn-primary btn-sm" role="button"
                                    aria-disabled="true">Voltar</a>
                            </div>
                        </div>
                    </form>
                    <br>
                </div>
            </div>
        @endsection
