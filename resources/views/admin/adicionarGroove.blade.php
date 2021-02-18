        @extends('admin.home')

        @section('titulo-pagina')
            Adicionar grooves
        @endsection

        @section('conteudo')
            <div class="row">
                <div class="col-md-11">
                    <div class="row d-flex justify-content-center">
                        <button type="button" class="btn btn-secondary btn-sm btn-block col-md-10">
                            <h4>Adicionando groove</h4>
                        </button>
                    </div>
                    <br>
                    <br>
                    <form class="" action="{{ route('admin.grooves.salvar') }}" method="POST">
                        {{ csrf_field() }}
                        {{-- <input type="hidden" name="_method" value="put"> --}}
                        @include('admin._formLayoutGrooveAdicionar')
                        <div class="row">
                            <div class="col-md-4">
                                <button class="btn btn-outline-success btn-sm">Salvar</button>
                                <a href="{{ route('admin.grooves') }}" class="btn btn-primary btn-sm" role="button"
                                    aria-disabled="true">Voltar</a>
                            </div>
                        </div>
                    </form>
                    <br>
                </div>
            </div>
        @endsection

