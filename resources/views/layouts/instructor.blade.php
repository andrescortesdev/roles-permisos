<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container">
          <a class="navbar-brand" href="#">{{ Auth::user()->name}}</a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" onclick="document.getElementById('form-logout').submit()" >Cerrar sesion</a>
              </li>
              <form action="{{ route('logout')}}" method="post" id="form-logout">
                @csrf
             </form>
            </ul>
          </div>
        </div>
      </nav>
    @yield('content')
</body>
</html>