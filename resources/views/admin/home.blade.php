<!DOCTYPE html>
<html>

<head>
    <title>
        @yield('titulo-pagina')
    </title>

    {{-- importando css do bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    {{--Conteudo desse foi incluido no css in-line abaixo--}}
    {{-- link rel="stylesheet" href="css\style.css"> --}}

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

        <div class="col">
            <div class="collapse navbar-collapse" id="conteudo-navbar">
                {{-- mr: helper css de alinhamento flexbox, para a direita do elemento
                mais
                próximo --}}
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    {{-- Menu filho - Sub menu dropdown--}}
                    {{-- <li class="nav-item dropdown"> --}}
                        {{-- role: indica que não é um link normal, mas é um botão para
                        rolagem(perfil de botão) --}}
                        {{-- Html5 não tem um atributo toggle: Data- api: Maneira de
                        passar
                        meta informações para os elementos html,
                        mesmo que eles não possuam aquela meta-informação --}}
                        {{-- <a class="nav-link dropdown-toggle" href="#"
                            id="navbar-dropdown" role="button" data-toggle="dropdown">
                            Sistema
                            {</a> --}}

                        {{-- <div class="dropdown-menu">
                            <a class="dropdown-item" href="admin/clientes">Clientes</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="admin/fornecedores">Fornecedores</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="admin/distribuidores">Distribuidores</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="admin/modens">Vendas</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="admin/tecnicos">Técnicos</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="admin/tecnicos">Relatórios</a>
                        </div>

                    </li> --}}

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
                            <a class="dropdown-item" href="admin/antenas">Antena</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="admin/trias">Tria</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="admin/modens">Modem</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="admin/fontes">Fonte</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="admin/cabos">Cabo</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="admin/lnbs">Lnb</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="admin/ilnbs">iLnb</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbar-dropdown" role="button"
                            data-toggle="dropdown">Estoque</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('admin.estoquetotal') }}">Tipo de produtos
                                cadastrados</a>
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
        </div>

    </nav>

    <div class="wrapper">

        <nav id="sidebar">

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
                    min-width: 200px;
                    max-width: 225px;
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
                    right: 20%;
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




            {{-- <div class="sidebar-header">
                <h4>Bentley Brasil</h4>
            </div> --}}
            <ul class="lisst-unstyled components">
                <p>Sistema</p>

                <li>
                    <a href="#clientesSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Clientes</a>
                    <ul class="collapse lisst-unstyled" id="clientesSubmenu">
                        <li>
                            <a href={{ route('admin.clientes') }}>Consultar clientes</a>
                        </li>
                        <li>
                            <a href={{ route('admin.clientes.adicionar') }}>Cadastrar clientes</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#fornecedoresSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Fornecedores</a>
                    <ul class="collapse lisst-unstyled" id="fornecedoresSubmenu">
                        <li>
                            <a href="#">Consultar fornecedores</a>
                        </li>
                        <li>
                            <a href="#">Cadastrar fornecedores</a>
                        </li>
                    </ul>
                </li>

                {{-- <li>
                    <a href="#">About</a>
                </li> --}}

                <li>
                    <a href="#distribuidoresSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Distribuidores</a>
                    <ul class="collapse lisst-unstyled" id="distribuidoresSubmenu">
                        <li>
                            <a href="#">Consultar distribuidores</a>
                        </li>
                        <li>
                            <a href="#">Cadastrar distribuidores</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#instaladoresSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Instaladores</a>
                    <ul class="collapse lisst-unstyled" id="instaladoresSubmenu">
                        <li>
                            <a href="#">Consultar instaladores</a>
                        </li>
                        <li>
                            <a href="#">Cadastrar instaladores</a>
                        </li>
                    </ul>
                </li>

                {{-- <li>
                    <a href="#">Policy</a>
                </li> --}}

                <li>
                    <a href="#vendasSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Vendas</a>
                    <ul class="collapse lisst-unstyled" id="vendasSubmenu">
                        <li>
                            <a href="#">Consultar vendas</a>
                        </li>
                        <li>
                            <a href="#">Cadastrar vendas</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#relatoriosSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Relatórios</a>
                    <ul class="collapse lisst-unstyled" id="relatoriosSubmenu">
                        <li>
                            <a href="#">Gerar relatórios</a>
                        </li>
                        {{-- <li>
                            <a href="#"></a>
                        </li> --}}
                    </ul>
                </li>

                <li>
                    <a href="#">Contactar a Bentley</a>
                </li>
            </ul>

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

            {{-- <br><br>
            <h3></h3>

            <p></p>

            <p>.</p>

            <div class="line"></div>
            <h3></h3>

            <p></p> --}}

        </div>

    </div>

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

    <script>
        $(document).ready(function() {
            $("#sidebarCollapse").on('click', function() {
                $("#sidebar").toggleClass('active');
            });
        });

    </script>

</body>

</html>
