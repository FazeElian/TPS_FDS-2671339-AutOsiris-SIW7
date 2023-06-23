<?php
    // Archivo conexión bbdd
    include "models/DataBase.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador | Inventarios</title>
    
    <!-- Hoja de estilos -->
    <link rel="stylesheet" href="assets/css/Admin/5. Productos/Inventarios/inventarios.css">

    <!-- Scripts -->
    <script defer src="assets/js/Admin/5. Productos/Inventarios/inventarios.js"></script>
</head>
<body>
    
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1 class="titulo">Inventarios</h1>
        </div>
        <!-- Botón Limpiar y Filtro: Seleccionar mes -->
        <div class="cont-limpiar_filtro">
            <!-- Botón: Limpiar -->
            <div static class="cont-bott-limpiar" id="cont-bott-limpiar">
                <button class="bott-limpiar">
                    <a href="?c=Inventarios"><h2>Limpiar</h2></a>
                </button>
            </div>

            <!-- Filtro: Seleccionar Mes -->
            <div class="cont-seleccionar-mes">
                <!-- <select name="seleccionar-mes" id="seleccionar-mes">
                    <option value="Seleccionar Mes">Seleccionar Mes</option>
                    <option value="Enero">Enero</option>
                    <option value="Febrero">Febrero</option>
                    <option value="Marzo">Marzo</option>
                    <option value="Abril">Abril</option>
                    <option value="Mayo">Mayo</option>
                    <option value="Junio">Junio</option>
                    <option value="Julio">Julio</option>
                    <option value="Agosto">Agosto</option>
                    <option value="Septiembre">Septiembre</option>
                    <option value="Octubre">Octubre</option>
                    <option value="Noviembre">Noviembre</option>
                    <option value="Diciembre">Diciembre</option>
                </select> -->
            </div>
        </div>

        <!-- Contenido Meses -->
        <div id="selecciona-una-opcion" style="display: none;">
            <h1>Selecciona un mes arriba a la derecha</h1>
        </div>
            <!-- Mes: Enero -->
            <div>
                <!-- Texto - Título: Productos -->
                <div class="texto-productos">
                    <h1>Productos:</h1>
                </div>

                <!-- Tabla Productos -->
                <table class="tabla-productos" id="tabla-productos">
                    <tr class="columnas-caract">
                        <td class="num-prod item-columna"><h3>ID</h3></td>
                        <td class="cod-prod item-columna"><h3>Código</h3></td>
                        <td class="nombre-prod item-columna"> <h3>Nombre Producto </h3></td>
                        <td class="entradas-prod item-columna"><h3>Entradas</h3></td>
                        <td class="salidas-prod item-columna"><h3>Salidas</h3></td>
                        <td class="stock-prod item-columna"><h3>Stock</h3></td>
                        <td class="icono-eliminar item-columna"><img src="assets/img/icono-eliminar-rojo.png"></td>
                    </tr>  

                    <!-- Mostrar productos -->
                    <?php
                        $consultaStock = "SELECT * STOCK";
                        $resultado = mysqli_query($conexion, $consultaStock);    

                        while($fila = mysqli_fetch_assoc($resultado)) { ?>
                        <tr class="filas-datos">
                            <!-- Imprimimos todos los datos según el nombre de la columna de la tabla de la bbdd -->
                            <td class="num-prod-dato item-fila"><?php echo $fila['idProducto']; ?></td>
                            <td class="cod-prod-dato item-fila"><?php echo $fila['codigoProducto']; ?></td>
                            <td class="nombre-prod-dato item-fila"><?php echo $fila['nombreProducto']; ?></td>
                            <td class="entradas-prod-dato item-fila"><input type="number" name="entradaProducto" id="entradas-prod-input" value="<?php echo $fila['entradaProducto']; ?>"></td>
                            <td class="salidas-prod-dato item-fila"><input type='number' name="salidaProducto" id='salidas-prod-input' value="<?php echo $fila['salidaProducto']; ?>"></td>
                            <td class="stock-prod-dato item-fila"><?php echo $fila['stockProducto']; ?></td>
                            <td class="elim-fila" id="bott-eliminar-fila"><img src="assets/img/icono-eliminar-rojo.png"></td>
                        </tr>
                    <?php } ?>
                </table>
                

                <!-- Opciones Inventario -->
                <div class="opciones-inventario">
                    <!-- Botón: Cancelar -->
                    <button class="bott-cancelar">
                        <a href="?c=Dashboard"><h2>Cancelar</h2></a>
                    </button>

                    <button class="bott-guardar-cambios">
                        <a href="?c=Inventarios"><h2>Guardar Cambios</h2></a>
                    </button>
                </div>
            </div>
    </section>