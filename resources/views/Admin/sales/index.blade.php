@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador | Ventas</title>

    {{-- Hoja de estilos para este archivo --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Admin/modules/Sales/sales.css") }}">
</head>
<body>
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1>Ventas</h1>
        </div>

        <!-- Tipos de Ventas -->
        <div class="cont-ventas">
            <!-- Ventas por Unidad -->
            <div class="venta">
                <div class="img-venta">
                    <a href="{{ route("unit_sales.index") }}"><img src="{{ asset("assets/img/Admin/modules/venta-unidad.png") }}" alt=""></a>
                </div>
                <div class="titulo-venta">
                    <a href="{{ route("unit_sales.index") }}"><h2>Ventas por una unidad de producto</h2></a>
                </div>
            </div>

            <!-- Ventas Múltiples -->
            <div class="venta">
                <div class="img-venta">
                    <a href="#"><img src="{{ asset("assets/img/Admin/modules/venta-multiple.webp") }}" alt=""></a>
                </div>
                <div class="titulo-venta">
                    <a href="#"><h2>Ventas por múltiples productos</h2></a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
