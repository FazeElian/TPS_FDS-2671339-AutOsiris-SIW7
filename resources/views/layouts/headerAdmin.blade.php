<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Hoja de estilos principal --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Admin/styles.css") }}">

    {{-- Scripts Principales --}}
    <script defer src="{{ asset("assets/js/Admin/scripts.js") }}"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset("assets/img/Admin/favicon.png") }}" type="image/x-icon">
</head>
<body>
    <!-- Menú superior -->
    <header class="menu_sup">
        @if (Auth::check())
        @endif
        @guest
            @if (Route::has('login'))
                @auth
                    <a href="{{ route("logout") }}"><li class="item_nav-usuario cerrar_sesion">Cerrar sesión</li></a>
                @else

                <nav class="nav-bar-company">
                    <a href="/"><li class="item-nav-company">Inicio</li></a>
                    <a href="#"><li class="item-nav-company">Nuestros Productos</li></a>
                    <a href="#"><li class="item-nav-company">Nosotros</li></a>
                    <a href="#"><li class="item-nav-company">Acerca de</li></a>
                </nav>

                <nav class="nav-bar-users">
                    <a href="{{ route('login') }}"><li class="item-nav-users"><button class="item-nav-users btn-login">Iniciar Sesión</button></li></a>
                    @if (Route::has('register'))

                    <a href="{{ route('register') }}"><li class="item-nav-users"><button class="item-nav-users btn-register">Registrarse</button></li></a>
                    @endif
                @endauth
                </nav>
            @endif

            @else
            <nav class="nav-inicio">
                <!-- Icono de Menú responsive -->
                <button class="icono-menu">
                    <div class="icono-menu-responsive">
                        <img src="{{ asset("assets/img/Admin/modules/menu-icono.png") }}">
                    </div>
                    <div class="icono-menu-pc">
                        <a href="{{ route("home") }}"><img src="{{ asset("assets/img/Admin/modules/index.png") }}"></a>
                    </div>
                </button>
                <ul class="lista_nav-inicio">
                    <li class="item_nav-inicio"><a href="{{ route("home") }}">Inicio</a></li>
                    <li class="item_nav-inicio"><a href="{{ route("products.index") }}">Productos</a></li>
                    <li class="item_nav-inicio li-inventarios"><a href="{{ route("inventories.index") }}">Inventarios</a></li>
                    <li class="item_nav-inicio"><a href="{{ route("sales.index") }}">Ventas</a></li>
                    <li class="item_nav-inicio li-facturas"><a href="{{ route("factures.index") }}">Facturas</a></li>
                </ul>
            </nav>

            <!-- Navegación de ítems Usuario -->
            <nav class="nav-usuario">
                <ul class="lista_nav-usuario">
                    <a href="{{ route("perfile.index") }}"><li class="item_nav-usuario">Mi perfil</li></a>
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        <li class="item_nav-usuario cerrar_sesion">Cerrar Sesión</li>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </ul>

                <button class="icono-usuario">
                    <img src="{{ asset("assets/img/Admin/modules/usuario-icono.png") }}">
                </button>
            </nav>
        @endguest
    </header>
