<?php
    // Archivo conexión bbdd
    include "models/DataBase.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos | Categorías</title>

    <!-- Hoja de estilos -->
    <link rel="stylesheet" href="assets/css/Admin/5. Productos/Productos/Categorias/categorias.css">

    <!-- Scripts -->
    <script defer src="assets/js/Admin/5. Productos/Productos/Categorias/categorias.js"></script>
</head>
<body>  
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1 class="titulo">Categorías</h1>
        </div>

        <!-- Barra de búsqueda -->
        <div class="cont-barra-busqueda">
            <input type="search" name="barraBusquedaCategorias" id="barraBusqueda" placeholder="  Buscar categoría de productos">
        </div>

        <!-- Tabla categorías -->
        <table class="tabla-categorias" id="tabla-categorias">
            <!-- Columnas -->
            <tr class="columnas-caract">
                <td class="nombre-categoria item-columna">Nombre categoría</td>
                <td class="cantidad-prod item-columna">Cantidad de productos</td>
                <td class="opciones-categoria item-columna">Opciones</td>
            </tr>

            <!-- Mostrar categorías -->
            <?php
                $consulta = "SELECT * FROM CATEGORIAS";
                $resultado = mysqli_query($conexion, $consulta);    

                while($fila = mysqli_fetch_assoc($resultado)) { ?>
                <tr class="filas-datos">
                    <!-- Imprimimos todos los datos según el nombre de la columna de la tabla de la bbdd -->
                    <td class="nombre-categoria-dato item-fila"><?php echo $fila['nombreCategoria']; ?></td>
                    <td class="cantidad-prod-dato item-fila"><?php echo $fila['cantidadProductos']; ?></td>
                    <td class="opciones-categoria-dato item-fila">
                        <button class="editar-cat">
                            <a href="editar-categoria.view.php?idCategoria=<?php echo $fila['idCategoria']; ?>"><h2>Editar</h2>
                            <img src="assets/img/editar-icono.png"></a>
                        </button>
                        <button class="eliminar-cat">
                            <a href="?c=EliminarCategoria&?idCategoria=<?php echo $fila['idCategoria']; ?>"><h2>Eliminar</h2>
                            <img src="assets/img/eliminar-icono.png"></a>
                        </button>
                    </td>
                </tr>
            <?php } ?>

            <!-- Fila de Entrada a Nueva categoría -->
            <tr class="filas-datos">
                <form action="?c=CategoriasProductos" method="post">
                    <td class="nombre-categoria-dato item-fila"><input type="text" name="NCategoriaNombreProducto" id="NCategoriaNombreProducto" placeholder="Escribe aquí nombre de Nueva Categoría"></td>
                    <td class="cantidad-prod-dato item-fila"><input type="number" name="NCategoriaCantidadProductos" id="NCategoriaCantidadProductos" placeholder="#"></td>

                    <td class="opciones-categoria-dato item-fila">
                        <button class="editar-cat">
                            <h2>Editar</h2>
                            <img src="assets/img/editar-icono.png">
                        </button>
                        <button class="eliminar-cat">
                            <h2>Eliminar</h2>
                            <img src="assets/img/eliminar-icono.png">
                        </button>
                    </td>
            </tr>
        </table>

        <!-- Opciones de Filas -->
        <div class="opciones-filas">
            <!-- Añadir Fila -->
            <button class="añadir-fila" id="añadir-fila" name="btn-añadir-categoria">
                <h2>Nueva Categoría</h2>
            </button>
        </div>
        </form>
        
        <!-- Opciones Categorías -->
        <div class="opciones-categorias">
            <!-- Botón: Cancelar -->
            <button class="bott-cancelar">
                <a href="?c=Productos"><h2>Cancelar</h2></a>
            </button>
            <button class="bott-guardar-cambios">
                <a href="?c=CategoriasProductos"><h2>Guardar Cambios</h2></a>
            </button>
        </div>
    </section>