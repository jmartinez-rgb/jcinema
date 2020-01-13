<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/principal.css')}}">
    @yield('head')
    <script src="https://kit.fontawesome.com/ef09053d88.js" crossorigin="anonymous"></script>
</head>
<body>
  <header>
      <h1 ><a href="Principal.html" class="enlace">JCINEMA</a></h1>
      <input type="checkbox" id="menu-bar">
      <label class="fas fa-bars" for="menu-bar"></label>
      <div class="sidebar">    
        <ul>
            <li class="opcion-rest1"><a ><input type="text" placeholder="buscar" class="search"></a></li>
            <li class="opciones"><a href="{{route('principal')}}" >Inicio</a></li>
            @guest
            <li class="opciones"><a href="{{ route('login') }}" >Login</a></li>
            @if (Route::has('register'))
              <li class="opciones"><a href="{{ route('register') }}" >Registrarse</a></li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Salir') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
            <li class="opciones"><a href="" >Cartelera</a></li>
            <li class="opciones"><a href="" >Estrenos</a></li>
            
        </ul>
      </div>
  </header>
  <main>
    @yield('content')
  </main>
    @yield('articulo-footer')
  <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="{{asset('js/principal.js')}}"></script>

</body>
</html>