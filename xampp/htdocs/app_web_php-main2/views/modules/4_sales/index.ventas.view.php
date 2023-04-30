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
                <a href="index-nuevo_mensaje.html"> <h2> Nuevo Mensaje </h2> </a>
                <a href="index-mensajes.html"> <h1> Mensajes </h1> </a>

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
                    <a href="administracion_financiera.html"> <h2> Administración Financiera </h2> </a>
                </li>

                <li>
                    <a href="inventarios.html"> <h2> Inventarios </h2> </a>
                </li>

                <li>
                    <a href="facturas.html"> <h2> Facturas </h2> </a>
                </li>

                <li>
                    <a href="tu_distribuidor.html"> <h2> Tu Distribuidor </h2> </a>
                </li>

                <li>
                    <a href="redes_sociales.html"> <h2> Redes Sociales </h2> </a>
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
            <a href="registrar_venta.html"><h2> Registrar Venta </h2></a>
        </button>

        <button class="bott2-icono_plus">
            <a href="registrar_venta.html"><img src="assets/img/Icono_añadir.png"></a>
        </button>
    </div>

    <!-- Tipos de ventas: Digitales y Físicas -->
    <div class="divs_ventas">
        <!-- <div>:Ventas Digitales -->
        <div class="v_digitales">
            <a href="ventas_digitales.html"><img src="assets/img/Ventas_digitales.jpg"></a>
            <a href="ventas_digitales.html"><h3> Digitales: De tu página web o App móvil </h3></a>
        </div>
        <!-- <div>:Ventas Físicas -->
        <div class="v_fisicas">
            <a href="ventas_físicas.html"><img src="assets/img/Ventas_fisicas.jpg"></a>
            <a href="ventas_físicas.html"><h3> Físicas: De tu Negocio Físico </h3></a>
        </div>
    </div>
</div>
</body>
</body>
