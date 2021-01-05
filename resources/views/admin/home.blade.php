<!DOCTYPE html>
<html>

<head>
    <title>
        @yield('titulo-pagina')
    </title>

    {{-- importando css do bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <meta charset="utf-8">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1;shrink-to-fit=no" />
</head>

<body>
    {{-- tirado o fixed-top na nav abaixo --}}
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="{{ 'img/logobentley.png' }}" alt="Responsive image" width="190" height="60"
                class="d-inline-block align-center"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudo-navbar"
            aria-controls="conteudo-navbar" aria-expanded="false" aria-label="Botão para expansão do menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{-- collapse: Que pode sumir, dependendo os breakpoints(ex: resolução sm)
        --}}
        <div class="collapse navbar-collapse" id="conteudo-navbar">
            {{-- mr: helper css de alinhamento flexbox, para a direita do elemento
            mais
            próximo --}}
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                {{-- Menu filho - Sub menu dropdown--}}
                <li class="nav-item dropdown">
                    {{-- role: indica que não é um link normal, mas é um botão para
                    rolagem(perfil de botão) --}}
                    {{-- Html5 não tem um atributo toggle: Data- api: Maneira de
                    passar
                    meta informações para os elementos html,
                    mesmo que eles não possuam aquela meta-informação --}}
                    <a class="nav-link dropdown-toggle" href="#" id="navbar-dropdown" role="button"
                        data-toggle="dropdown">
                        Sistema
                    </a>


                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="admin/clientes">Clientes</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="admin/designacao">Fornecedores</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="admin/distribuidores">Distribuidores</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="admin/modens">Vendas</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="admin/tecnicos">Técnicos</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="admin/tecnicos">Relatórios</a>
                    </div>

                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbar-dropdown" role="button"
                        data-toggle="dropdown">
                        Designação
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="admin/clientes">Tabela de designações</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbar-dropdown" role="button"
                        data-toggle="dropdown">Produtos</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="admin/clientes">Antena</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="admin/distribuidores">Tria</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="admin/designacao">Modem</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="admin/designacao">Fonte</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="admin/designacao">Cabo</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="admin/designacao">Lnb</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="admin/designacao">iLnb</a>

                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbar-dropdown" role="button"
                        data-toggle="dropdown">Estoque</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('admin.estoquetotal') }}">Relação dos produtos cadastrados</a>
                        </div>
                </li>

                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbar-dropdown" role="button"
                        data-toggle="dropdown">Configurações</a>
                </li> --}}

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

    <main class="py-4">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    @yield('conteudo')
                </div>
            </div>

        </div>
   </main>

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














