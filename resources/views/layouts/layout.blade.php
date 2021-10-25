<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name = "csrf-token" content = "{{csrf_token ()}}">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <link rel="icon" href={{asset('favicon.ico')}}>

    <title> @yield('title') - OPEN LIGHT CAFE BAR </title>

   

     <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/cover.css')}}" rel="stylesheet">
  </head>

  <body class="text-center">

    
      <header class="masthead mb-auto">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #000000">
          <h5><a class="masthead-brand font-weight-bold text-danger" href="/">OPEN LIGHT CAFE BAR</a></h5>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <a class="nav-link font-weight-bold text-danger text-right " href="/carta">CARTA</a>
            <a class="nav-link font-weight-bold text-danger text-right" href="#">EVENTOS</a>
            <a class="nav-link font-weight-bold text-danger text-right" href="#">EN VIVO</a>
            <a class="nav-link font-weight-bold text-danger text-right" href="#">GALERIA</a>
            <a class="nav-link font-weight-bold text-danger text-right" href="#">CONTACTANOS</a>

        </div>
         <!--a class="nav-link font-weight-bold text-danger text-right" href="{{ route('login') }}">Login</a>
         <a class="nav-link font-weight-bold text-danger text-right" href="{{ route('registrar') }}">Register</a-->
         </nav>
      </header>
      
      <main role="main" class="container">
         @yield('content')
      </main>

      <footer class="footer">
      <div class="container">
        <span class="text-white">&copy; <a href="#">Created By Grupo ATI</a></span>
      </div>
    </footer>
    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
