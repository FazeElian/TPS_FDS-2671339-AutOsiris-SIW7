@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador | Perfil</title>

    {{-- Hoja de estilos para este archivo --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Admin/modules/Perfile/perfile-styles.css") }}">
</head>
<body>
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1 class="titulo">Mi Perfil</h1>
        </div>

        <!-- Contenedor perfil -->
        <div class="cont-perfil">
            <!-- Info Perfil -->
            <div class="cont-info-perfil">
                <li><b>Nombre: </b>{{ Auth::user()->name }}</li>
                <li class="num"><b>Correo Electrónico: </b>{{ Auth::user()->email }}</li>
            </div>
        </div>
    </section>
</body>
</html>
