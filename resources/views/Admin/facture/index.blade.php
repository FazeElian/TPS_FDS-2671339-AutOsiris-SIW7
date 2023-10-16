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
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1>Facturas</h1>
        </div>

        <!-- Buscar factura-->
        <div class="cont-busqueda">
            <input type="search" name="buscarFactura" id="buscarFactura" placeholder="Buscar factura por su número">
        </div>

        <!-- Contenedor Facturas -->
        <div class="cont-facturas">
            <!-- Contenedor Lista de Facturas -->
            <div class="cont-lista-facturas">
                <!-- Tabla Facturas -->
                <table class="tabla-facturas" id="tabla-facturas">
                    <!-- Columnas características de factura -->
                    <tr class="columnas-caract-fact">
                        <td class="item-columna num-factura">Número</td>
                        <td class="item-columna fecha-factura">Fecha</td>
                        <td class="item-columna opciones-factura-tabla">Opciones</td>
                    </tr>

                    <!-- Filas Datos de Factura -->
                    <tr class="filas-datos">
                        <td class="item-fila num-factura-dato">{{ ++$i }}</td>
                        <td class="item-fila fecha-factura-dato">01/01/2023</td>
                        <td class="opciones-factura-tabla-dato">

                            <a href=".pdf"><button class="btn-factura btn-pdf"><a href="#" class="link-op-fact">PDF</a><img src="{{ asset("assets/img/Admin/modules/pdf-factura-icono.png") }}" alt="PDF Icono"></button></a>
                            <a href="verFactura.html"><button class="btn-factura btn-ver"><a href="verFactura.html" class="link-op-fact">Ver</a><a href="verFactura.html"><img src="{{ asset("assets/img/Admin/modules/ver-factura-icono.png") }}" alt="Ver Icono" class="icono-op-fact"></button></a>
                            <a href="editarfactura.html"><button class="btn-factura btn-editar"><a href="editarfactura.html" class="link-op-fact">Editar</a><a href="editarfactura.html"><img src="{{ asset("assets/img/Admin/modules/editar-icono.png") }}" alt="Editar Icono"></a></button></a>
                            <button class="btn-factura btn-eliminar""><a href="#" class="link-op-fact">Eliminar</a><img src="{{ asset("assets/img/Admin/modules/eliminar-icono.png") }}" alt="Eliminar Icono"></button>
                        </td>
                    </tr>
                </table>
            </div>

            <!-- Contenedor Opciones de Factura/s -->
            <div class="cont-opciones-factura">
                <!-- Opciones de factura -->
                <div class="opciones-factura">
                    <!-- Nueva Factura  -->
                    <button class="cont-opcion-factura">
                        <a href="#"><img src="{{ asset("assets/img/Admin/modules/nueva_factura-icono.png") }}" alt="Nueva Factura Icono"></a>
                        <a href="#" class="link-sect-fact">Nueva Factura</a>
                    </button>
                    <!-- Clientes de Factura -->
                    <button class="cont-opcion-factura">
                        <a href="{{ route("roles.index") }}"><img src="{{ asset("assets/img/Admin/modules/clientes-factura-icono.png") }}" alt=""></a>
                        <a href="{{ route("roles.index") }}" class="link-sect-fact">Clientes</a>
                    </button>
                </div>
            </div>
        </div>

        {{-- Paginación de registros --}}
        {!! $factures->links() !!}
    </section>
</body>
</html>
{{-- Incluimos el footer --}}
@extends("layouts.footerAdmin")
