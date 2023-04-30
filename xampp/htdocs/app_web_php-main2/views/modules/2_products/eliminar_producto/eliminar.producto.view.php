<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Productos | Eliminar Producto </title>
    <!--Integración de Archivos a framework bootstrap : .css-->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->

    <!-- Hoja de Estilos para este archivo -->
    <link rel="stylesheet" href="assets/css/eliminar_producto.css">

    <!--Hoja de Estilos principal de index.html-->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <body bgcolor= "#999999">

<!--Integración de Archivos a framework bootstrap : .js-->
<script src="assets/js/jquery.slim.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!--Scripts Personalizados o propios (Van al final de los scripts)-->
<script src=""></script>

<!--Imagen Logo Empresa-->
<div class="img_logo">
    <a href="index.html"> <img src="assets/img/Logo S.I. AutOsiris.png"> </a>
</div>

<!--Menú Superior-->
<section>
<div class="menu_sup">
    <!--Menú Nav-->
    <div class="menu_nav">
        <!--Nav 1: Inicio, Estadísticas, Productos-->
        <div class="nav1">
            <li>
                <a href="index.html"> <h1> Inicio </h1> </a>
                <a href="index-estadisticas.html"> <h1> Estadísticas </h1> </a>
                <a href="index-ventas.html"> <h1> Ventas </h1> </a>
                <a href="index-productos.html"> <h1> Productos </h1> </a>
            </li>
        </div>

        <!--Nav 2: Nuevo Mensaje, Mensajes-->
        <div class="nav2">
            <li>
                <a href="index-nuevo_mensaje.html"> <h1> Nuevo Mensaje </h1> </a>
                <a href="index-mensajes.html"> <h2> Mensajes </h2> </a>

            <!--Imagen Icono Mensajes-->
                <a href="index-mensajes.html"> <img src="assets/img/Icono_mensajes.jpg"> </a>
            </li>
        </div>
    </div>
</section>

<!--Menú Lateral Izquierdo-->
<div class="menu_lat_izq">

    <!--Bloque lateral de menú-->
    <div class="bloque_menu">
    </div>

    <!--Menú Lateral Nav-->
    <div class="menu_lat_nav">
        <nav>
            <ul>
                <li>
                    <a href="pages/menu/administracion_financiera.html"> <h2> Administración Financiera </h2> </a>
                </li>

                <li>
                    <a href="pages/menu/inventarios.html"> <h2> Inventarios </h2> </a>
                </li>

                <li>
                    <a href="pages/menu/facturas.html"> <h2> Facturas </h2> </a>
                </li>

                <li>
                    <a href="pages/menu/tu_distribuidor.html"> <h2> Tu Distribuidor </h2> </a>
                </li>

                <li>
                    <a href="pages/menu/redes_sociales.html"> <h2> Redes Sociales </h2> </a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<!--Líneas separación de contenido-->
 <div class="lineas_cont">
</div>
    <!--Línea 1-->
    <div class="lin1">
    </div>

    <!--Línea 2-->
    <div class="lin2">
    </div>

<!--Div de Contenido-->
<div class="contenido_pag">
    <!-- Contenido - Contenedor Título de Ventana: Productos -->
    <div class="ctdo-titulo_Ventana">
        <h1> Eliminar Producto </h1>
    </div>

    <!-- <input>: Buscar producto -->
    <input class="buscar_producto" id="buscar_producto" placeholder="Buscar Producto...">

    <!-- Botón: Cancelar -->
    <button class="cancelar">
        <a href="index-productos.html"><h3> Cancelar </h3></a>
    </button>

    <!-- Botón: Eliminar producto -->
    <button class="eliminar_producto">
        <a href="producto_elim_con_éxito.html"><h3> Eliminar producto </h3></a>
    </button>
</div>
</body>
</body>

<!-- Footer -->
<footer>
    <!-- Caja de Footer -->
    <div class="footer">

        <!-- Caja 2: Tienda Online -->
        <div class="cont1-tienda_online">
            <!-- <h1>: Tienda Online -->
                <h1> Tienda Online </h1>

            <!-- Ítems de Caja  -->
                <h2> Inicio </h2>
                <h2> Novedades </h2>
                <h2> Recomendados </h2>
                <h2> Carrito de Compras </h2>
        </div>

        <!-- Caja 2: Administrador -->
        <div class="cont2-administrador">
            <!-- <h1>: Administrador -->
                <h1> Administrador </h1>

            <!-- Ítems de Caja  -->
                <a href="administracion_financiera.html">
                    <h2> Administración Financiera </h2>
                </a>
                <a href="facturas.html">
                    <h2> Inventarios </h2>
                </a>
                <a href="tu_distribuidor.html">
                    <h2> Facturas </h2>
                </a>
                <a href="redes_sociales.html">
                    <h2> Tu Distribuidor </h2>
                </a>
                <a href="administracion_financiera.html">
                    <h2> Redes Sociales </h2>
                </a>           
        </div>

        <!-- Caja 3: Miscelánea Osiris (Info Empresa) -->
        <div class="cont3-m_osiris">
            <!-- <h1>: Miscelánea Osiris -->
            <h1> Miscelánea </h1>
            <h2> Osiris </h2>

            <!-- <img>: Logo Empresa -->
            <img src="assets/img/Logo S.I. AutOsiris.png">
            <!-- <p>: Información acerca de la empresa -->
            <p> Infomación acerca la empresa,Infomación acerca la empresa,
                Infomación acerca la empresa,Infomación acerca la empresa,
                Infomación acerca la empresa,Infomación acerca la empresa,
                Infomación acerca la empresa,Infomación acerca la empresa,
                Infomación acerca la empresa,Infomación acerca la empresa,
                Infomación acerca la empresa.
            </p>
        </div>
    </div>
</footer>
</html>