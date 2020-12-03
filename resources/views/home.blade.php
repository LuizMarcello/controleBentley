<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->


      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Controle Bentley Brasil</title>
    </head>

    <body>
        <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="/clientes">clientes</a></li>
    <li><a href="/distribuidores">distribuidores</a></li>
    <li><a href="/modens">modens</a></li>
    <li><a href="/tecnicos">tecnicos</a></li>
  </ul>
  <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <!-- Dropdown Trigger -->
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
    </div>
  </nav>

      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script type="text/javascript">
            $(document).ready(function() {
                Materialize.updateTextFields();
                $(".dropdown-trigger").dropdown();
            });
      </script>


</body>
</html>









