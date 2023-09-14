{{-- Inclusión de encabezado --}}
@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador | Facturas</title>

    {{-- Hoja de estilos para este archivo --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Admin/modules/Factures/factures.css") }}">
</head>
<body>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1>Facturas</h1>
        </div>

        {{-- Opciones de Factura/s --}}
        <div class="opciones-factura">
            {{-- Opciones --}}
            <div class="cont-opciones-factura">
                {{-- Nueva Factura --}}
                <button class="cont-nueva-factura">
                    <a href="{{ route("factures.create") }}"><img src="{{ asset("assets/img/Admin/modules/nueva_factura-icono.png") }}" alt=""></a>
                    <a href="{{ route("factures.create") }}">Nueva Factura</a>
                </button>

                {{-- Roles de Factura --}}
                <button class="cont-roles-factura">
                    <a href="{{ route("roles.index") }}"><img src="{{ asset("assets/img/Admin/modules/roles-factura-icono.png") }}" alt=""></a>
                    <a href="{{ route("roles.index") }}">Roles de Facturas</a>
                </button>
            </div>

            {{-- Búsqueda --}}
            <div class="cont-busqueda">
                <input type="search" name="buscarFactura" id="buscarFactura" placeholder="Busca una factura aquí">
            </div>
        </div>



        {{-- Paginación de registros --}}
        {!! $factures->links() !!}
    </section>
</body>
</html>

{{-- Incluimos el footer --}}
@extends("layouts.footerAdmin")
