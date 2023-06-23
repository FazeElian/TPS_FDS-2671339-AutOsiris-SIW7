<?php
    // Archivo conexión bbdd
    include "models/DataBase.php";  
?>

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
                    <input type="text" name="nombreProducto" id="nombre-prod" placeholder="  Nombre Producto">
                </div>

                <div class="cod-prod">
                    <input type="text" name="codigoProducto" id="cod-prod" placeholder="  Código Producto:">

                    <!-- Seleccionar categoría de producto -->
                    <select name="selecccionarCategoriaProducto" id="select-categoria-prod">
                        <option value="Categoría">Categoría</option>
                        <?php 
                            $consulta = "SELECT * FROM CATEGORIAS";
                            $resultado = mysqli_query($conexion, $consulta);

                            while($categoria = mysqli_fetch_array($resultado)) { ?>
                                <option value="Categoria"><?php echo $categoria["nombreCategoria"]; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <!-- Descripción de producto -->
                <div class="descripcion-prod">
                    <input type="text" name="descripcionProducto" id="descripcion-prod" placeholder="  Escribe aquí información de producto">
                </div>

                <!-- Precio de producto -->
                <div class="precio-prod">
                    <input type="text" name="precioProducto" id="precio-prod" placeholder="  Precio:                                                                                                                                                                                                                                         $$$">
                </div>
            </div>
            
            <!-- Botones Opciones -->
            <div class="botones-opciones">
                <!-- Botón: Cancelar -->
                <button class="bott-cancelar">
                    <a href="?c=Productos"><h2>Cancelar</h2></a>
                </button>

                <!-- Botón: Añadir Producto -->
                <button type="submit" name="btn-añadir-producto" class="bott-añadir-prod">Añadir Producto</button>
            </div>
        </form>
    </section>