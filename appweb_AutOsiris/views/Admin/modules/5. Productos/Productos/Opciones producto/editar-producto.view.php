<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos | Editar Producto</title>

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
            <h1 class="titulo">Editar Producto</h1>
        </div>

        <div class="buscar-producto">
            <input type="search" name="buscar-producto" id="buscar-producto" placeholder="  Buscar producto">
        </div>

        <!-- Contenedor Añadir producto -->
        <div class="cont-anadir-producto">
            <!-- Imagen Producto -->
            <div class="cont-img-producto">
                <img src="" id="imagenPrevisualizacion">
                <input type="file" name="seleccionar-imagen" id="seleccionar-imagen">
            </div>

            <!-- Info producto -->
            <div class="cont-info-producto">
                <!-- Nombre producto -->
                <div class="nombre-prod">
                    <input type="text" name="nombre-prod" id="nombre-prod" value="Nombre producto">
                </div>

                <!-- Descripción de producto -->
                <div class="descripcion-prod">
                    <textarea type="text" name="descripcion-prod" id="descripcion-prod" value=""></textarea>
                </div>

                <!-- Precio de producto -->
                <div class="precio-prod">
                    <input type="text" name="precio-prod" id="precio-prod" value="Precio: 12.000 $">
                </div>
            </div>
        </div>

        <!-- Botones Opciones -->
        <div class="botones-opciones">
            <!-- Botón: Cancelar -->
            <button class="bott-cancelar">
                <a href="../Productos.html"><h2>Cancelar</h2></a>
            </button>

            <!-- Botón: Añadir Producto -->
            <button class="bott-añadir-prod" onclick="CambiosGuardados()">
                <a href="../Productos.html"><h2>Guardar Cambios</h2></a>
            </button>
        </div>
    </section>