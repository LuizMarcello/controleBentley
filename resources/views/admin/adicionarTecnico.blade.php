<!DOCTYPE html>
<html>

<head>
    <title>Adicionar técnicos</title>

    {{-- importando css do bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    {{-- importando css do bootstrap --}}
    {{--
    <link rel="stylesheet" href="{{ url('css/app.css') }}"> --}}

    <meta charset="utf-8">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1;shrink-to-fit=no" />

    <style>


    </style>
</head>
{{-- breakpoints do Bootstrap
- xs (extra-small devices) - <576px - sm (small devices) - 576px <=vwp <=767px - md (medium devices) - 768px <=vwp
    <=991px - lg (large devices) - 992px <=vwp <=1999px - xg (extra-large devices) - vwp=> 1200px
    --}}

    <body>
        {{-- tirado o fixed-top na nav abaixo --}}
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="#">
                <img src="{{ '../img/logobentley.png' }}" alt="Responsive image" width="190" height="60"
                    class="d-inline-block align-center"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudo-navbar"
                aria-controls="conteudo-navbar" aria-expanded="false" aria-label="Botão para expansão do menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            {{-- collapse: Que pode sumir, dependendo os breakpoints(ex: resolução sm)
            --}}
            <div class="collapse navbar-collapse" id="conteudo-navbar">
                {{-- mr: helper css de alinhamento flexbox, para a direita do elemento
                mais próximo --}}
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    {{-- Menu filho - Sub menu
                    dropdown--}}
                    <li class="nav-item dropdown">
                        {{-- role: indica que não é um link normal, mas é um botão
                        para
                        rolagem(perfil de botão) --}}
                        {{-- Html5 não tem um atributo toggle: Data- api: Maneira de
                        passar meta informações para os elementos html,
                        mesmo que eles não possuam aquela meta-informação --}}
                        <a class="nav-link dropdown-toggle" href="#" id="navbar-dropdown" role="button"
                            data-toggle="dropdown">
                            Sistema
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/admin/clientes">Clientes</a>
                            <a class="dropdown-item" href="/admin/distribuidores">Distribuidores</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/admin/designacao">Designação</a>
                            <a class="dropdown-item" href="/admin/modens">modens</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/admin/tecnicos">Tecnicos</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Configurações</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sair</a>
                    </li>
                </ul>
                {{-- my: m:Margim e y:top e buttom, no form
                --}}
                <form class="form-inline my-2">
                    <input class="form-control" type="search" placeholder="Pesquisa...">
                    <button class="btn btn-outline-success ml-2" type="submit">Pesquisar</button>
                </form>
            </div>
        </nav>

        <div class="container">
            <div class="row d-flex justify-content-center">
                <h3>Adicionar técnico</h3>
            </div>

            <div class="row">
                <form class="" action="{{ route('admin.tecnicos.salvar') }}" method="POST">
                    {{ csrf_field() }}
                    @include('admin._formTecnico')

                    <button class="btn btn-outline-success">Salvar</button>
                </form>
            </div>

        </div>

        <!--JavaScript at end of body for optimized loading-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
        </script>
    </body>

</html>
