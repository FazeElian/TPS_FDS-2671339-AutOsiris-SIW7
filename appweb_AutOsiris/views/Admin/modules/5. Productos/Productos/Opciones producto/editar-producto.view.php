<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos | Añadir Producto</title>

    <!-- Hoja de estilos -->
    <link rel="stylesheet" href="assets/css/Admin/5. Productos/Productos/Opciones producto/añadir-producto.css">

    <!-- Scripts -->
    <script defer src="assets/js/Admin/5. Productos/Productos/añadir_producto.js"></script>
</head>
<body>
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1 class="titulo">Añadir Producto</h1>
        </div>

        <!-- Contenedor Añadir producto -->
        <form action="?c=AñadirProducto" method="post" class="cont-anadir-producto">
            <!-- Imagen Producto -->
            <div class="cont-img-producto">
                <img src="" id="imagenPrevisualizacion">
                <input type="file" name="seleccionar-imagen" id="seleccionar-imagen">
            </div>

            <!-- Info producto -->
            <div class="cont-info-producto">
                <!-- Nombre producto -->
                <div class="nombre-prod">
                    <input type="text" name="nombreProducto" id="nombre-prod" value="  Cuaderno cuadriculado argollado">
                </div>

                <div class="cod-prod">
                    <input type="text" name="codigoProducto" id="cod-prod" value="  Código Producto: CUC01">
                </div>

                <!-- Descripción de producto -->
                <div class="descripcion-prod">
                    <input type="text" name="descripcionProducto" id="descripcion-prod" value="  Cuaderno cuadriculado argollado 80 hojas marca Norma">
                </div>

                <!-- Precio de producto -->
                <div class="precio-prod">
                    <input type="text" name="precioProducto" id="precio-prod" value="  Precio: 12 000 $">
                </div>
            </div>
        </form>

        <!-- Botones Opciones -->
        <div class="botones-opciones">
            <!-- Botón: Cancelar -->
            <button class="bott-cancelar">
                <a href="?c=Productos"><h2>Cancelar</h2></a>
            </button>

            <!-- Botón: Añadir Producto -->
            <button type="submit" name="btn-añadir" class="bott-añadir-prod">Actualizar producto</button>
        </div>
    </section>