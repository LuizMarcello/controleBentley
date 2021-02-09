<!DOCTYPE html>
<html>

<head>
    <title>
        @yield('titulo-pagina')
    </title>
    {{-- importando css do bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    {{-- Conteudo desse foi incluido no css in-line abaixo --}}
    {{-- link rel="stylesheet" href="css\style.css"> --}}
    <meta charset="utf-8">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
</head>

<body>
    {{-- tirado o fixed-top na nav abaixo --}}
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="#">
            <img src="{{ 'img/logobentley.png' }}" alt="Responsive image" width="190" height="60"
                class="d-inline-block align-center"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudo-navbar"
            aria-controls="conteudo-navbar" aria-expanded="false" aria-label="Botão para expansão do menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{-- collapse: Que pode sumir, dependendo os breakpoints(ex: resolução sm) --}}
        <div class="col">
            <div class="collapse navbar-collapse" id="conteudo-navbar">
                {{-- mr: helper css de alinhamento flexbox, para a direita do elemento
                mais
                próximo --}}
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
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
                            data-toggle="dropdown">Equipamentos</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('admin.antenas') }}">Antena</a>
                            <a class="dropdown-item" href="{{ route('admin.trias') }}">Tria</a>
                            {{-- <div class="dropdown-divider"></div> --}}
                            <a class="dropdown-item" href="{{ route('admin.modens') }}">Modem</a>
                            <a class="dropdown-item" href="{{ route('admin.fontes') }}">Fonte</a>
                            <a class="dropdown-item" href="{{ route('admin.cabos') }}">Cabo</a>
                            <a class="dropdown-item" href="{{ route('admin.lnbs') }}">Lnb</a>
                            <a class="dropdown-item" href="{{ route('admin.ilnbs') }}">iLnb</a>
                            <a class="dropdown-item" href="admin/ilnbs">Roteador</a>
                            <a class="dropdown-item" href="admin/ilnbs">Groove</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Sair</a>
                    </li>
                </ul>
                {{-- my: m:Margim e y:top e buttom, no form --}}
                <form class="form-inline my-2">
                    <input class="form-control" type="search" placeholder="Pesquisa...">
                    <button class="btn btn-outline-success ml-2" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </nav>
    {{-- <div class="col"> --}}
    {{-- <div class="wrapper"> --}}
    {{-- <nav class="form-group col-md-3" id="sidebar"> --}}
    <nav class="form-group col-md-3" id="sidebar">
        <div class="col">
            <style>
                body {
                    font-family: 'Poppins', sans-serif;
                    background: #fafafa;

                }

                p {
                    font-family: 'Poppins', sans-serif;
                    font-size: 1.1em;
                    font-weight: 300;
                    line-height: 1.7em;
                    color: #999;
                }

                

                a,
                a:hover,
                a:focus {
                    color: inherit;
                    text-decoration: nome;
                    transition: all 0.3s;
                }

                /* Side Bar */
                .wrapper {
                    display: flex;
                    text-decoration: none;
                    transition: all 0.3s;
                }

                #sidebar {
                    min-width: 180px;
                    max-width: 200px;
                    background: rgb(45, 45, 45);
                    color: #fff;
                    transition: all 0.3s;
                }

                #sidebar .active {
                    margin-left: -250px;
                }

                #sidebar .sidebar-header {
                    padding: 20px;
                    background: #6d7fcc;
                }

                #sidebar ul.components {
                    padding: 20px 0;
                    border-bottom: 1px solid #47748b;
                }

                #sidebar ul p {
                    color: #fff;
                    padding: 10px;
                }

                #sidebar ul li a {
                    padding: 10px;
                    font-size: 0.9em;
                    display: block;
                }

                #sidebar ul li a:hover {
                    color: #7386D5;
                    background: #fff;
                }

                #sidebar ul li.active>a,
                a[aria-expanded="true"] {
                    color: #fff;
                    background: #6d7fcc;
                }

                a[data-toggle="collapse"] {
                    position: relative;
                }

                .dropdown-toggle::after {
                    display: block;
                    position: absolute;
                    top: 50%;
                    right: 10%;
                    transform: translate(-50%);
                }

                ul ul a {
                    font-size: 0.9em !important;
                    padding-left: 30px !important;
                    background: rgb(45, 45, 45);
                }

                #content {
                    width: 70%;
                    padding: 10px;
                    min-height: 55vh;
                    transition: all 0.3s;
                }

                @media (max-width: 768px) {
                    #sidebar {
                        margin-left: -250px;
                    }

                    #sidebar.active {
                        margin-left: 0;
                    }

                    #sidebarCollapse span {
                        display: none;
                    }
                }

            </style>

            <ul class="lisst-unstyled components">
                <p>Sistema</p>
                <li>
                    <a href="#clientesSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Clientes</a>
                    <ul class="collapse lisst-unstyled" id="clientesSubmenu">
                        <li>
                            <a href={{ route('admin.clientes') }}>Consultar</a>
                        </li>
                        <li>
                            <a href={{ route('admin.clientes.adicionar') }}>Cadastrar</a>
                        </li>
                        <li>
                            <a href="#">Boletos</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#fornecedoresSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Fornecedores</a>
                    <ul class="collapse lisst-unstyled" id="fornecedoresSubmenu">
                        <li>
                            <a href="#">Consultar</a>
                        </li>
                        <li>
                            <a href="#">Cadastrar</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#distribuidoresSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Distribuidores</a>
                    <ul class="collapse lisst-unstyled" id="distribuidoresSubmenu">
                        <li>
                            <a href="#">Consultar</a>
                        </li>
                        <li>
                            <a href="#">Cadastrar</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#instaladoresSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Instaladores</a>
                    <ul class="collapse lisst-unstyled" id="instaladoresSubmenu">
                        <li>
                            <a href="#">Consultar</a>
                        </li>
                        <li>
                            <a href="#">Cadastrar</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#vendasSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Vendas</a>
                    <ul class="collapse lisst-unstyled" id="vendasSubmenu">
                        <li>
                            <a href="#">Consultar</a>
                        </li>
                        <li>
                            <a href="#">Cadastrar</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#planosSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Planos</a>
                    <ul class="collapse lisst-unstyled" id="planosSubmenu">
                        <li>
                            <a href={{ route('admin.planos') }}>Consultar</a>
                        </li>
                        <li>
                            <a href={{ route('admin.planos.adicionar') }}>Cadastrar</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#relatoriosSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Relatórios</a>
                    <ul class="collapse lisst-unstyled" id="relatoriosSubmenu">
                        <li>
                            <a href="#">Relatórios</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Contactar a Bentley</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Bentley Brasil</span>
                </button>
            </div>
        </nav>
    </div>

    <main class="py-3">
        <div class="container">

            <div class="container">
                <div class="col">
                    <div class="col-md-12 offset-1">
                        @yield('conteudo')
                    </div>
                </div>

                {{-- ------Validação-Exibindo as mensagens---------------------------------------- --}}
                @if ($errors->any())
                    <div class="btn alert alert-danger btn-sm-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{-- ------Validação-------------------------------------------------------------- --}}

            </div>
        </div>
    </main>



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
    <script>
        $(document).ready(function() {
            $("#sidebarCollapse").on('click', function() {
                $("#sidebar").toggleClass('active');
            });
        });

    </script>
</body>

</html>
