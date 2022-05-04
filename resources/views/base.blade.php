<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('menu-cliente')}}">Menu Cliente</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('menu-produto')}}">Menu Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('menu-pedido')}}">Menu Compras</a>
          </li>
        </ul>

        @yield('content')
    </body>
</html>
