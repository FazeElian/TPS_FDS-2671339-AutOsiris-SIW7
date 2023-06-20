<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador | Facturas</title>

    <!-- Hoja de estilos -->
    <link rel="stylesheet" href="assets/css/Admin/6. Facturas/facturas.css">

    <!-- Script -->
    <script defer src="assets/js/Admin/6. Facturas/facturas.js"></script>
</head>

    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1>Facturas</h1>
        </div>

        <section class="facturas">
            <!-- Lista de facturas creadas -->
            <div class="lista-facturas">
                <!-- Cont: Barra de búsqueda y Botón: Nueva Factura -->
                <div class="cont-busq_nueva-fact2">
                    <!-- Barra de búsqueda -->
                    <input type="search" name="buscar-factura2" id="buscar-factura2" placeholder="   Buscar Factura">

                    <!-- Botón: Nueva factura -->
                    <div class="cont-nueva-factura2">
                        <button class="bott-nueva-factura2">
                            <a href="?c=NuevaFactura"><img src="assets/img/nueva_factura-icono.png"></a>
                            <a href="?c=NuevaFactura"><h2>Nueva factura</h2></a>
                        </button>
                    </div>
                </div>
                <!-- Cont: Barra de búsqueda y Botón: Nueva Factura -->
                <div class="cont-busq_nueva-fact1">
                    <!-- Botón: Nueva factura -->
                    <div class="cont-nueva-factura">
                        <button class="bott-nueva-factura">
                            <a href="?c=NuevaFactura"><img src="assets/img/nueva_factura-icono.png"></a>
                            <a href="?c=NuevaFactura"><h2>Nueva factura</h2></a>
                        </button>
                    </div>

                    <!-- Barra de búsqueda -->
                    <input type="search" name="buscar-factura" id="buscar-factura" placeholder="   Buscar Factura">
                </div>

                <!-- Texto de lista -->
                <div class="texto-lista">
                    <h2>Lista de facturas creadas:</h2>
                </div>

                <!-- Tabla lista de facturas -->
                <table class="tabla-lista-facturas">
                    <!-- Columnas características de factura -->
                    <tr class="columnas-caract">
                        <td class="item-columna nombre-fact"> <h2>Nombre Factura</h2></td>
                        <td class="item-columna fecha-creacion"> <h2>Fecha creación</h2></td>
                        <td class="item-columna opciones-factura"> <h2>Opciones</h2></td>
                    </tr>
                    
                    <!-- Filas datos -->
                    <tr class="filas-datos">
                        <td class="item-fila nombre-fact-dato"><a href="Ver_factura.html">Primera venta de la semana</a></td>
                        <td class="item-fila fecha-creacion-dato">01/01/23</td>

                        <!-- Opciones de factura: Editar, Eliminar -->
                        <td class="item-fila opciones-factura-opcion">
                            <!-- Editar -->
                            <button class="op-editar-fact">
                                <a href="?c=EditarFactura"><h2>Editar</h2></a>
                                <a href="?c=EditarFactura"><img src="assets/img/editar-icono.png"></a>
                            </button>

                            <!-- Eliminar -->
                            <button class="op-eliminar-fact">
                                <a href="?c=Facturas"><h2 onclick="FacturaEliminada()">Eliminar</h2></a>
                                <a href="?c=Facturas"><img src="assets/img/eliminar-icono.png" onclick="FacturaEliminada()"></a>
                            </button>
                        </td>
                    </tr>
                    <tr class="filas-datos">
                        <td class="item-fila nombre-fact-dato"><a href="Ver_factura.html">Primera venta de la semana</a></td>
                        <td class="item-fila fecha-creacion-dato">01/01/23</td>

                        <!-- Opciones de factura: Editar, Eliminar -->
                        <td class="item-fila opciones-factura-opcion">
                            <!-- Editar -->
                            <button class="op-editar-fact">
                                <a href="?c=EditarFactura"><h2>Editar</h2></a>
                                <a href="?c=EditarFactura"><img src="assets/img/editar-icono.png"></a>
                            </button>

                            <!-- Eliminar -->
                            <button class="op-eliminar-fact">
                                <a href="?c=Facturas"><h2 onclick="FacturaEliminada()">Eliminar</h2></a>
                                <a href="?c=Facturas"><img src="assets/img/eliminar-icono.png" onclick="FacturaEliminada()"></a>
                            </button>
                        </td>
                    </tr>
                    <tr class="filas-datos">
                        <td class="item-fila nombre-fact-dato"><a href="Ver_factura.html">Primera venta de la semana</a></td>
                        <td class="item-fila fecha-creacion-dato">01/01/23</td>

                        <!-- Opciones de factura: Editar, Eliminar -->
                        <td class="item-fila opciones-factura-opcion">
                            <!-- Editar -->
                            <button class="op-editar-fact">
                                <a href="?c=EditarFactura"><h2>Editar</h2></a>
                                <a href="?c=EditarFactura"><img src="assets/img/editar-icono.png"></a>
                            </button>

                            <!-- Eliminar -->
                            <button class="op-eliminar-fact">
                                <a href="?c=Facturas"><h2 onclick="FacturaEliminada()">Eliminar</h2></a>
                                <a href="?c=Facturas"><img src="assets/img/eliminar-icono.png" onclick="FacturaEliminada()"></a>
                            </button>
                        </td>
                    </tr>
                    <tr class="filas-datos">
                        <td class="item-fila nombre-fact-dato"><a href="Ver_factura.html">Primera venta de la semana</a></td>
                        <td class="item-fila fecha-creacion-dato">01/01/23</td>

                        <!-- Opciones de factura: Editar, Eliminar -->
                        <td class="item-fila opciones-factura-opcion">
                            <!-- Editar -->
                            <button class="op-editar-fact">
                                <a href="?c=EditarFactura"><h2>Editar</h2></a>
                                <a href="?c=EditarFactura"><img src="assets/img/editar-icono.png"></a>
                            </button>

                            <!-- Eliminar -->
                            <button class="op-eliminar-fact">
                                <a href="?c=Facturas"><h2 onclick="FacturaEliminada()">Eliminar</h2></a>
                                <a href="?c=Facturas"><img src="assets/img/eliminar-icono.png" onclick="FacturaEliminada()"></a>
                            </button>
                        </td>
                    </tr>
                    <tr class="filas-datos">
                        <td class="item-fila nombre-fact-dato"><a href="Ver_factura.html">Primera venta de la semana</a></td>
                        <td class="item-fila fecha-creacion-dato">01/01/23</td>

                        <!-- Opciones de factura: Editar, Eliminar -->
                        <td class="item-fila opciones-factura-opcion">
                            <!-- Editar -->
                            <button class="op-editar-fact">
                                <a href="?c=EditarFactura"><h2>Editar</h2></a>
                                <a href="?c=EditarFactura"><img src="assets/img/editar-icono.png"></a>
                            </button>

                            <!-- Eliminar -->
                            <button class="op-eliminar-fact">
                                <a href="?c=Facturas"><h2 onclick="FacturaEliminada()">Eliminar</h2></a>
                                <a href="?c=Facturas"><img src="assets/img/eliminar-icono.png" onclick="FacturaEliminada()"></a>
                            </button>
                        </td>
                    </tr>
                    <tr class="filas-datos">
                        <td class="item-fila nombre-fact-dato"><a href="Ver_factura.html">Primera venta de la semana</a></td>
                        <td class="item-fila fecha-creacion-dato">01/01/23</td>

                        <!-- Opciones de factura: Editar, Eliminar -->
                        <td class="item-fila opciones-factura-opcion">
                            <!-- Editar -->
                            <button class="op-editar-fact">
                                <a href="?c=EditarFactura"><h2>Editar</h2></a>
                                <a href="?c=EditarFactura"><img src="assets/img/editar-icono.png"></a>
                            </button>

                            <!-- Eliminar -->
                            <button class="op-eliminar-fact">
                                <a href="?c=Facturas"><h2 onclick="FacturaEliminada()">Eliminar</h2></a>
                                <a href="?c=Facturas"><img src="assets/img/eliminar-icono.png" onclick="FacturaEliminada()"></a>
                            </button>
                        </td>
                    </tr>
                    <tr class="filas-datos">
                        <td class="item-fila nombre-fact-dato"><a href="Ver_factura.html">Primera venta de la semana</a></td>
                        <td class="item-fila fecha-creacion-dato">01/01/23</td>

                        <!-- Opciones de factura: Editar, Eliminar -->
                        <td class="item-fila opciones-factura-opcion">
                            <!-- Editar -->
                            <button class="op-editar-fact">
                                <a href="?c=EditarFactura"><h2>Editar</h2></a>
                                <a href="?c=EditarFactura"><img src="assets/img/editar-icono.png"></a>
                            </button>

                            <!-- Eliminar -->
                            <button class="op-eliminar-fact">
                                <a href="?c=Facturas"><h2 onclick="FacturaEliminada()">Eliminar</h2></a>
                                <a href="?c=Facturas"><img src="assets/img/eliminar-icono.png" onclick="FacturaEliminada()"></a>
                            </button>
                        </td>
                    </tr>
                    <tr class="filas-datos">
                        <td class="item-fila nombre-fact-dato"><a href="Ver_factura.html">Primera venta de la semana</a></td>
                        <td class="item-fila fecha-creacion-dato">01/01/23</td>

                        <!-- Opciones de factura: Editar, Eliminar -->
                        <td class="item-fila opciones-factura-opcion">
                            <!-- Editar -->
                            <button class="op-editar-fact">
                                <a href="?c=EditarFactura"><h2>Editar</h2></a>
                                <a href="?c=EditarFactura"><img src="assets/img/editar-icono.png"></a>
                            </button>

                            <!-- Eliminar -->
                            <button class="op-eliminar-fact">
                                <a href="?c=Facturas"><h2 onclick="FacturaEliminada()">Eliminar</h2></a>
                                <a href="?c=Facturas"><img src="assets/img/eliminar-icono.png" onclick="FacturaEliminada()"></a>
                            </button>
                        </td>
                    </tr>
                    <tr class="filas-datos">
                        <td class="item-fila nombre-fact-dato"><a href="Ver_factura.html">Primera venta de la semana</a></td>
                        <td class="item-fila fecha-creacion-dato">01/01/23</td>

                        <!-- Opciones de factura: Editar, Eliminar -->
                        <td class="item-fila opciones-factura-opcion">
                            <!-- Editar -->
                            <button class="op-editar-fact">
                                <a href="?c=EditarFactura"><h2>Editar</h2></a>
                                <a href="?c=EditarFactura"><img src="assets/img/editar-icono.png"></a>
                            </button>

                            <!-- Eliminar -->
                            <button class="op-eliminar-fact">
                                <a href="?c=Facturas"><h2 onclick="FacturaEliminada()">Eliminar</h2></a>
                                <a href="?c=Facturas"><img src="assets/img/eliminar-icono.png" onclick="FacturaEliminada()"></a>
                            </button>
                        </td>
                    </tr>
                    <tr class="filas-datos">
                        <td class="item-fila nombre-fact-dato"><a href="Ver_factura.html">Primera venta de la semana</a></td>
                        <td class="item-fila fecha-creacion-dato">01/01/23</td>

                        <!-- Opciones de factura: Editar, Eliminar -->
                        <td class="item-fila opciones-factura-opcion">
                            <!-- Editar -->
                            <button class="op-editar-fact">
                                <a href="?c=EditarFactura"><h2>Editar</h2></a>
                                <a href="?c=EditarFactura"><img src="assets/img/editar-icono.png"></a>
                            </button>

                            <!-- Eliminar -->
                            <button class="op-eliminar-fact">
                                <a href="?c=Facturas"><h2 onclick="FacturaEliminada()">Eliminar</h2></a>
                                <a href="?c=Facturas"><img src="assets/img/eliminar-icono.png" onclick="FacturaEliminada()"></a>
                            </button>
                        </td>
                    </tr>
                    <tr class="filas-datos">
                        <td class="item-fila nombre-fact-dato"><a href="Ver_factura.html">Primera venta de la semana</a></td>
                        <td class="item-fila fecha-creacion-dato">01/01/23</td>

                        <!-- Opciones de factura: Editar, Eliminar -->
                        <td class="item-fila opciones-factura-opcion">
                            <!-- Editar -->
                            <button class="op-editar-fact">
                                <a href="?c=EditarFactura"><h2>Editar</h2></a>
                                <a href="?c=EditarFactura"><img src="assets/img/editar-icono.png"></a>
                            </button>

                            <!-- Eliminar -->
                            <button class="op-eliminar-fact">
                                <a href="?c=Facturas"><h2 onclick="FacturaEliminada()">Eliminar</h2></a>
                                <a href="?c=Facturas"><img src="assets/img/eliminar-icono.png" onclick="FacturaEliminada()"></a>
                            </button>
                        </td>
                    </tr>
                    <tr class="filas-datos">
                        <td class="item-fila nombre-fact-dato"><a href="Ver_factura.html">Primera venta de la semana</a></td>
                        <td class="item-fila fecha-creacion-dato">01/01/23</td>

                        <!-- Opciones de factura: Editar, Eliminar -->
                        <td class="item-fila opciones-factura-opcion">
                            <!-- Editar -->
                            <button class="op-editar-fact">
                                <a href="?c=EditarFactura"><h2>Editar</h2></a>
                                <a href="?c=EditarFactura"><img src="assets/img/editar-icono.png"></a>
                            </button>

                            <!-- Eliminar -->
                            <button class="op-eliminar-fact">
                                <a href="?c=Facturas"><h2 onclick="FacturaEliminada()">Eliminar</h2></a>
                                <a href="?c=Facturas"><img src="assets/img/eliminar-icono.png" onclick="FacturaEliminada()"></a>
                            </button>
                        </td>
                    </tr>
                    <tr class="filas-datos">
                        <td class="item-fila nombre-fact-dato"><a href="Ver_factura.html">Primera venta de la semana</a></td>
                        <td class="item-fila fecha-creacion-dato">01/01/23</td>

                        <!-- Opciones de factura: Editar, Eliminar -->
                        <td class="item-fila opciones-factura-opcion">
                            <!-- Editar -->
                            <button class="op-editar-fact">
                                <a href="?c=EditarFactura"><h2>Editar</h2></a>
                                <a href="?c=EditarFactura"><img src="assets/img/editar-icono.png"></a>
                            </button>

                            <!-- Eliminar -->
                            <button class="op-eliminar-fact">
                                <a href="?c=Facturas"><h2 onclick="FacturaEliminada()">Eliminar</h2></a>
                                <a href="?c=Facturas"><img src="assets/img/eliminar-icono.png" onclick="FacturaEliminada()"></a>
                            </button>
                        </td>
                    </tr>
                    <tr class="filas-datos">
                        <td class="item-fila nombre-fact-dato"><a href="Ver_factura.html">Primera venta de la semana</a></td>
                        <td class="item-fila fecha-creacion-dato">01/01/23</td>

                        <!-- Opciones de factura: Editar, Eliminar -->
                        <td class="item-fila opciones-factura-opcion">
                            <!-- Editar -->
                            <button class="op-editar-fact">
                                <a href="?c=EditarFactura"><h2>Editar</h2></a>
                                <a href="?c=EditarFactura"><img src="assets/img/editar-icono.png"></a>
                            </button>

                            <!-- Eliminar -->
                            <button class="op-eliminar-fact">
                                <a href="?c=Facturas"><h2 onclick="FacturaEliminada()">Eliminar</h2></a>
                                <a href="?c=Facturas"><img src="assets/img/eliminar-icono.png" onclick="FacturaEliminada()"></a>
                            </button>
                        </td>
                    </tr>
                    <tr class="filas-datos">
                        <td class="item-fila nombre-fact-dato"><a href="Ver_factura.html">Primera venta de la semana</a></td>
                        <td class="item-fila fecha-creacion-dato">01/01/23</td>

                        <!-- Opciones de factura: Editar, Eliminar -->
                        <td class="item-fila opciones-factura-opcion">
                            <!-- Editar -->
                            <button class="op-editar-fact">
                                <a href="?c=EditarFactura"><h2>Editar</h2></a>
                                <a href="?c=EditarFactura"><img src="assets/img/editar-icono.png"></a>
                            </button>

                            <!-- Eliminar -->
                            <button class="op-eliminar-fact">
                                <a href="?c=Facturas"><h2 onclick="FacturaEliminada()">Eliminar</h2></a>
                                <a href="?c=Facturas"><img src="assets/img/eliminar-icono.png" onclick="FacturaEliminada()"></a>
                            </button>
                        </td>
                    </tr>
                    <tr class="filas-datos">
                        <td class="item-fila nombre-fact-dato"><a href="Ver_factura.html">Primera venta de la semana</a></td>
                        <td class="item-fila fecha-creacion-dato">01/01/23</td>

                        <!-- Opciones de factura: Editar, Eliminar -->
                        <td class="item-fila opciones-factura-opcion">
                            <!-- Editar -->
                            <button class="op-editar-fact">
                                <a href="?c=EditarFactura"><h2>Editar</h2></a>
                                <a href="?c=EditarFactura"><img src="assets/img/editar-icono.png"></a>
                            </button>

                            <!-- Eliminar -->
                            <button class="op-eliminar-fact">
                                <a href="?c=Facturas"><h2 onclick="FacturaEliminada()">Eliminar</h2></a>
                                <a href="?c=Facturas"><img src="assets/img/eliminar-icono.png" onclick="FacturaEliminada()"></a>
                            </button>
                        </td>
                    </tr>
                    <tr class="filas-datos">
                        <td class="item-fila nombre-fact-dato"><a href="Ver_factura.html">Primera venta de la semana</a></td>
                        <td class="item-fila fecha-creacion-dato">01/01/23</td>

                        <!-- Opciones de factura: Editar, Eliminar -->
                        <td class="item-fila opciones-factura-opcion">
                            <!-- Editar -->
                            <button class="op-editar-fact">
                                <a href="?c=EditarFactura"><h2>Editar</h2></a>
                                <a href="?c=EditarFactura"><img src="assets/img/editar-icono.png"></a>
                            </button>

                            <!-- Eliminar -->
                            <button class="op-eliminar-fact">
                                <a href="?c=Facturas"><h2 onclick="FacturaEliminada()">Eliminar</h2></a>
                                <a href="?c=Facturas"><img src="assets/img/eliminar-icono.png" onclick="FacturaEliminada()"></a>
                            </button>
                        </td>
                    </tr>
                    <tr class="filas-datos">
                        <td class="item-fila nombre-fact-dato"><a href="Ver_factura.html">Primera venta de la semana</a></td>
                        <td class="item-fila fecha-creacion-dato">01/01/23</td>

                        <!-- Opciones de factura: Editar, Eliminar -->
                        <td class="item-fila opciones-factura-opcion">
                            <!-- Editar -->
                            <button class="op-editar-fact">
                                <a href="?c=EditarFactura"><h2>Editar</h2></a>
                                <a href="?c=EditarFactura"><img src="assets/img/editar-icono.png"></a>
                            </button>

                            <!-- Eliminar -->
                            <button class="op-eliminar-fact">
                                <a href="?c=Facturas"><h2 onclick="FacturaEliminada()">Eliminar</h2></a>
                                <a href="?c=Facturas"><img src="assets/img/eliminar-icono.png" onclick="FacturaEliminada()"></a>
                            </button>
                        </td>
                    </tr>
                    <tr class="filas-datos">
                        <td class="item-fila nombre-fact-dato"><a href="Ver_factura.html">Primera venta de la semana</a></td>
                        <td class="item-fila fecha-creacion-dato">01/01/23</td>

                        <!-- Opciones de factura: Editar, Eliminar -->
                        <td class="item-fila opciones-factura-opcion">
                            <!-- Editar -->
                            <button class="op-editar-fact">
                                <a href="?c=EditarFactura"><h2>Editar</h2></a>
                                <a href="?c=EditarFactura"><img src="assets/img/editar-icono.png"></a>
                            </button>

                            <!-- Eliminar -->
                            <button class="op-eliminar-fact">
                                <a href="?c=Facturas"><h2 onclick="FacturaEliminada()">Eliminar</h2></a>
                                <a href="?c=Facturas"><img src="assets/img/eliminar-icono.png" onclick="FacturaEliminada()"></a>
                            </button>
                        </td>
                    </tr>
                    <tr class="filas-datos">
                        <td class="item-fila nombre-fact-dato"><a href="Ver_factura.html">Primera venta de la semana</a></td>
                        <td class="item-fila fecha-creacion-dato">01/01/23</td>

                        <!-- Opciones de factura: Editar, Eliminar -->
                        <td class="item-fila opciones-factura-opcion">
                            <!-- Editar -->
                            <button class="op-editar-fact">
                                <a href="?c=EditarFactura"><h2>Editar</h2></a>
                                <a href="?c=EditarFactura"><img src="assets/img/editar-icono.png"></a>
                            </button>

                            <!-- Eliminar -->
                            <button class="op-eliminar-fact">
                                <a href="?c=Facturas"><h2 onclick="FacturaEliminada()">Eliminar</h2></a>
                                <a href="?c=Facturas"><img src="assets/img/eliminar-icono.png" onclick="FacturaEliminada()"></a>
                            </button>
                        </td>
                    </tr>
                    <tr class="filas-datos">
                        <td class="item-fila nombre-fact-dato"><a href="Ver_factura.html">Primera venta de la semana</a></td>
                        <td class="item-fila fecha-creacion-dato">01/01/23</td>

                        <!-- Opciones de factura: Editar, Eliminar -->
                        <td class="item-fila opciones-factura-opcion">
                            <!-- Editar -->
                            <button class="op-editar-fact">
                                <a href="?c=EditarFactura"><h2>Editar</h2></a>
                                <a href="?c=EditarFactura"><img src="assets/img/editar-icono.png"></a>
                            </button>

                            <!-- Eliminar -->
                            <button class="op-eliminar-fact">
                                <a href="?c=Facturas"><h2 onclick="FacturaEliminada()">Eliminar</h2></a>
                                <a href="?c=Facturas"><img src="assets/img/eliminar-icono.png" onclick="FacturaEliminada()"></a>
                            </button>
                        </td>
                    </tr>
                    <tr class="filas-datos">
                        <td class="item-fila nombre-fact-dato"><a href="Ver_factura.html">Primera venta de la semana</a></td>
                        <td class="item-fila fecha-creacion-dato">01/01/23</td>

                        <!-- Opciones de factura: Editar, Eliminar -->
                        <td class="item-fila opciones-factura-opcion">
                            <!-- Editar -->
                            <button class="op-editar-fact">
                                <a href="?c=EditarFactura"><h2>Editar</h2></a>
                                <a href="?c=EditarFactura"><img src="assets/img/editar-icono.png"></a>
                            </button>

                            <!-- Eliminar -->
                            <button class="op-eliminar-fact">
                                <a href="?c=Facturas"><h2 onclick="FacturaEliminada()">Eliminar</h2></a>
                                <a href="?c=Facturas"><img src="assets/img/eliminar-icono.png" onclick="FacturaEliminada()"></a>
                            </button>
                        </td>
                    </tr>
                    <tr class="filas-datos">
                        <td class="item-fila nombre-fact-dato"><a href="Ver_factura.html">Primera venta de la semana</a></td>
                        <td class="item-fila fecha-creacion-dato">01/01/23</td>

                        <!-- Opciones de factura: Editar, Eliminar -->
                        <td class="item-fila opciones-factura-opcion">
                            <!-- Editar -->
                            <button class="op-editar-fact">
                                <a href="?c=EditarFactura"><h2>Editar</h2></a>
                                <a href="?c=EditarFactura"><img src="assets/img/editar-icono.png"></a>
                            </button>

                            <!-- Eliminar -->
                            <button class="op-eliminar-fact">
                                <a href="?c=Facturas"><h2 onclick="FacturaEliminada()">Eliminar</h2></a>
                                <a href="?c=Facturas"><img src="assets/img/eliminar-icono.png" onclick="FacturaEliminada()"></a>
                            </button>
                        </td>
                    </tr>
                    <tr class="filas-datos">
                        <td class="item-fila nombre-fact-dato"><a href="Ver_factura.html">Primera venta de la semana</a></td>
                        <td class="item-fila fecha-creacion-dato">01/01/23</td>

                        <!-- Opciones de factura: Editar, Eliminar -->
                        <td class="item-fila opciones-factura-opcion">
                            <!-- Editar -->
                            <button class="op-editar-fact">
                                <a href="?c=EditarFactura"><h2>Editar</h2></a>
                                <a href="?c=EditarFactura"><img src="assets/img/editar-icono.png"></a>
                            </button>

                            <!-- Eliminar -->
                            <button class="op-eliminar-fact">
                                <a href="?c=Facturas"><h2 onclick="FacturaEliminada()">Eliminar</h2></a>
                                <a href="?c=Facturas"><img src="assets/img/eliminar-icono.png" onclick="FacturaEliminada()"></a>
                            </button>
                        </td>
                    </tr>
                    <tr class="filas-datos">
                        <td class="item-fila nombre-fact-dato"><a href="Ver_factura.html">Primera venta de la semana</a></td>
                        <td class="item-fila fecha-creacion-dato">01/01/23</td>

                        <!-- Opciones de factura: Editar, Eliminar -->
                        <td class="item-fila opciones-factura-opcion">
                            <!-- Editar -->
                            <button class="op-editar-fact">
                                <a href="?c=EditarFactura"><h2>Editar</h2></a>
                                <a href="?c=EditarFactura"><img src="assets/img/editar-icono.png"></a>
                            </button>

                            <!-- Eliminar -->
                            <button class="op-eliminar-fact">
                                <a href="?c=Facturas"><h2 onclick="FacturaEliminada()">Eliminar</h2></a>
                                <a href="?c=Facturas"><img src="assets/img/eliminar-icono.png" onclick="FacturaEliminada()"></a>
                            </button>
                        </td>
                    </tr>
                </table>
            </div>
        </section>
    </section>