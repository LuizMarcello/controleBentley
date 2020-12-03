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
        <nav class="nav-extended">
            <div class="nav-wrapper">
              <a href="#" class="brand-logo">Logo</a>
              <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">JavaScript</a></li>
              </ul>
            </div>
            <div class="nav-content">
              <ul class="tabs tabs-transparent">
                <li class="tab"><a href="#test1">Test 1</a></li>
                <li class="tab"><a class="active" href="#test2">Test 2</a></li>
                <li class="tab disabled"><a href="#test3">Disabled Tab</a></li>
                <li class="tab"><a href="#test4">Test 4</a></li>
              </ul>
            </div>
          </nav>

          <ul class="sidenav" id="mobile-demo">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">JavaScript</a></li>
          </ul>

          <div id="test1" class="col s12">Test 1</div>
          <div id="test2" class="col s12">Test 2</div>
          <div id="test3" class="col s12">Test 3</div>
          <div id="test4" class="col s12">Test 4</div>
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









