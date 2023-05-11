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
        <h1> Nueva Factura </h1>
    </div>

    <!-- Contenedor Información vital -->
    <div class="cont_info">
        <!-- Nombre Factura -->
        <div class="nombre_fact">
            <h3> Nombre Factura: </h3>
            <input type="text" placeholder="Primera venta de la semana" id="input-nombre_factura">
        </div>

        <!-- Fecha  de creación -->
        <div class="fecha_creacion">
            <h3> Fecha de creación: </h3>
            <input type="date" placeholder="" id="input-fecha_creacion">
        </div> 
    </div>   
    
    <!-- Tabla de edición -->
    <table class="tab_edicion">
        <!-- Caraterísticas -->
        <tr class="caract_productos">
            <td class="Nombre"> Nombre Producto </td>
            <td class="Cantidad"> Cantidad </td>
            <td class="Precio_unidad"> Precio /u </td>
            <td class="Precio_total"> Precio Total </td>
        </tr>

        <!-- Ítems -->
        <tr>
            <td><input type="text" placeholder="Escribe aquí Nombre de producto" id="nombre_producto"></td>
            <td><input type="number" placeholder="#" id="cantidad_producto"></td>
            <td><input type="text" placeholder="$$" id="precio_unidad"></td>
            <td> Precio a calcular por el sistema </td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Escribe aquí Nombre de producto" id="nombre_producto"></td>
            <td><input type="number" placeholder="#" id="cantidad_producto"></td>
            <td><input type="text" placeholder="$$" id="precio_unidad"></td>
            <td> Precio a calcular por el sistema </td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Escribe aquí Nombre de producto" id="nombre_producto"></td>
            <td><input type="number" placeholder="#" id="cantidad_producto"></td>
            <td><input type="text" placeholder="$$" id="precio_unidad"></td>
            <td> Precio a calcular por el sistema </td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Escribe aquí Nombre de producto" id="nombre_producto"></td>
            <td><input type="number" placeholder="#" id="cantidad_producto"></td>
            <td><input type="text" placeholder="$$" id="precio_unidad"></td>
            <td> Precio a calcular por el sistema </td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Escribe aquí Nombre de producto" id="nombre_producto"></td>
            <td><input type="number" placeholder="#" id="cantidad_producto"></td>
            <td><input type="text" placeholder="$$" id="precio_unidad"></td>
            <td> Precio a calcular por el sistema </td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Escribe aquí Nombre de producto" id="nombre_producto"></td>
            <td><input type="number" placeholder="#" id="cantidad_producto"></td>
            <td><input type="text" placeholder="$$" id="precio_unidad"></td>
            <td> Precio a calcular por el sistema </td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Escribe aquí Nombre de producto" id="nombre_producto"></td>
            <td><input type="number" placeholder="#" id="cantidad_producto"></td>
            <td><input type="text" placeholder="$$" id="precio_unidad"></td>
            <td> Precio a calcular por el sistema </td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Escribe aquí Nombre de producto" id="nombre_producto"></td>
            <td><input type="number" placeholder="#" id="cantidad_producto"></td>
            <td><input type="text" placeholder="$$" id="precio_unidad"></td>
            <td> Precio a calcular por el sistema </td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Escribe aquí Nombre de producto" id="nombre_producto"></td>
            <td><input type="number" placeholder="#" id="cantidad_producto"></td>
            <td><input type="text" placeholder="$$" id="precio_unidad"></td>
            <td> Precio a calcular por el sistema </td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Escribe aquí Nombre de producto" id="nombre_producto"></td>
            <td><input type="number" placeholder="#" id="cantidad_producto"></td>
            <td><input type="text" placeholder="$$" id="precio_unidad"></td>
            <td> Precio a calcular por el sistema </td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Escribe aquí Nombre de producto" id="nombre_producto"></td>
            <td><input type="number" placeholder="#" id="cantidad_producto"></td>
            <td><input type="text" placeholder="$$" id="precio_unidad"></td>
            <td> Precio a calcular por el sistema </td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Escribe aquí Nombre de producto" id="nombre_producto"></td>
            <td><input type="number" placeholder="#" id="cantidad_producto"></td>
            <td><input type="text" placeholder="$$" id="precio_unidad"></td>
            <td> Precio a calcular por el sistema </td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Escribe aquí Nombre de producto" id="nombre_producto"></td>
            <td><input type="number" placeholder="#" id="cantidad_producto"></td>
            <td><input type="text" placeholder="$$" id="precio_unidad"></td>
            <td> Precio a calcular por el sistema </td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Escribe aquí Nombre de producto" id="nombre_producto"></td>
            <td><input type="number" placeholder="#" id="cantidad_producto"></td>
            <td><input type="text" placeholder="$$" id="precio_unidad"></td>
            <td> Precio a calcular por el sistema </td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Escribe aquí Nombre de producto" id="nombre_producto"></td>
            <td><input type="number" placeholder="#" id="cantidad_producto"></td>
            <td><input type="text" placeholder="$$" id="precio_unidad"></td>
            <td> Precio a calcular por el sistema </td>
        </tr>

        <!-- Total Fila Tabla -->
        <tr class="total_tabla">
            <td> Total:  </td>
            <td> # </td>
            <td> $$$ </td>
            <td> Precio a calcular por el sistema </td>
        </tr>
    </table>

    <!-- Botones opciones de Nueva factura -->
        <!-- Botón: Añadir producto/s -->
        <button class="añadir_productos">
            <a href="#"> <h3> Añadir Producto/s </h3></a>
        </button>

        <!-- Crear Factura -->
        <button class="crear_factura">
            <a href="?c=Factura_creada_con_exito"> <h3> Crear Factura </h3></a>
        </button>
</div>
</body>
</body>
</main>