<?php  
    include "models/DataBase.php";    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador | Roles</title>

    <!-- Hoja de estilos -->
    <link rel="stylesheet" href="assets/css/Admin/7. Roles/roles.css">

    <!-- Scripts -->
    <script src="assets/js/Admin/7. Roles/roles.js"></script>
</head>
<body>
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1>Roles</h1>
        </div>

        <!-- Tabla Roles -->
        <table class="tabla-roles" id="tabla-roles">
            <tr class="columnas-caract">
                <td class="nombre-rol item-columna">Nombre</td>
                <td class="descripcion-rol item-columna">Descripción</td>
                <td class="acciones-rol item-columna">Acciones</td>
            </tr>

            <?php
                $consultaSql = "SELECT * FROM ROL";
                $resultado = mysqli_query($conexion, $consultaSql);    

                while($fila = mysqli_fetch_assoc($resultado)) { ?>
                <tr class="filas-datos">
                    <!-- Imprimimos todos los datos según el nombre de la columna de la tabla de la bbdd -->
                    <td class="nombre-rol-dato item-fila"><?php echo $fila["nombreRol"]; ?></td>
                    <td class="descripcion-rol-dato item-fila"><?php echo $fila["descripcion"]; ?></td>
                    <td class="acciones-rol-dato item-fila">
                        <button class="btn-editar">
                            <a href="?c=EditarRol"><h2>Editar</h2></a>
                            <a href="?c=EditarRol"><img src="assets/img/editar-icono.png"></a>
                        </button>

                        <button class="btn-eliminar">
                            <h2>Eliminar</h2>
                            <img src="assets/img/eliminar-icono.png">
                        </button>
                    </td>   
                </tr>
            <?php } ?>

        <form action="?c=Roles" method="post">
                <tr class="filas-datos">
                    <td class="nombre-rol-dato item-fila"><input type="text" name="nombreRol" id="nombreRol" placeholder="Escribe aquí nombre de Nuevo Rol"></td>
                    <td class="descripcion-rol-dato item-fila"><input type="text" name="descripcionRol" id="descripcionRol" placeholder="Describe aquí Nuevo Rol"></td>
                    <td class="acciones-rol-dato item-fila">
                        <button class="btn-editar">
                            <a href="?c=EditarRol"><h2>Editar</h2></a>
                            <a href="?c=EditarRol"><img src="assets/img/editar-icono.png"></a>
                        </button>

                        <button class="btn-eliminar">
                            <h2>Eliminar</h2>
                            <img src="assets/img/eliminar-icono.png">
                        </button>
                    </td>
                </tr>
            </table>

            <!-- Opciones de Filas -->
            <div class="opciones-filas">
                <!-- Añadir Fila -->
                <button class="añadir-fila" id="añadir-fila" name="btn-añadir-rol">
                    <h2>Añadir Rol</h2>
                </button>
            </div>
        </form>

        <!-- Opciones roles -->
        <div class="opciones-roles">
            <!-- Botón: Cancelar -->
            <button class="bott-cancelar">
                <a href="?c=Inventarios"><h2>Cancelar</h2></a>
            </button>
            <button class="bott-guardar-cambios" onclick="GuardarCambios()">
                <a href="?c=Inventarios"><h2>Guardar Cambios</h2></a>
            </button>
        </div>
    </section>