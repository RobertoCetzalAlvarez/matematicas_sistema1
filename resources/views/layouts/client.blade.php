<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('img/logo1.png') }}">
    <title>{{'Quiz Matemático'}}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML"></script>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <h3 class="mx-auto text-center">  
                    <a class="nav-link text-center" href="{{ route('client.test') }}">
                        {{ __('Visualización del Quiz') }}
                    </a>
                </h3>
                <h5 class="mx-auto text-center d-flex"> 
                <a class="nav-link text-center" href="images-calculo" target="blank">
                        {{ __('Imagenes Calculo') }}
                    </a> 
                    <a class="nav-link text-center" href="images-geometria" target="blank">
                        {{ __('Imagenes Geometria') }}
                    </a> 
                    @auth
                        <a class="nav-link text-center" href="{{ route('admin.dashboard.index') }}">
                            {{ auth()->user()->name }}
                        </a>
                        <a class="nav-link text-center" onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="{{ route('logout') }}">
                            Cerrar Sesión
                        </a>
                    @endauth
                    <form class="d-none" action="{{ route('logout') }}" id="logout-form" method="post">
                        @csrf 
                        
                    </form>
                </h5>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>