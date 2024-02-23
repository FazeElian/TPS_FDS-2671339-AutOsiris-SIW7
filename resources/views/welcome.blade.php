<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AutOsiris | Inicio</title>

    <link rel="shortcut icon" href="{{ asset("assets/img/Admin/modules/Logo S.I. AutOsiris.png") }}" type="image/x-icon">

    {{-- Estilos para esta vista --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Company/welcome-view.css") }}">

    {{-- Estilos adicionales --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Users/auth-styles.css") }}">
</head>
<body>
    <div class="header">
        <img src="{{ asset("assets/img/Admin/modules/Logo S.I. AutOsiris.png") }}" alt="Logo AutOsiris">
        Miscelánea y Papelería Osiris
    </div>
    <section class="main-container">
        <div class="container-content">
            <h1>Bienvenido Usuari@ a AutOsiris!</h1>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url("/home") }}">
                        <button class="btn-user">Ir al Dashboard</button>
                    </a>
                @else
                    <a href="{{ route("login") }}">
                        <button class="btn-user">Iniciar Sesión</button>
                    </a>
                @endauth
            @endif
        </div>
    </section>
</body>
</html>
