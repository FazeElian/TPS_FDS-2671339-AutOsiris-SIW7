<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturas | Nueva Factura</title>

    <!-- Hoja de estilos -->
    <link rel="stylesheet" href="assets/css/Admin/6. Facturas/Nueva Factura/nueva-factura.css">

    <!-- Scripts -->
    <script defer src="assets/js/Admin/6. Facturas/nueva_factura.js"></script>
</head>
<body>
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1>Nueva Factura</h1>
        </div>

        <!-- Información de factura -->
        <form class="cont-info-factura" method="post" action="?c=NuevaFactura">
            <li class="li-nombre-factura"><h2>Nombre de Factura: </h2><input type="text" name="nombreFactura" id="nombre-factura" placeholder="  Ejemplo: Primera venta de la semana"></li>
            <li class="li-fecha-creacion"><h2>Fecha de creación: </h2><input type="date" name="fechaCreacion" id="fecha-creacion"></li>
        </form>

        <!-- Contenedor de Factura -->
        <div class="cont-factura">
            <!-- Tabla de factura -->
            <table id="tabla-factura">
                <tr class="columnas">
                  <td class="nombre-prod"><h2>Nombre producto</h2></td>
                  <td class="cantidad"><h2>Cantidad</h2></td>
                  <td class="precio-unidad"><h2>Precio /u</h2></td>
                  <td class="precio-total"><h2>Precio Total</h2></td>
                  <td class="bott-eliminar"><img src="assets/img/icono-eliminar-rojo.png"></td>
                </tr>
                <tr class="fila-datos">
                    <!-- <td class="nombre-prod-dato"><input type="text" name="nombre-prod-input" id="nombre-prod-input" placeholder="Escribe aquí nombre de producto"></td> -->
                    <!-- <td class="cantidad-dato"><input type="number" name="cantidad-prod-input" id="cantidad-prod-input" placeholder="#"></td> -->
                    <!-- <td class="precio-unidad-dato"><input type="text" name="precio-unidad-input" id="precio-unidad-input" placeholder="$"></td> -->
                    <!-- <td class="precio-total-dato"><input type="text" name="precio-total-input" id="precio-total-input" placeholder="$$$"></td> -->
                    <!-- <td class="elim-fila"><img src="assets/img/icono-eliminar-rojo.png"></td> -->
                </tr>
              </table>

            <!-- Opciones de Filas -->
            <div class="opciones-filas">
                <!-- Añadir Fila -->
                <button class="añadir-fila" id="añadir-fila" onclick="agregarFilaFactura()">
                    <h2>Añadir Fila</h2>
                </button>
            </div>

            <!-- Opciones factura -->
            <div class="opciones-factura">
                <!-- Botón: Cancelar -->
                <button class="bott-cancelar">
                    <a href="?c=Facturas"><h2>Cancelar</h2></a>
                </button>

                <button class="bott-crear-factura" name="btn-nueva_factura">
                    Crear Factura
                </button>
            </div>
        </div>
    </section>