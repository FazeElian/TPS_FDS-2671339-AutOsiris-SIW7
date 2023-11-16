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
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1 class="titulo">Ventas</h1>
        </div>

        <!-- Contenedor opciones de ventas -->
        <div class="cont-ops-ventas">
            <!-- Contenedor Registrar Venta -->
            <div class="cont-registrar-venta">
                <!-- Botón -->
                <button class="btn-registrar-venta">
                    <a href="#"><h2>Registrar venta</h2></a>
                    <a href="#"><img src="{{ asset("assets/img/Admin/modules/anadir-icono.png") }}" alt="Botón Registrar Venta"></a>
                </button>
            </div>

            <!-- Contenedor Filtrar venta -->
            <div class="cont-filtrar-venta">
                <select name="filtrarVenta" id="filtrarVenta">
                    <option value="">Filtrar ventas por</option>
                    <option value="">Filtrar por fecha de creación</option>
                    <option value="">Filtrar por fecha de última actualización</option>
                </select>
            </div>
        </div>

        <!-- Tabla Ventas -->
        <table class="tabla-ventas">
            <!-- Columnas -->
            <tr class="columnas-caract">
                <td class="item-columna no-venta">Número</td>
                <td class="item-columna fecha-venta">Fecha</td>
                <td class="item-columna total-venta">Total</td>
                <td class="item-columna acciones-venta">Acciones</td>
            </tr>

            <!-- Filas -->
            <tr class="filas-dato">
                <td class="item-fila no-venta-dato">1</td>
                <td class="item-fila fecha-venta-dato">01/01/2023</td>
                <td class="item-fila total-venta-dato">7500 $</td>
                <td class="item-fila acciones-venta-dato">
                    <button class="btn-editar-venta">
                        <a href="editarventa.html" class="link-btn-opcion">Editar </a><a href="editarventa.html"><img src="{{ asset("assets/img/Admin/modules/editar-icono.png") }}" alt=""></a>
                    </button>
                    <button class="btn-eliminar-venta">
                        <a href="ventas.html" class="link-btn-opcion">Eliminar </a><a href="ventas.html"><img src="{{ asset("assets/img/Admin/modules/eliminar-icono.png") }}" alt=""></a>
                    </button>
                </td>
            </tr>
            <tr class="filas-dato">
                <td class="item-fila no-venta-dato">2</td>
                <td class="item-fila fecha-venta-dato">01/01/2023</td>
                <td class="item-fila total-venta-dato">7500 $</td>
                <td class="item-fila acciones-venta-dato">
                    <button class="btn-editar-venta">
                        <a href="editarventa.html" class="link-btn-opcion">Editar </a><a href="editarventa.html"><img src="{{ asset("assets/img/Admin/modules/editar-icono.png") }}" alt=""></a>
                    </button>
                    <button class="btn-eliminar-venta">
                        <a href="ventas.html" class="link-btn-opcion">Eliminar </a><a href="ventas.html"><img src="{{ asset("assets/img/Admin/modules/eliminar-icono.png") }}" alt=""></a>
                    </button>
                </td>
            </tr>
            <tr class="filas-dato">
                <td class="item-fila no-venta-dato">3</td>
                <td class="item-fila fecha-venta-dato">01/01/2023</td>
                <td class="item-fila total-venta-dato">7500 $</td>
                <td class="item-fila acciones-venta-dato">
                    <button class="btn-editar-venta">
                        <a href="editarventa.html" class="link-btn-opcion">Editar </a><a href="editarventa.html"><img src="{{ asset("assets/img/Admin/modules/editar-icono.png") }}" alt=""></a>
                    </button>
                    <button class="btn-eliminar-venta">
                        <a href="ventas.html" class="link-btn-opcion">Eliminar </a><a href="ventas.html"><img src="{{ asset("assets/img/Admin/modules/eliminar-icono.png") }}" alt=""></a>
                    </button>
                </td>
            </tr>
            <tr class="filas-dato">
                <td class="item-fila no-venta-dato">4</td>
                <td class="item-fila fecha-venta-dato">01/01/2023</td>
                <td class="item-fila total-venta-dato">7500 $</td>
                <td class="item-fila acciones-venta-dato">
                    <button class="btn-editar-venta">
                        <a href="editarventa.html" class="link-btn-opcion">Editar </a><a href="editarventa.html"><img src="{{ asset("assets/img/Admin/modules/editar-icono.png") }}" alt=""></a>
                    </button>
                    <button class="btn-eliminar-venta">
                        <a href="ventas.html" class="link-btn-opcion">Eliminar </a><a href="ventas.html"><img src="{{ asset("assets/img/Admin/modules/eliminar-icono.png") }}" alt=""></a>
                    </button>
                </td>
            </tr>
            <tr class="filas-dato">
                <td class="item-fila no-venta-dato">5</td>
                <td class="item-fila fecha-venta-dato">01/01/2023</td>
                <td class="item-fila total-venta-dato">7500 $</td>
                <td class="item-fila acciones-venta-dato">
                    <button class="btn-editar-venta">
                        <a href="editarventa.html" class="link-btn-opcion">Editar </a><a href="editarventa.html"><img src="{{ asset("assets/img/Admin/modules/editar-icono.png") }}" alt=""></a>
                    </button>
                    <button class="btn-eliminar-venta">
                        <a href="ventas.html" class="link-btn-opcion">Eliminar </a><a href="ventas.html"><img src="{{ asset("assets/img/Admin/modules/eliminar-icono.png") }}" alt=""></a>
                    </button>
                </td>
            </tr>
            <tr class="filas-dato">
                <td class="item-fila no-venta-dato">6</td>
                <td class="item-fila fecha-venta-dato">01/01/2023</td>
                <td class="item-fila total-venta-dato">7500 $</td>
                <td class="item-fila acciones-venta-dato">
                    <button class="btn-editar-venta">
                        <a href="editarventa.html" class="link-btn-opcion">Editar </a><a href="editarventa.html"><img src="{{ asset("assets/img/Admin/modules/editar-icono.png") }}" alt=""></a>
                    </button>
                    <button class="btn-eliminar-venta">
                        <a href="ventas.html" class="link-btn-opcion">Eliminar </a><a href="ventas.html"><img src="{{ asset("assets/img/Admin/modules/eliminar-icono.png") }}" alt=""></a>
                    </button>
                </td>
            </tr>
            <tr class="filas-dato">
                <td class="item-fila no-venta-dato">7</td>
                <td class="item-fila fecha-venta-dato">01/01/2023</td>
                <td class="item-fila total-venta-dato">7500 $</td>
                <td class="item-fila acciones-venta-dato">
                    <button class="btn-editar-venta">
                        <a href="editarventa.html" class="link-btn-opcion">Editar </a><a href="editarventa.html"><img src="{{ asset("assets/img/Admin/modules/editar-icono.png") }}" alt=""></a>
                    </button>
                    <button class="btn-eliminar-venta">
                        <a href="ventas.html" class="link-btn-opcion">Eliminar </a><a href="ventas.html"><img src="{{ asset("assets/img/Admin/modules/eliminar-icono.png") }}" alt=""></a>
                    </button>
                </td>
            </tr>
            <tr class="filas-dato">
                <td class="item-fila no-venta-dato">8</td>
                <td class="item-fila fecha-venta-dato">01/01/2023</td>
                <td class="item-fila total-venta-dato">7500 $</td>
                <td class="item-fila acciones-venta-dato">
                    <button class="btn-editar-venta">
                        <a href="editarventa.html" class="link-btn-opcion">Editar </a><a href="editarventa.html"><img src="{{ asset("assets/img/Admin/modules/editar-icono.png") }}" alt=""></a>
                    </button>
                    <button class="btn-eliminar-venta">
                        <a href="ventas.html" class="link-btn-opcion">Eliminar </a><a href="ventas.html"><img src="{{ asset("assets/img/Admin/modules/eliminar-icono.png") }}" alt=""></a>
                    </button>
                </td>
            </tr>
            <tr class="filas-dato">
                <td class="item-fila no-venta-dato">9</td>
                <td class="item-fila fecha-venta-dato">01/01/2023</td>
                <td class="item-fila total-venta-dato">7500 $</td>
                <td class="item-fila acciones-venta-dato">
                    <button class="btn-editar-venta">
                        <a href="editarventa.html" class="link-btn-opcion">Editar </a><a href="editarventa.html"><img src="{{ asset("assets/img/Admin/modules/editar-icono.png") }}" alt=""></a>
                    </button>
                    <button class="btn-eliminar-venta">
                        <a href="ventas.html" class="link-btn-opcion">Eliminar </a><a href="ventas.html"><img src="{{ asset("assets/img/Admin/modules/eliminar-icono.png") }}" alt=""></a>
                    </button>
                </td>
            </tr>
            <tr class="filas-dato">
                <td class="item-fila no-venta-dato">10</td>
                <td class="item-fila fecha-venta-dato">01/01/2023</td>
                <td class="item-fila total-venta-dato">7500 $</td>
                <td class="item-fila acciones-venta-dato">
                    <button class="btn-editar-venta">
                        <a href="editarventa.html" class="link-btn-opcion">Editar </a><a href="editarventa.html"><img src="{{ asset("assets/img/Admin/modules/editar-icono.png") }}" alt=""></a>
                    </button>
                    <button class="btn-eliminar-venta">
                        <a href="ventas.html" class="link-btn-opcion">Eliminar </a><a href="ventas.html"><img src="{{ asset("assets/img/Admin/modules/eliminar-icono.png") }}" alt=""></a>
                    </button>
                </td>
            </tr>
        </table>
    </section>
</body>
</html>
