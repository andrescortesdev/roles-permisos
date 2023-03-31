<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Document</title>
</head>
<body>
    
  <nav>
    <div class="container">
        <div class="nav-wrapper">
        <a href="#" class="brand-logo">{{ Auth::user()->name}}</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a onclick="document.getElementById('form-logout').submit()" >Cerrar sesion</a></li>
        </ul>
        </div>
        <form action="{{ route('logout')}}" method="post" id="form-logout">
           @csrf
        </form>
    </div>
  </nav>
  <br>
    @yield('content')
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
    $(document).ready(function(){
        $('select').formSelect();
    });
    </script>
</body>
</html>