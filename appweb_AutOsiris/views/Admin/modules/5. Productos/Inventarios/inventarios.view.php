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
                <select name="seleccionar-mes" id="seleccionar-mes">
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
                </select>
            </div>
        </div>

        <!-- Contenido Meses -->
        <div id="selecciona-una-opcion" style="display: none;">
            <h1>Selecciona un mes arriba a la derecha</h1>
        </div>
            <!-- Mes: Enero -->
            <div id="contenido-Enero">
                <!-- Texto - Título: Productos -->
                <div class="texto-productos">
                    <h1>Productos Mes: Enero</h1>
                </div>

                <!-- Tabla Productos -->
                <table class="tabla-productos" id="tabla-productos">
                    <tr class="columnas-caract">
                        <td class="num-prod item-columna"><h3>N°</h3></td>
                        <td class="cod-prod item-columna"><h3>Código</h3></td>
                        <td class="nombre-prod item-columna"> <h3>Nombre Producto </h3></td>
                        <td class="existencias-prod item-columna"><h3>Existencias Iniciales</h3></td>
                        <td class="entradas-prod item-columna"><h3>Entradas</h3></td>
                        <td class="salidas-prod item-columna"><h3>Salidas</h3></td>
                        <td class="stock-prod item-columna"><h3>Stock</h3></td>
                        <td class="icono-eliminar item-columna"><img src="assets/img/icono-eliminar-rojo.png"></td>
                    </tr>  

                    <tr class="filas-datos" id="filas-datos">
                        <!-- <td class="num-prod-dato"></td>
                        <td class="cod-prod-dato"><input type='text' placeholder='#001' id='cod-prod-input'></td>
                        <td class="nombre-prod-dato"><input type='text' placeholder='Nombre Producto' id='nombre-prod-input'></td>
                        <td class="existencias-prod-dato"><input type='number' placeholder='#' id='existencias-prod-input'></td>
                        <td class="entradas-prod-dato"><input type='number' placeholder='#' id='entradas-prod-input'></td>
                        <td class="salidas-prod-dato"><input type='number' placeholder='#' id='salidas-prod-input'></td>
                        <td class="stock-prod-dato"><input type='number' placeholder='#' id='stock-prod-input'></td>
                        <td class="elim-fila"><img src="assets/img/icono-eliminar-rojo.png"></td> -->
                    </tr>
                </table>
                
                <!-- Opciones de Filas -->
                <div class="opciones-filas">
                    <!-- Añadir Fila -->
                    <button class="añadir-fila" id="añadir-fila" onclick="añadirFilaProductos()">
                        <h2>Añadir Fila</h2>
                    </button>
                </div>

                <!-- Opciones Inventario -->
                <div class="opciones-inventario">
                    <!-- Botón: Cancelar -->
                    <button class="bott-cancelar">
                        <a href="?c=Dashboard"><h2>Cancelar</h2></a>
                    </button>

                    <button class="bott-guardar-cambios" onclick="GuardarCambios()">
                        <a href="?c=Inventarios"><h2>Guardar Cambios</h2></a>
                    </button>
                </div>
            </div>

            <!-- Mes: Febrero -->
            <div id="contenido-Febrero">
                <!-- Texto - Título: Productos -->
                <div class="texto-productos">
                    <h1>Productos Mes: Febrero</h1>
                </div>

                <!-- Tabla Productos -->
                <table class="tabla-productos" id="tabla-productos">
                    <tr class="columnas-caract">
                        <td class="num-prod item-columna"><h3>N°</h3></td>
                        <td class="cod-prod item-columna"><h3>Código</h3></td>
                        <td class="nombre-prod item-columna"> <h3>Nombre Producto </h3></td>
                        <td class="existencias-prod item-columna"><h3>Existencias Iniciales</h3></td>
                        <td class="entradas-prod item-columna"><h3>Entradas</h3></td>
                        <td class="salidas-prod item-columna"><h3>Salidas</h3></td>
                        <td class="stock-prod item-columna"><h3>Stock</h3></td>
                        <td class="icono-eliminar item-columna"><img src="assets/img/icono-eliminar-rojo.png"></td>
                    </tr>  

                    <tr class="filas-datos" id="filas-datos">
                        <!-- <td class="num-prod-dato"></td>
                        <td class="cod-prod-dato"><input type='text' placeholder='#001' id='cod-prod-input'></td>
                        <td class="nombre-prod-dato"><input type='text' placeholder='Nombre Producto' id='nombre-prod-input'></td>
                        <td class="existencias-prod-dato"><input type='number' placeholder='#' id='existencias-prod-input'></td>
                        <td class="entradas-prod-dato"><input type='number' placeholder='#' id='entradas-prod-input'></td>
                        <td class="salidas-prod-dato"><input type='number' placeholder='#' id='salidas-prod-input'></td>
                        <td class="stock-prod-dato"><input type='number' placeholder='#' id='stock-prod-input'></td>
                        <td class="elim-fila"><img src="assets/img/icono-eliminar-rojo.png"></td> -->
                    </tr>
                </table>
                
                <!-- Opciones de Filas -->
                <div class="opciones-filas">
                    <!-- Añadir Fila -->
                    <button class="añadir-fila" id="añadir-fila" onclick="añadirFilaProductos()">
                        <h2>Añadir Fila</h2>
                    </button>
                </div>

                <!-- Opciones Inventario -->
                <div class="opciones-inventario">
                    <!-- Botón: Cancelar -->
                    <button class="bott-cancelar">
                        <a href="?c=Inventarios"><h2>Cancelar</h2></a>
                    </button>

                    <button class="bott-guardar-cambios" onclick="GuardarCambios()">
                        <a href="?c=Inventarios"><h2>Guardar Cambios</h2></a>
                    </button>
                </div>
            </div>

            <!-- Mes: Marzo -->
            <div id="contenido-Marzo">
                <!-- Texto - Título: Productos -->
                <div class="texto-productos">
                    <h1>Productos Mes: Marzo</h1>
                </div>

                <!-- Tabla Productos -->
                <table class="tabla-productos" id="tabla-productos">
                    <tr class="columnas-caract">
                        <td class="num-prod item-columna"><h3>N°</h3></td>
                        <td class="cod-prod item-columna"><h3>Código</h3></td>
                        <td class="nombre-prod item-columna"> <h3>Nombre Producto </h3></td>
                        <td class="existencias-prod item-columna"><h3>Existencias Iniciales</h3></td>
                        <td class="entradas-prod item-columna"><h3>Entradas</h3></td>
                        <td class="salidas-prod item-columna"><h3>Salidas</h3></td>
                        <td class="stock-prod item-columna"><h3>Stock</h3></td>
                        <td class="icono-eliminar item-columna"><img src="assets/img/icono-eliminar-rojo.png"></td>
                    </tr>  

                    <tr class="filas-datos" id="filas-datos">
                        <!-- <td class="num-prod-dato"></td>
                        <td class="cod-prod-dato"><input type='text' placeholder='#001' id='cod-prod-input'></td>
                        <td class="nombre-prod-dato"><input type='text' placeholder='Nombre Producto' id='nombre-prod-input'></td>
                        <td class="existencias-prod-dato"><input type='number' placeholder='#' id='existencias-prod-input'></td>
                        <td class="entradas-prod-dato"><input type='number' placeholder='#' id='entradas-prod-input'></td>
                        <td class="salidas-prod-dato"><input type='number' placeholder='#' id='salidas-prod-input'></td>
                        <td class="stock-prod-dato"><input type='number' placeholder='#' id='stock-prod-input'></td>
                        <td class="elim-fila"><img src="assets/img/icono-eliminar-rojo.png"></td> -->
                    </tr>
                </table>
                
                <!-- Opciones de Filas -->
                <div class="opciones-filas">
                    <!-- Añadir Fila -->
                    <button class="añadir-fila" id="añadir-fila" onclick="añadirFilaProductos()">
                        <h2>Añadir Fila</h2>
                    </button>
                </div>

                <!-- Opciones Inventario -->
                <div class="opciones-inventario">
                    <!-- Botón: Cancelar -->
                    <button class="bott-cancelar">
                        <a href="?c=Inventarios"><h2>Cancelar</h2></a>
                    </button>

                    <button class="bott-guardar-cambios" onclick="GuardarCambios()">
                        <a href="?c=Inventarios"><h2>Guardar Cambios</h2></a>
                    </button>
                </div>
            </div>

            <!-- Mes: Abril -->
            <div id="contenido-Abril">
                <!-- Texto - Título: Productos -->
                <div class="texto-productos">
                    <h1>Productos Mes: Abril</h1>
                </div>

                <!-- Tabla Productos -->
                <table class="tabla-productos" id="tabla-productos">
                    <tr class="columnas-caract">
                        <td class="num-prod item-columna"><h3>N°</h3></td>
                        <td class="cod-prod item-columna"><h3>Código</h3></td>
                        <td class="nombre-prod item-columna"> <h3>Nombre Producto </h3></td>
                        <td class="existencias-prod item-columna"><h3>Existencias Iniciales</h3></td>
                        <td class="entradas-prod item-columna"><h3>Entradas</h3></td>
                        <td class="salidas-prod item-columna"><h3>Salidas</h3></td>
                        <td class="stock-prod item-columna"><h3>Stock</h3></td>
                        <td class="icono-eliminar item-columna"><img src="assets/img/icono-eliminar-rojo.png"></td>
                    </tr>  

                    <tr class="filas-datos" id="filas-datos">
                        <!-- <td class="num-prod-dato"></td>
                        <td class="cod-prod-dato"><input type='text' placeholder='#001' id='cod-prod-input'></td>
                        <td class="nombre-prod-dato"><input type='text' placeholder='Nombre Producto' id='nombre-prod-input'></td>
                        <td class="existencias-prod-dato"><input type='number' placeholder='#' id='existencias-prod-input'></td>
                        <td class="entradas-prod-dato"><input type='number' placeholder='#' id='entradas-prod-input'></td>
                        <td class="salidas-prod-dato"><input type='number' placeholder='#' id='salidas-prod-input'></td>
                        <td class="stock-prod-dato"><input type='number' placeholder='#' id='stock-prod-input'></td>
                        <td class="elim-fila"><img src="assets/img/icono-eliminar-rojo.png"></td> -->
                    </tr>
                </table>
                
                <!-- Opciones de Filas -->
                <div class="opciones-filas">
                    <!-- Añadir Fila -->
                    <button class="añadir-fila" id="añadir-fila" onclick="añadirFilaProductos()">
                        <h2>Añadir Fila</h2>
                    </button>
                </div>

                <!-- Opciones Inventario -->
                <div class="opciones-inventario">
                    <!-- Botón: Cancelar -->
                    <button class="bott-cancelar">
                        <a href="?c=Inventarios"><h2>Cancelar</h2></a>
                    </button>

                    <button class="bott-guardar-cambios" onclick="GuardarCambios()">
                        <a href="?c=Inventarios"><h2>Guardar Cambios</h2></a>
                    </button>
                </div>
            </div>

            <!-- Mes: Mayo -->
            <div id="contenido-Mayo">
                <!-- Texto - Título: Productos -->
                <div class="texto-productos">
                    <h1>Productos Mes: Mayo</h1>
                </div>

                <!-- Tabla Productos -->
                <table class="tabla-productos" id="tabla-productos">
                    <tr class="columnas-caract">
                        <td class="num-prod item-columna"><h3>N°</h3></td>
                        <td class="cod-prod item-columna"><h3>Código</h3></td>
                        <td class="nombre-prod item-columna"> <h3>Nombre Producto </h3></td>
                        <td class="existencias-prod item-columna"><h3>Existencias Iniciales</h3></td>
                        <td class="entradas-prod item-columna"><h3>Entradas</h3></td>
                        <td class="salidas-prod item-columna"><h3>Salidas</h3></td>
                        <td class="stock-prod item-columna"><h3>Stock</h3></td>
                        <td class="icono-eliminar item-columna"><img src="assets/img/icono-eliminar-rojo.png"></td>
                    </tr>  

                    <tr class="filas-datos" id="filas-datos">
                        <!-- <td class="num-prod-dato"></td>
                        <td class="cod-prod-dato"><input type='text' placeholder='#001' id='cod-prod-input'></td>
                        <td class="nombre-prod-dato"><input type='text' placeholder='Nombre Producto' id='nombre-prod-input'></td>
                        <td class="existencias-prod-dato"><input type='number' placeholder='#' id='existencias-prod-input'></td>
                        <td class="entradas-prod-dato"><input type='number' placeholder='#' id='entradas-prod-input'></td>
                        <td class="salidas-prod-dato"><input type='number' placeholder='#' id='salidas-prod-input'></td>
                        <td class="stock-prod-dato"><input type='number' placeholder='#' id='stock-prod-input'></td>
                        <td class="elim-fila"><img src="assets/img/icono-eliminar-rojo.png"></td> -->
                    </tr>
                </table>
                
                <!-- Opciones de Filas -->
                <div class="opciones-filas">
                    <!-- Añadir Fila -->
                    <button class="añadir-fila" id="añadir-fila" onclick="añadirFilaProductos()">
                        <h2>Añadir Fila</h2>
                    </button>
                </div>

                <!-- Opciones Inventario -->
                <div class="opciones-inventario">
                    <!-- Botón: Cancelar -->
                    <button class="bott-cancelar">
                        <a href="?c=Inventarios"><h2>Cancelar</h2></a>
                    </button>

                    <button class="bott-guardar-cambios" onclick="GuardarCambios()">
                        <a href="?c=Inventarios"><h2>Guardar Cambios</h2></a>
                    </button>
                </div>
            </div>

            <!-- Mes: Junio -->
            <div id="contenido-Junio">
                <!-- Texto - Título: Productos -->
                <div class="texto-productos">
                    <h1>Productos Mes: Junio</h1>
                </div>

                <!-- Tabla Productos -->
                <table class="tabla-productos" id="tabla-productos">
                    <tr class="columnas-caract">
                        <td class="num-prod item-columna"><h3>N°</h3></td>
                        <td class="cod-prod item-columna"><h3>Código</h3></td>
                        <td class="nombre-prod item-columna"> <h3>Nombre Producto </h3></td>
                        <td class="existencias-prod item-columna"><h3>Existencias Iniciales</h3></td>
                        <td class="entradas-prod item-columna"><h3>Entradas</h3></td>
                        <td class="salidas-prod item-columna"><h3>Salidas</h3></td>
                        <td class="stock-prod item-columna"><h3>Stock</h3></td>
                        <td class="icono-eliminar item-columna"><img src="assets/img/icono-eliminar-rojo.png"></td>
                    </tr>  

                    <tr class="filas-datos" id="filas-datos">
                        <!-- <td class="num-prod-dato"></td>
                        <td class="cod-prod-dato"><input type='text' placeholder='#001' id='cod-prod-input'></td>
                        <td class="nombre-prod-dato"><input type='text' placeholder='Nombre Producto' id='nombre-prod-input'></td>
                        <td class="existencias-prod-dato"><input type='number' placeholder='#' id='existencias-prod-input'></td>
                        <td class="entradas-prod-dato"><input type='number' placeholder='#' id='entradas-prod-input'></td>
                        <td class="salidas-prod-dato"><input type='number' placeholder='#' id='salidas-prod-input'></td>
                        <td class="stock-prod-dato"><input type='number' placeholder='#' id='stock-prod-input'></td>
                        <td class="elim-fila"><img src="assets/img/icono-eliminar-rojo.png"></td> -->
                    </tr>
                </table>
                
                <!-- Opciones de Filas -->
                <div class="opciones-filas">
                    <!-- Añadir Fila -->
                    <button class="añadir-fila" id="añadir-fila" onclick="añadirFilaProductos()">
                        <h2>Añadir Fila</h2>
                    </button>
                </div>

                <!-- Opciones Inventario -->
                <div class="opciones-inventario">
                    <!-- Botón: Cancelar -->
                    <button class="bott-cancelar">
                        <a href="?c=Inventarios"><h2>Cancelar</h2></a>
                    </button>

                    <button class="bott-guardar-cambios" onclick="GuardarCambios()">
                        <a href="?c=Inventarios"><h2>Guardar Cambios</h2></a>
                    </button>
                </div>
            </div>

            <!-- Mes: Julio -->
            <div id="contenido-Julio">
                <!-- Texto - Título: Productos -->
                <div class="texto-productos">
                    <h1>Productos Mes: Julio</h1>
                </div>

                <!-- Tabla Productos -->
                <table class="tabla-productos" id="tabla-productos">
                    <tr class="columnas-caract">
                        <td class="num-prod item-columna"><h3>N°</h3></td>
                        <td class="cod-prod item-columna"><h3>Código</h3></td>
                        <td class="nombre-prod item-columna"> <h3>Nombre Producto </h3></td>
                        <td class="existencias-prod item-columna"><h3>Existencias Iniciales</h3></td>
                        <td class="entradas-prod item-columna"><h3>Entradas</h3></td>
                        <td class="salidas-prod item-columna"><h3>Salidas</h3></td>
                        <td class="stock-prod item-columna"><h3>Stock</h3></td>
                        <td class="icono-eliminar item-columna"><img src="assets/img/icono-eliminar-rojo.png"></td>
                    </tr>  

                    <tr class="filas-datos" id="filas-datos">
                        <!-- <td class="num-prod-dato"></td>
                        <td class="cod-prod-dato"><input type='text' placeholder='#001' id='cod-prod-input'></td>
                        <td class="nombre-prod-dato"><input type='text' placeholder='Nombre Producto' id='nombre-prod-input'></td>
                        <td class="existencias-prod-dato"><input type='number' placeholder='#' id='existencias-prod-input'></td>
                        <td class="entradas-prod-dato"><input type='number' placeholder='#' id='entradas-prod-input'></td>
                        <td class="salidas-prod-dato"><input type='number' placeholder='#' id='salidas-prod-input'></td>
                        <td class="stock-prod-dato"><input type='number' placeholder='#' id='stock-prod-input'></td>
                        <td class="elim-fila"><img src="assets/img/icono-eliminar-rojo.png"></td> -->
                    </tr>
                </table>
                
                <!-- Opciones de Filas -->
                <div class="opciones-filas">
                    <!-- Añadir Fila -->
                    <button class="añadir-fila" id="añadir-fila" onclick="añadirFilaProductos()">
                        <h2>Añadir Fila</h2>
                    </button>
                </div>

                <!-- Opciones Inventario -->
                <div class="opciones-inventario">
                    <!-- Botón: Cancelar -->
                    <button class="bott-cancelar">
                        <a href="?c=Inventarios"><h2>Cancelar</h2></a>
                    </button>

                    <button class="bott-guardar-cambios" onclick="GuardarCambios()">
                        <a href="?c=Inventarios"><h2>Guardar Cambios</h2></a>
                    </button>
                </div>
            </div>

            <!-- Mes: Agosto -->
            <div id="contenido-Agosto">
                <!-- Texto - Título: Productos -->
                <div class="texto-productos">
                    <h1>Productos Mes: Agosto</h1>
                </div>

                <!-- Tabla Productos -->
                <table class="tabla-productos" id="tabla-productos">
                    <tr class="columnas-caract">
                        <td class="num-prod item-columna"><h3>N°</h3></td>
                        <td class="cod-prod item-columna"><h3>Código</h3></td>
                        <td class="nombre-prod item-columna"> <h3>Nombre Producto </h3></td>
                        <td class="existencias-prod item-columna"><h3>Existencias Iniciales</h3></td>
                        <td class="entradas-prod item-columna"><h3>Entradas</h3></td>
                        <td class="salidas-prod item-columna"><h3>Salidas</h3></td>
                        <td class="stock-prod item-columna"><h3>Stock</h3></td>
                        <td class="icono-eliminar item-columna"><img src="assets/img/icono-eliminar-rojo.png"></td>
                    </tr>  

                    <tr class="filas-datos" id="filas-datos">
                        <!-- <td class="num-prod-dato"></td>
                        <td class="cod-prod-dato"><input type='text' placeholder='#001' id='cod-prod-input'></td>
                        <td class="nombre-prod-dato"><input type='text' placeholder='Nombre Producto' id='nombre-prod-input'></td>
                        <td class="existencias-prod-dato"><input type='number' placeholder='#' id='existencias-prod-input'></td>
                        <td class="entradas-prod-dato"><input type='number' placeholder='#' id='entradas-prod-input'></td>
                        <td class="salidas-prod-dato"><input type='number' placeholder='#' id='salidas-prod-input'></td>
                        <td class="stock-prod-dato"><input type='number' placeholder='#' id='stock-prod-input'></td>
                        <td class="elim-fila"><img src="assets/img/icono-eliminar-rojo.png"></td> -->
                    </tr>
                </table>
                
                <!-- Opciones de Filas -->
                <div class="opciones-filas">
                    <!-- Añadir Fila -->
                    <button class="añadir-fila" id="añadir-fila" onclick="añadirFilaProductos()">
                        <h2>Añadir Fila</h2>
                    </button>
                </div>

                <!-- Opciones Inventario -->
                <div class="opciones-inventario">
                    <!-- Botón: Cancelar -->
                    <button class="bott-cancelar">
                        <a href="?c=Inventarios"><h2>Cancelar</h2></a>
                    </button>

                    <button class="bott-guardar-cambios" onclick="GuardarCambios()">
                        <a href="?c=Inventarios"><h2>Guardar Cambios</h2></a>
                    </button>
                </div>
            </div>

            <!-- Mes: Septiembre -->
            <div id="contenido-Septiembre">
                <!-- Texto - Título: Productos -->
                <div class="texto-productos">
                    <h1>Productos Mes: Septiembre</h1>
                </div>

                <!-- Tabla Productos -->
                <table class="tabla-productos" id="tabla-productos">
                    <tr class="columnas-caract">
                        <td class="num-prod item-columna"><h3>N°</h3></td>
                        <td class="cod-prod item-columna"><h3>Código</h3></td>
                        <td class="nombre-prod item-columna"> <h3>Nombre Producto </h3></td>
                        <td class="existencias-prod item-columna"><h3>Existencias Iniciales</h3></td>
                        <td class="entradas-prod item-columna"><h3>Entradas</h3></td>
                        <td class="salidas-prod item-columna"><h3>Salidas</h3></td>
                        <td class="stock-prod item-columna"><h3>Stock</h3></td>
                        <td class="icono-eliminar item-columna"><img src="assets/img/icono-eliminar-rojo.png"></td>
                    </tr>  

                    <tr class="filas-datos" id="filas-datos">
                        <!-- <td class="num-prod-dato"></td>
                        <td class="cod-prod-dato"><input type='text' placeholder='#001' id='cod-prod-input'></td>
                        <td class="nombre-prod-dato"><input type='text' placeholder='Nombre Producto' id='nombre-prod-input'></td>
                        <td class="existencias-prod-dato"><input type='number' placeholder='#' id='existencias-prod-input'></td>
                        <td class="entradas-prod-dato"><input type='number' placeholder='#' id='entradas-prod-input'></td>
                        <td class="salidas-prod-dato"><input type='number' placeholder='#' id='salidas-prod-input'></td>
                        <td class="stock-prod-dato"><input type='number' placeholder='#' id='stock-prod-input'></td>
                        <td class="elim-fila"><img src="assets/img/icono-eliminar-rojo.png"></td> -->
                    </tr>
                </table>
                
                <!-- Opciones de Filas -->
                <div class="opciones-filas">
                    <!-- Añadir Fila -->
                    <button class="añadir-fila" id="añadir-fila" onclick="añadirFilaProductos()">
                        <h2>Añadir Fila</h2>
                    </button>
                </div>

                <!-- Opciones Inventario -->
                <div class="opciones-inventario">
                    <!-- Botón: Cancelar -->
                    <button class="bott-cancelar">
                        <a href="?c=Inventarios"><h2>Cancelar</h2></a>
                    </button>

                    <button class="bott-guardar-cambios" onclick="GuardarCambios()">
                        <a href="?c=Inventarios"><h2>Guardar Cambios</h2></a>
                    </button>
                </div>
            </div>

            <!-- Mes: Octubre -->
            <div id="contenido-Octubre">
                <!-- Texto - Título: Productos -->
                <div class="texto-productos">
                    <h1>Productos Mes: Octubre</h1>
                </div>

                <!-- Tabla Productos -->
                <table class="tabla-productos" id="tabla-productos">
                    <tr class="columnas-caract">
                        <td class="num-prod item-columna"><h3>N°</h3></td>
                        <td class="cod-prod item-columna"><h3>Código</h3></td>
                        <td class="nombre-prod item-columna"> <h3>Nombre Producto </h3></td>
                        <td class="existencias-prod item-columna"><h3>Existencias Iniciales</h3></td>
                        <td class="entradas-prod item-columna"><h3>Entradas</h3></td>
                        <td class="salidas-prod item-columna"><h3>Salidas</h3></td>
                        <td class="stock-prod item-columna"><h3>Stock</h3></td>
                        <td class="icono-eliminar item-columna"><img src="assets/img/icono-eliminar-rojo.png"></td>
                    </tr>  

                    <tr class="filas-datos" id="filas-datos">
                        <!-- <td class="num-prod-dato"></td>
                        <td class="cod-prod-dato"><input type='text' placeholder='#001' id='cod-prod-input'></td>
                        <td class="nombre-prod-dato"><input type='text' placeholder='Nombre Producto' id='nombre-prod-input'></td>
                        <td class="existencias-prod-dato"><input type='number' placeholder='#' id='existencias-prod-input'></td>
                        <td class="entradas-prod-dato"><input type='number' placeholder='#' id='entradas-prod-input'></td>
                        <td class="salidas-prod-dato"><input type='number' placeholder='#' id='salidas-prod-input'></td>
                        <td class="stock-prod-dato"><input type='number' placeholder='#' id='stock-prod-input'></td>
                        <td class="elim-fila"><img src="assets/img/icono-eliminar-rojo.png"></td> -->
                    </tr>
                </table>
                
                <!-- Opciones de Filas -->
                <div class="opciones-filas">
                    <!-- Añadir Fila -->
                    <button class="añadir-fila" id="añadir-fila" onclick="añadirFilaProductos()">
                        <h2>Añadir Fila</h2>
                    </button>
                </div>

                <!-- Opciones Inventario -->
                <div class="opciones-inventario">
                    <!-- Botón: Cancelar -->
                    <button class="bott-cancelar">
                        <a href="?c=Inventarios"><h2>Cancelar</h2></a>
                    </button>

                    <button class="bott-guardar-cambios" onclick="GuardarCambios()">
                        <a href="?c=Inventarios"><h2>Guardar Cambios</h2></a>
                    </button>
                </div>
            </div>

            <!-- Mes: Noviembre -->
            <div id="contenido-Noviembre">
                <!-- Texto - Título: Productos -->
                <div class="texto-productos">
                    <h1>Productos Mes: Noviembre</h1>
                </div>

                <!-- Tabla Productos -->
                <table class="tabla-productos" id="tabla-productos">
                    <tr class="columnas-caract">
                        <td class="num-prod item-columna"><h3>N°</h3></td>
                        <td class="cod-prod item-columna"><h3>Código</h3></td>
                        <td class="nombre-prod item-columna"> <h3>Nombre Producto </h3></td>
                        <td class="existencias-prod item-columna"><h3>Existencias Iniciales</h3></td>
                        <td class="entradas-prod item-columna"><h3>Entradas</h3></td>
                        <td class="salidas-prod item-columna"><h3>Salidas</h3></td>
                        <td class="stock-prod item-columna"><h3>Stock</h3></td>
                        <td class="icono-eliminar item-columna"><img src="assets/img/icono-eliminar-rojo.png"></td>
                    </tr>  

                    <tr class="filas-datos" id="filas-datos">
                        <!-- <td class="num-prod-dato"></td>
                        <td class="cod-prod-dato"><input type='text' placeholder='#001' id='cod-prod-input'></td>
                        <td class="nombre-prod-dato"><input type='text' placeholder='Nombre Producto' id='nombre-prod-input'></td>
                        <td class="existencias-prod-dato"><input type='number' placeholder='#' id='existencias-prod-input'></td>
                        <td class="entradas-prod-dato"><input type='number' placeholder='#' id='entradas-prod-input'></td>
                        <td class="salidas-prod-dato"><input type='number' placeholder='#' id='salidas-prod-input'></td>
                        <td class="stock-prod-dato"><input type='number' placeholder='#' id='stock-prod-input'></td>
                        <td class="elim-fila"><img src="assets/img/icono-eliminar-rojo.png"></td> -->
                    </tr>
                </table>
                
                <!-- Opciones de Filas -->
                <div class="opciones-filas">
                    <!-- Añadir Fila -->
                    <button class="añadir-fila" id="añadir-fila" onclick="añadirFilaProductos()">
                        <h2>Añadir Fila</h2>
                    </button>
                </div>

                <!-- Opciones Inventario -->
                <div class="opciones-inventario">
                    <!-- Botón: Cancelar -->
                    <button class="bott-cancelar">
                        <a href="?c=Inventarios"><h2>Cancelar</h2></a>
                    </button>

                    <button class="bott-guardar-cambios" onclick="GuardarCambios()">
                        <a href="?c=Inventarios"><h2>Guardar Cambios</h2></a>
                    </button>
                </div>
            </div>

            <!-- Mes: Diciembre -->
            <div id="contenido-Diciembre">
                <!-- Texto - Título: Productos -->
                <div class="texto-productos">
                    <h1>Productos Mes: Diciembre</h1>
                </div>

                <!-- Tabla Productos -->
                <table class="tabla-productos" id="tabla-productos">
                    <tr class="columnas-caract">
                        <td class="num-prod item-columna"><h3>N°</h3></td>
                        <td class="cod-prod item-columna"><h3>Código</h3></td>
                        <td class="nombre-prod item-columna"> <h3>Nombre Producto </h3></td>
                        <td class="existencias-prod item-columna"><h3>Existencias Iniciales</h3></td>
                        <td class="entradas-prod item-columna"><h3>Entradas</h3></td>
                        <td class="salidas-prod item-columna"><h3>Salidas</h3></td>
                        <td class="stock-prod item-columna"><h3>Stock</h3></td>
                        <td class="icono-eliminar item-columna"><img src="assets/img/icono-eliminar-rojo.png"></td>
                    </tr>  

                    <tr class="filas-datos" id="filas-datos">
                        <!-- <td class="num-prod-dato"></td>
                        <td class="cod-prod-dato"><input type='text' placeholder='#001' id='cod-prod-input'></td>
                        <td class="nombre-prod-dato"><input type='text' placeholder='Nombre Producto' id='nombre-prod-input'></td>
                        <td class="existencias-prod-dato"><input type='number' placeholder='#' id='existencias-prod-input'></td>
                        <td class="entradas-prod-dato"><input type='number' placeholder='#' id='entradas-prod-input'></td>
                        <td class="salidas-prod-dato"><input type='number' placeholder='#' id='salidas-prod-input'></td>
                        <td class="stock-prod-dato"><input type='number' placeholder='#' id='stock-prod-input'></td>
                        <td class="elim-fila"><img src="assets/img/icono-eliminar-rojo.png"></td> -->
                    </tr>
                </table>
                
                <!-- Opciones de Filas -->
                <div class="opciones-filas">
                    <!-- Añadir Fila -->
                    <button class="añadir-fila" id="añadir-fila" onclick="añadirFilaProductos()">
                        <h2>Añadir Fila</h2>
                    </button>
                </div>

                <!-- Opciones Inventario -->
                <div class="opciones-inventario">
                    <!-- Botón: Cancelar -->
                    <button class="bott-cancelar">
                        <a href="?c=Inventarios"><h2>Cancelar</h2></a>
                    </button>

                    <button class="bott-guardar-cambios" onclick="GuardarCambios()">
                        <a href="?c=Inventarios"><h2>Guardar Cambios</h2></a>
                    </button>
                </div>
            </div>
    </section>