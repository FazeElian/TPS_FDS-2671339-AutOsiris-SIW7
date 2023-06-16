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
    <!-- Contenido - Contenedor Título de Ventana: Ventas -->
    <div class="ctdo-titulo_Ventana">
        <h1> Ventas </h1>
    </div>

    <!-- Botones Registrar Venta -->
    <div class="botones-reg_venta">
        <!-- Botón 1: <h2>: Registrar venta -->
        <button class="bott1-registrar_venta">
            <a href="?c=Registrar_venta"><h2> Registrar Venta </h2></a>
        </button>

        <button class="bott2-icono_plus">
            <a href="?c=Registrar_venta"><img src="assets/img/Icono_añadir.png"></a>
        </button>
    </div>

    <!-- Tipos de ventas: Digitales y Físicas -->
    <div class="divs_ventas">
        <!-- <div>:Ventas Digitales -->
        <div class="v_digitales">
            <a href="?c=Ventas_digitales"><img src="assets/img/Ventas_digitales.jpg"></a>
            <a href="?c=Ventas_digitales"><h3> Digitales: De tu página web o App móvil </h3></a>
        </div>
        <!-- <div>:Ventas Físicas -->
        <div class="v_fisicas">
            <a href="?c=Ventas_fisicas"><img src="assets/img/Ventas_fisicas.jpg"></a>
            <a href="?c=Ventas_fisicas"><h3> Físicas: De tu Negocio Físico </h3></a>
        </div>
    </div>
</div>
</body>
</body>