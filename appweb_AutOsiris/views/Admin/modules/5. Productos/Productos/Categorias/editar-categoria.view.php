<?php
    // Archivo conexión bbdd
    include "models/DataBase.php";  

    if (isset($_GET["idCategoria"])){
        $idCategoria = $_GET["idCategoria"];
        $consulta = "SELECT * FROM CATEGORIAS WHERE idCategoria = $idCategoria";
        $resultado = mysqli_query($conexion, $consulta);

        if(mysqli_num_rows($resultado) == 1){
            $fila = mysqli_fetch_array($resultado);
            $correo = $fila["Correo"];
            $contraseña = $fila["Contraseña"];
        }
    }   

    if(isset($_GET["btn-actualizar-categoria"])){
        $idCategoria = $_GET["idCategoria"];

        $consultaSql = "";
        $resultado = mysqli_query($conexion, $consultaSql);

        header("Location: ?c=CategoriasProductos");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorías | Editar Categoría</title>

    <!-- Hojas de estilos -->
    <link rel="stylesheet" href="assets/css/Admin/5. Productos/Productos/Categorias/categorias.css">
    <link rel="stylesheet" href="assets/css/Admin/5. Productos/Productos/Categorias/editar-categoria.css">

    <!-- Scripts -->
    <script defer src="assets/js/Admin/5. Productos/Productos/Categorias/categorias.js"></script>
</head>
<body>  
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1 class="titulo">Editar Categoría</h1>
        </div>

        <form action="editar-categoria.view.php?idCategoria=<?php echo $_GET["idCategoria"]; ?>">
            <!-- Tabla categorías -->
            <table class="tabla-categorias" id="tabla-categorias">
                <!-- Columnas -->
                <tr class="columnas-caract">
                    <td class="nombre-categoria item-columna">Nombre categoría</td>
                    <td class="cantidad-prod item-columna">Cantidad de productos</td>
                </tr>
                <!-- Mostrar categorías -->
                <?php
                    $consulta = "SELECT * FROM CATEGORIAS";
                    $resultado = mysqli_query($conexion, $consulta);    

                    while($fila = mysqli_fetch_assoc($resultado)) { ?>
                    <tr class="filas-datos">
                        <!-- Imprimimos todos los datos según el nombre de la columna de la tabla de la bbdd -->
                        <td class="nombre-categoria-dato item-fila"><input type="text" name="nombreCategoria" id="NCategoriaNombreProducto" value="<?php echo $fila['nombreCategoria']; ?>"></td>
                        <td class="cantidad-prod-dato item-fila"><input type="number" name="cantidadProductos" id="NCategoriaCantidadProductos" value="<?php echo $fila['cantidadProductos']; ?>"></td>
                    </tr>
                <?php } ?>
            </table>

            <!-- Opciones Categorías -->
            <div class="opciones-categorias">
                <!-- Botón: Cancelar -->
                <button class="bott-cancelar">
                    <a href="?c=CategoriasProductos"><h2>Cancelar</h2></a>
                </button>
                <button class="bott-guardar-cambios" name="btn-actualizar-categoria">
                    <a href="?c=EditarCategoria"><h2>Guardar Cambios</h2></a>
                </button>
            </div>
        </form>
    </section>