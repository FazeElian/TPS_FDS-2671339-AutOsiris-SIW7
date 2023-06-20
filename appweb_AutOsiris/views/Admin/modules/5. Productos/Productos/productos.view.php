<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador | Productos</title>

    <!-- Hoja de estilos -->
    <link rel="stylesheet" href="assets/css/Admin/5. Productos/Productos/productos.css">

    <!-- Scripts -->
    <script defer src="assets/js/Admin/5. Productos/Productos/añadir_producto.js"></script>
</head>

    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1 class="titulo">Productos</h1>
        </div>

        <!-- Filtros de búsqueda -->
        <div class="filtros-busqueda">
            <div class="ordenar_por">
                <select name="ordenar_por" id="ordenar_por">
                    <option value="Ordenar Por">Ordenar Por</option>
                    <option value="A-Z">A-Z</option>
                    <option value="Precio">Precio</option>
                </select>
            </div>

            <div class="barra_busqueda">
                <input type="search" name="barra_busqueda" id="barra_busqueda" placeholder="  Buscar Producto">
            </div>
        </div>


        <section class="productos">
            <!-- Contenedor de todas las cajas de todos los productos -->
            <section class="sect-productos">
                <!-- Contenedor de producto -->
                <div class="cont-producto">
                    <!-- Formulario de producto -->
                    <form action="?c=AñadirProducto" method="post" class="form-producto">
                        <div class="img-producto">
                            <img src="">
                        </div>

                        <div class="info-producto">
                            <h1>Nombre Producto</h1>
                            <p>
                                Descripción corta de producto, descripción corta de producto,
                                Descripción corta de producto, descripción corta de producto.
                            </p>

                            <h2>Precio Producto: $$$</h2>
                            <h3>Código producto: #001 </h3>
                        </div>
                    </form>

                    <!-- Acciones Producto -->
                    <div class="acciones-prod">
                        <!-- Editar producto -->
                        <button class="editar-prod">
                            <a href="?c=EditarProducto"><h2>Editar</h2>
                            <img src="assets/img/editar-icono.png"></a>
                        </button>
                        <!-- Eliminar producto -->
                        <button class="eliminar-prod">
                        <h2>Eliminar</h2>
                            <img src="assets/img/eliminar-icono.png">
                        </button>
                    </div>
                </div>
                <!-- Contenedor de producto -->
                <div class="cont-producto">
                    <!-- Formulario de producto -->
                    <form action="?c=AñadirProducto" method="post" class="form-producto">
                        <div class="img-producto">
                            <img src="">
                        </div>

                        <div class="info-producto">
                            <h1>Nombre Producto</h1>
                            <p>
                                Descripción corta de producto, descripción corta de producto,
                                Descripción corta de producto, descripción corta de producto.
                            </p>

                            <h2>Precio Producto: $$$</h2>
                            <h3>Código producto: #001 </h3>
                        </div>
                    </form>

                    <!-- Acciones Producto -->
                    <div class="acciones-prod">
                        <!-- Editar producto -->
                        <button class="editar-prod">
                            <a href="?c=EditarProducto"><h2>Editar</h2>
                            <img src="assets/img/editar-icono.png"></a>
                        </button>
                        <!-- Eliminar producto -->
                        <button class="eliminar-prod">
                        <h2>Eliminar</h2>
                            <img src="assets/img/eliminar-icono.png">
                        </button>
                    </div>
                </div>
                <!-- Contenedor de producto -->
                <div class="cont-producto">
                    <!-- Formulario de producto -->
                    <form action="?c=AñadirProducto" method="post" class="form-producto">
                        <div class="img-producto">
                            <img src="">
                        </div>

                        <div class="info-producto">
                            <h1>Nombre Producto</h1>
                            <p>
                                Descripción corta de producto, descripción corta de producto,
                                Descripción corta de producto, descripción corta de producto.
                            </p>

                            <h2>Precio Producto: $$$</h2>
                            <h3>Código producto: #001 </h3>
                        </div>
                    </form>

                    <!-- Acciones Producto -->
                    <div class="acciones-prod">
                        <!-- Editar producto -->
                        <button class="editar-prod">
                            <a href="?c=EditarProducto"><h2>Editar</h2>
                            <img src="assets/img/editar-icono.png"></a>
                        </button>
                        <!-- Eliminar producto -->
                        <button class="eliminar-prod">
                        <h2>Eliminar</h2>
                            <img src="assets/img/eliminar-icono.png">
                        </button>
                    </div>
                </div>
                <!-- Contenedor de producto -->
                <div class="cont-producto">
                    <!-- Formulario de producto -->
                    <form action="?c=AñadirProducto" method="post" class="form-producto">
                        <div class="img-producto">
                            <img src="">
                        </div>

                        <div class="info-producto">
                            <h1>Nombre Producto</h1>
                            <p>
                                Descripción corta de producto, descripción corta de producto,
                                Descripción corta de producto, descripción corta de producto.
                            </p>

                            <h2>Precio Producto: $$$</h2>
                            <h3>Código producto: #001 </h3>
                        </div>
                    </form>

                    <!-- Acciones Producto -->
                    <div class="acciones-prod">
                        <!-- Editar producto -->
                        <button class="editar-prod">
                            <a href="?c=EditarProducto"><h2>Editar</h2>
                            <img src="assets/img/editar-icono.png"></a>
                        </button>
                        <!-- Eliminar producto -->
                        <button class="eliminar-prod">
                        <h2>Eliminar</h2>
                            <img src="assets/img/eliminar-icono.png">
                        </button>
                    </div>
                </div>
            </section>

            <!-- Contenedor de opciones de producto -->
            <div class="opciones-producto">
                <div class="añadir-prod">
                    <a href="?c=AñadirProducto"><img src="assets/img/anadir-icono.png"></a>
                    <a href="?c=AñadirProducto"><h1>Añadir producto</h1></a>
                </div>
            </div>
        </section>
    </section>