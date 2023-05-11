<main>
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
    <a href="?c=Dashboard"> <img src="assets/img/Logo S.I. AutOsiris.png"> </a>
</div>

<!--Menú Superior-->
<section>
<div class="menu_sup">
    <!--Menú Nav-->
    <div class="menu_nav">
        <!--Nav 1: Inicio, Estadísticas, Productos-->
        <div class="nav1">
            <li>
                <a href="?c=Dashboard"> <h1> Inicio </h1> </a>
                <a href="?c=Estadisticas"> <h1> Estadísticas </h1> </a>
                <a href="?c=Ventas"> <h1> Ventas </h1> </a>
                <a href="?c=Productos"> <h1> Productos </h1> </a>
            </li>
        </div>

        <!--Nav 2: Nuevo Mensaje, Mensajes-->
        <div class="nav2">
            <li>
                <a href="?c=Nuevo_mensaje"> <h2> Nuevo Mensaje </h2> </a>
                <a href="?c=Mensajes"> <h1> Mensajes </h1> </a>

            <!--Imagen Icono Mensajes-->
                <a href="?c=Mensajes"> <img src="assets/img/Icono_mensajes.jpg"> </a>
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
                    <a href="?c=Administracion_financiera"> <h2> Administración Financiera </h2> </a>
                </li>

                <li>
                    <a href="?c=Inventarios"> <h2> Inventarios </h2> </a>
                </li>

                <li>
                    <a href="?c=Facturas"> <h2> Facturas </h2> </a>
                </li>

                <li>
                    <a href="?c=Tu_distribuidor"> <h2> Tu Distribuidor </h2> </a>
                </li>

                <li>
                    <a href="?c=Redes_sociales"> <h2> Redes Sociales </h2> </a>
                </li>

                <li class="cerrar_sesion">
                    <a href="?c=Logout"> <h2> Cerrar Sesión </h2></a>
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
        <h1> Tu Distribuidor </h1>
    </div>

    <div class="divs-distribuidor">
        <!-- <div>:Administración Financiera -->
        <div class="dist-administración_financiera">
            <a href="administracion_financiera.html"><img src="assets/img/Imagen-Administracion_financiera.jpg"></a>
            <a href="administracion_financiera.html"><h3> Administración Financiera </h3></a>
        </div>

        <!-- <div>:Inventarios -->
        <div class="dist-inventarios">
            <a href="inventarios.html"><img src="assets/img/Imagen-Inventarios.jpeg"></a>
            <a href="inventarios.html"><h3> Inventarios </h3></a>
        </div>

        <!-- <div>:Facturas -->
        <div class="dist-facturas">
            <a href="facturas.html"><img src="assets/img/Imagen-Facturas.jpg"></a>
            <a href="facturas.html"><h3> Facturas </h3></a>
        </div>

        <!-- <div>:Productos -->
        <div class="dist-productos">
            <a href="index-productos.html"><img src="assets/img/Imagen-Productos.jpg"></a>
            <a href="index-productos.html"><h3> Productos </h3></a>
        </div>

        <!-- <div>:Ventas -->
        <div class="dist-ventas">
            <a href="index-ventas.html"><img src="assets/img/Imagen-Ventas.jpg"></a>
            <a href="index-ventas.html"><h3> Ventas </h3></a>
        </div>
    </div>
</div>
</body>
</body>
</main>