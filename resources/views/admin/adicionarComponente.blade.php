< @extends('admin.templateHome')

 @section('titulo-pagina')
  Cadastrar componente
   @endsection
   
   @section('conteudo') 

   <div class="row">
        <div class="col-md-8">
            <div class="row d-flex justify-content-center">
                <h3>Adicionar componente</h3>
            </div>

            <form class="" action="{{ route('admin.estoquetotal.salvar') }}" method="POST">
                {{ csrf_field() }}
                @include('admin._formComponente')

                <button class="btn btn-outline-success btn-sm">Salvar</button>
            </form>

            <div class="col-md-8">
                <a class="btn btn-primary btn-sm col-6 mx-auto" href="{{ route('admin.estoquetotal') }}" role="button">
                    Voltar a página dos componentes
                </a>
            </div>
    </div>

</div>

@endsection
            
