<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Proyecto para aprender Laravel</title>
  </head>
  <body>
    <div class="container">
      <a href="{{ route('foto')}}" class="btn btn-primary">Fotos</a>
      <a href="{{ route('noticias')}}" class="btn btn-primary">Blog</a>
      <a href="{{ route('nosotros')}}" class="btn btn-primary">Nosotros</a>
    </div>
    <div class="container">
          @yield('seccion')

    </div>
    <div class="container">Web hecha por DavidMIX</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  </body>
</html>
