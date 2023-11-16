{{-- Inclusión de encabezado --}}
@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador | Inicio</title>
</head>
<body>
    <!-- Contenido página -->
    <section class="contenido-pag">
        <!-- Bienvenida -->
        <div class="bienvenida">
            <h1>¡Bienvenido {{ Auth::user()->name }}!</h1>
            <p>Aquí encontrarás las novedades con respecto a tu negocio y su administración</p>
        </div>
    </section>
</body>
</html>

@extends("layouts.footerAdmin")
