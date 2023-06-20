<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas | Registrar Venta</title>

    <!-- Hoja de estilos -->
    <link rel="stylesheet" href="assets/css/Admin/4. Ventas/registrar-venta.css">

    <!-- Scripts -->
    <script defer src="assets/js/Admin/4. Ventas/registrar_venta.js"></script>
</head>
<body>
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1>Registrar Venta</h1>
        </div>

        <!-- Contenedor Registro -->
        <form action="?c=RegistrarVenta" method="post" class="cont-registro">
            <!-- Info Registro -->
            <div class="info-registro">
                <div class="cont-nombre-prod">
                    <li class="nombre-prod"> Nombre producto </li>
                    <input type="text" name="nombreProducto" id="nombre-prod">
                </div>

                <div class="cont-fecha-compra">
                    <li class="fecha-compra"> Fecha compra </li>
                    <input type="date" name="fechaCompra" id="fecha-compra">
                </div>

                <div class="cont-cantidad">
                    <li class="cantidad"> Cantidad </li>
                    <input type="number" name="cantidadProducto" id="cantidad">
                </div>

                <div class="cont-precio-unidad">
                    <li class="precio-unidad"> Precio /u</li>
                    <input type="text" name="precioUnidadProducto" id="precio-unidad">
                </div>

                <div class="cont-precio-total">
                    <li class="precio-total"> Precio Total</li>
                    <input type="text" name="precioTotalProducto" id="precio-total">
                </div>
            </div>
        </form>

        <!-- Botones opciones -->
        <div class="botones-opciones">
            <!-- Botón: Cancelar -->
            <div class="bott-cancelar">
                <button class="cancelar">
                    <a href="?c=Ventas"><h2>Cancelar</h2></a>
                </button>
            </div>

            <!-- Botón: Registrar Venta -->
            <div class="bott-registrar-venta">
                <button type="submit" name="btn-registrar" class="registrar-venta">Registrar</button>
            </div>             
        </div>
    </section>