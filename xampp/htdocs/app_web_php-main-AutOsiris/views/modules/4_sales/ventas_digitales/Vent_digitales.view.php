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
        <h1> Productos vendidos hoy </h1>
    </div>

    <!-- <div>: Ordenar por: -->
    <div class="ordenar_por">
        <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
    </div>

    <!-- Barra de búsqueda de producto -->
    <div class="barra_busqueda">
        <input type="text" placeholder= "Buscar Producto">
    </div>

    <!-- Ventas Hoy Tabla <table> -->
    <table class="tab_ventas_dig_hoy">
        <!-- Caraterísticas -->
            <tr class="caract_productos">
                <td> Nombre Producto </td>
                <td> Cantidad </td>
                <td> Precio </td>
            </tr>

            <!-- Ítems -->
            <tr>
                <td> Carpeta legajadora plástica </td>
                <td> 2 </td>
                <td> 12.000 $ </td>
            </tr>

            <tr>
                <td> Folder 0.5R </td>
                <td> 2 </td>
                <td> 12.000 $ </td>
            </tr>
            <tr>
                <td> Carpeta legajadora plástica </td>
                <td> 2 </td>
                <td> 12.000 $ </td>
            </tr>

            <tr>
                <td> Folder 0.5R </td>
                <td> 2 </td>
                <td> 12.000 $ </td>
            </tr>
            <tr>
                <td> Carpeta legajadora plástica </td>
                <td> 2 </td>
                <td> 12.000 $ </td>
            </tr>

            <tr>
                <td> Folder 0.5R </td>
                <td> 2 </td>
                <td> 12.000 $ </td>
            </tr>
            <tr>
                <td> Carpeta legajadora plástica </td>
                <td> 2 </td>
                <td> 12.000 $ </td>
            </tr>
            <tr>
                <td> Carpeta legajadora plástica </td>
                <td> 2 </td>
                <td> 12.000 $ </td>
            </tr>

            <tr>
                <td> Folder 0.5R </td>
                <td> 2 </td>
                <td> 12.000 $ </td>
            </tr>
            <tr>
                <td> Carpeta legajadora plástica </td>
                <td> 2 </td>
                <td> 12.000 $ </td>
            </tr>
    </table>

    <!-- Contenido - Contenedor Título: Productos vendidos este mes -->
    <div class="ctdo-titulo_Ventana">
        <h1> Productos vendidos este mes </h1>
    </div>

    <!-- <div>: Ordenar por: -->
        <div class="ordenar_por">
            <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
        </div>
    
    <!-- Barra de búsqueda de producto -->
    <div class="barra_busqueda">
        <input type="text" placeholder= "Buscar Producto">
    </div> 

    <!-- Ventas Hoy Tabla <table> -->
        <table class="tab_ventas_dig_hoy">
            <!-- Caraterísticas -->
                <tr class="caract_productos">
                    <td> Descripción Producto </td>
                    <td> Cantidad </td>
                    <td> Precio </td>
                </tr>
    
                <!-- Ítems -->
                <tr>
                    <td> Carpeta legajadora plástica </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
    
                <tr>
                    <td> Folder 0.5R </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
                <tr>
                    <td> Carpeta legajadora plástica </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
    
                <tr>
                    <td> Folder 0.5R </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
                <tr>
                    <td> Carpeta legajadora plástica </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
                <tr>
                    <td> Folder 0.5R </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
                <tr>
                    <td> Carpeta legajadora plástica </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
                <tr>
                    <td> Carpeta legajadora plástica </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
    
                <tr>
                    <td> Folder 0.5R </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
                <tr>
                    <td> Carpeta legajadora plástica </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
                <tr>
                    <td> Carpeta legajadora plástica </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
    
                <tr>
                    <td> Folder 0.5R </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
                <tr>
                    <td> Carpeta legajadora plástica </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
    
                <tr>
                    <td> Folder 0.5R </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
                <tr>
                    <td> Carpeta legajadora plástica </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
                <tr>
                    <td> Folder 0.5R </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
                <tr>
                    <td> Carpeta legajadora plástica </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
                <tr>
                    <td> Carpeta legajadora plástica </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
    
                <tr>
                    <td> Folder 0.5R </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
                <tr>
                    <td> Carpeta legajadora plástica </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
                <tr>
                    <td> Carpeta legajadora plástica </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
    
                <tr>
                    <td> Folder 0.5R </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
                <tr>
                    <td> Carpeta legajadora plástica </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
    
                <tr>
                    <td> Folder 0.5R </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
                <tr>
                    <td> Carpeta legajadora plástica </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
                <tr>
                    <td> Folder 0.5R </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
                <tr>
                    <td> Carpeta legajadora plástica </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
                <tr>
                    <td> Carpeta legajadora plástica </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
    
                <tr>
                    <td> Folder 0.5R </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
                <tr>
                    <td> Carpeta legajadora plástica </td>
                    <td> 2 </td>
                    <td> 12.000 $ </td>
                </tr>
        </table>

        <!-- Botón: Volver - Ventas -->
        <div class="volver">
            <a href="?c=Ventas"><h3> Volver </h3> </a>
        </div>
</div>
</body>
</body>
</main>