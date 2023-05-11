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
        <h1> Editar Producto </h1>
    </div>

    <!-- Contenedor Añadir producto -->
    <div class="añadir_producto">
    
        <!-- Imagen producto -->
        <div class="imagen_producto" (click)="()">
            <label>
              <img src="assets/img/Imagen_productos.jpg">
            <label>
        </div>

        <!-- Nombre Producto-->
        <div class="nombre_producto">
            <input type="text" placeholder="Nombre producto: ">
        </div>

        <!-- Información de producto -->
        <textarea name="info_producto" id="info" cols="30" rows="10" placeholder="Escribe aquí información de nuevo producto"></textarea>

        <!-- Precio de producto -->
        <div class="precio_producto">
        <input type="number" placeholder="Precio:                                                                                                                                 $">
        </div>

        <!-- Código de producto -->
        <div class="codigo_producto">
            <input type="number" placeholder="Código: ">
        </div>
    </div>

    <!-- Click aquí para subir imagen -->
    <input type="file" id="subir_imagen">

    <!-- Botón: Cancelar -->
    <button class="cancelar">
        <a href="?c=Productos"><h3> Cancelar </h3></a>
    </button>

    <!-- Botón: Guardar cambios -->
    <button class="guardar">
        <a href="?c=Productos"><h3> Guardar Cambios </h3></a>
    </button>
</div>
</body>
</body>
</main>