        @extends('admin.home')

        @section('titulo-pagina')
            Adicionar roteadores
        @endsection

        @section('conteudo')
            <div class="row">
                <div class="col-md-11">
                    <div class="row d-flex justify-content-center">
                        <button type="button" class="btn btn-secondary btn-sm btn-block col-md-10">
                            <h4>Adicionando roteador</h4>
                        </button>
                    </div>
                    <br>
                    <br>
                    <form class="" action="{{ route('admin.roteadores.salvar') }}" method="POST">
                        {{ csrf_field() }}
                        {{-- <input type="hidden" name="_method" value="put"> --}}
                        @include('admin._formLayoutRoteadorAdicionar')
                        <div class="row">
                            <div class="col-md-4">
                                <button class="btn btn-outline-success btn-sm">Salvar</button>
                                <a href="{{ route('admin.roteadores') }}" class="btn btn-primary btn-sm" role="button"
                                    aria-disabled="true">Voltar</a>
                            </div>
                        </div>
                    </form>
                    <br>
                </div>
            </div>
        @endsection
