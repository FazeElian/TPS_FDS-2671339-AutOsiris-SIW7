<main>
<body>
<body bgcolor="#999999">

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
    <!-- Contenido - Contenedor Título de Ventana: Administración Financiera -->
    <div class="ctdo-titulo_Ventana">
        <h1> Administración Financiera </h1>
    </div>

    <!-- Mes-->
    <div class="mes">
        <!-- SubTítulo: Mes -->
        <div class="ctdo_subtitulo_mes">
            <h2> Seleccionar Mes </h2>
        </div>

        <!-- Botón: Limpiar -->
        <button class="bott_limpiar">
            <a href="?c=Administracion_financiera"><h3> Limpiar </h3></a>
        </button>
    
        <!-- Seleccionar mes -->
        <select id="meses">
            <option value="">Selecciona una opción</option>
            <option value="Enero">Enero</option></a>
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
                

        <!-- Contenido meses -->
            <!-- Mes: Enero -->
            <div id="contenido-Enero" style="display: none;">
                <!-- Título de mes -->
                <div class="titulo_mes">
                    <h2>Costos Mes de Enero</h2>
                </div>

                <!-- <div>: Ordenar por: -->
                <div class="ordenar_por">
                    <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                </div>
        
                <!-- Barra de búsqueda de producto -->
                <div class="barra_busqueda">
                    <input type="text" placeholder= "Buscar Producto">
                </div> 

                <!-- Costos Tabla <table> -->
                <table class="tab_costos">
                    <!-- Caraterísticas -->
                    <tr class="caract_productos">
                        <td class="Num_producto"> #Producto </td>
                        <td class="Codigo"> Código </td>
                        <td class="Nombre"> Nombre Producto </td>
                        <td class="Cantidad"> Cantidad </td>
                        <td class="Costo_unidad"> Costo/u </td>
                        <td class="Costo_total"> Costo Total </td>
                    </tr>

                    <!-- Ítems -->
                    <tr>
                        <td> 1 </td>
                        <td> 001 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> 002 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> 003 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 4 </td>
                        <td> 004 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 5 </td>
                        <td> 005 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 6 </td>
                        <td> 006 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 7 </td>
                        <td> 007 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 8 </td>
                        <td> 008 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 9 </td>
                        <td> 009 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 10 </td>
                        <td> 010 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                </table>

                <!-- Ganancias Tabla <table> -->
                    <table class="tab_ganancias">
                        <!-- Título Ganancias -->
                        <div class="titulo_ganancias">
                            <h2>Ganancias</h2>
                        </div>

                    <!-- <div>: Ordenar por: -->
                    <div class="ordenar_por_ganancias">
                        <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                    </div>
            
                    <!-- Barra de búsqueda de producto -->
                    <div class="barra_busqueda_ganancias">
                        <input type="text" placeholder= "Buscar Producto">
                    </div>

                        <!-- Caraterísticas -->
                        <tr class="caract_productos">
                            <td> #Producto </td>
                            <td> Nombre producto </td>
                            <td> Precio de costo </td>
                            <td> Precio de venta </td>
                            <td> Ganancia $ </td>
                            <td> Ganancia % </td>
                        </tr>

                        <!-- Ítems -->
                        <tr>
                            <td> 1 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 2 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 3 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 4 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 5 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 6 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 7 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 8 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 9 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 10 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>    
                    </table>
            </div>

            <!-- Mes: Febrero -->
            <div id="contenido-Febrero" style="display: none;">
                <!-- Título de mes -->
                <div class="titulo_mes">
                    <h2>Costos Mes de Febrero</h2>
                </div>

                <!-- <div>: Ordenar por: -->
                    <div class="ordenar_por">
                        <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                    </div>
            
                    <!-- Barra de búsqueda de producto -->
                    <div class="barra_busqueda">
                        <input type="text" placeholder= "Buscar Producto">
                    </div>
    
                    <!-- Costos Tabla <table> -->
                    <table class="tab_costos">
                        <!-- Caraterísticas -->
                        <tr class="caract_productos">
                            <td class="Num_producto"> #Producto </td>
                            <td class="Codigo"> Código </td>
                            <td class="Nombre"> Nombre Producto </td>
                            <td class="Cantidad"> Cantidad </td>
                            <td class="Costo_unidad"> Costo/u </td>
                            <td class="Costo_total"> Costo Total </td>
                        </tr>
    
                        <!-- Ítems -->
                        <tr>
                            <td> 1 </td>
                            <td> 001 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                            <td> Valor a calcular por el sistema </td>
                        </tr>
                        <tr>
                            <td> 2 </td>
                            <td> 002 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                            <td> Valor a calcular por el sistema </td>
                        </tr>
                        <tr>
                            <td> 3 </td>
                            <td> 003 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                            <td> Valor a calcular por el sistema </td>
                        </tr>
                        <tr>
                            <td> 4 </td>
                            <td> 004 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                            <td> Valor a calcular por el sistema </td>
                        </tr>
                        <tr>
                            <td> 5 </td>
                            <td> 005 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                            <td> Valor a calcular por el sistema </td>
                        </tr>
                        <tr>
                            <td> 6 </td>
                            <td> 006 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                            <td> Valor a calcular por el sistema </td>
                        </tr>
                        <tr>
                            <td> 7 </td>
                            <td> 007 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                            <td> Valor a calcular por el sistema </td>
                        </tr>
                        <tr>
                            <td> 8 </td>
                            <td> 008 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                            <td> Valor a calcular por el sistema </td>
                        </tr>
                        <tr>
                            <td> 9 </td>
                            <td> 009 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                            <td> Valor a calcular por el sistema </td>
                        </tr>
                        <tr>
                            <td> 10 </td>
                            <td> 010 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                            <td> Valor a calcular por el sistema </td>
                        </tr>
                    </table>
    
                    <!-- Ganancias Tabla <table> -->
                        <table class="tab_ganancias">
                            <!-- Título Ganancias -->
                            <div class="titulo_ganancias">
                                <h2>Ganancias</h2>
                            </div>
    
                        <!-- <div>: Ordenar por: -->
                        <div class="ordenar_por_ganancias">
                            <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                        </div>
                
                        <!-- Barra de búsqueda de producto -->
                        <div class="barra_busqueda_ganancias">
                            <input type="text" placeholder= "Buscar Producto">
                        </div>
    
                            <!-- Caraterísticas -->
                            <tr class="caract_productos">
                                <td> #Producto </td>
                                <td> Nombre producto </td>
                                <td> Precio de costo </td>
                                <td> Precio de venta </td>
                                <td> Ganancia $ </td>
                                <td> Ganancia % </td>
                            </tr>
    
                            <!-- Ítems -->
                            <tr>
                                <td> 1 </td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                                <td> Valor a calcular por el sistema </td>
                                <td> Valor a calcular por el sistema </td>
                                <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                            </tr>
                            <tr>
                                <td> 2 </td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                                <td> Valor a calcular por el sistema </td>
                                <td> Valor a calcular por el sistema </td>
                                <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                            </tr>
                            <tr>
                                <td> 3 </td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                                <td> Valor a calcular por el sistema </td>
                                <td> Valor a calcular por el sistema </td>
                                <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                            </tr>
                            <tr>
                                <td> 4 </td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                                <td> Valor a calcular por el sistema </td>
                                <td> Valor a calcular por el sistema </td>
                                <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                            </tr>
                            <tr>
                                <td> 5 </td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                                <td> Valor a calcular por el sistema </td>
                                <td> Valor a calcular por el sistema </td>
                                <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                            </tr>
                            <tr>
                                <td> 6 </td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                                <td> Valor a calcular por el sistema </td>
                                <td> Valor a calcular por el sistema </td>
                                <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                            </tr>
                            <tr>
                                <td> 7 </td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                                <td> Valor a calcular por el sistema </td>
                                <td> Valor a calcular por el sistema </td>
                                <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                            </tr>
                            <tr>
                                <td> 8 </td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                                <td> Valor a calcular por el sistema </td>
                                <td> Valor a calcular por el sistema </td>
                                <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                            </tr>
                            <tr>
                                <td> 9 </td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                                <td> Valor a calcular por el sistema </td>
                                <td> Valor a calcular por el sistema </td>
                                <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                            </tr>
                            <tr>
                                <td> 10 </td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                                <td> Valor a calcular por el sistema </td>
                                <td> Valor a calcular por el sistema </td>
                                <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                            </tr>    
                        </table>
                </div>


            <!-- Mes: Marzo -->
            <div id="contenido-Marzo" style="display: none;">
                <!-- Título de mes -->
                <div class="titulo_mes">
                    <h2>Costos Mes de Marzo</h2>
                </div>

                <!-- <div>: Ordenar por: -->
                <div class="ordenar_por">
                    <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                </div>
        
                <!-- Barra de búsqueda de producto -->
                <div class="barra_busqueda">
                    <input type="text" placeholder= "Buscar Producto">
                </div> 


                <!-- Líneas horizontales separación -->
                <div class="lins_horizontales">
                    <!-- Línea 1 -->
                    <div class="lin1_horizontal">
                    </div>

                    <!-- Línea 2 -->
                    <div class="lin2_horizontal">
                    </div>
                </div>

                <!-- Costos Tabla <table> -->
                <table class="tab_costos">
                    <!-- Caraterísticas -->
                    <tr class="caract_productos">
                        <td class="Num_producto"> #Producto </td>
                        <td class="Codigo"> Código </td>
                        <td class="Nombre"> Nombre Producto </td>
                        <td class="Cantidad"> Cantidad </td>
                        <td class="Costo_unidad"> Costo/u </td>
                        <td class="Costo_total"> Costo Total </td>
                    </tr>

                    <!-- Ítems -->
                    <tr>
                        <td> 1 </td>
                        <td> 001 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> 002 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> 003 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 4 </td>
                        <td> 004 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 5 </td>
                        <td> 005 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 6 </td>
                        <td> 006 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 7 </td>
                        <td> 007 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 8 </td>
                        <td> 008 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 9 </td>
                        <td> 009 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 10 </td>
                        <td> 010 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                </table>

                <!-- Ganancias Tabla <table> -->
                    <table class="tab_ganancias">
                        <!-- Título Ganancias -->
                        <div class="titulo_ganancias">
                            <h2>Ganancias</h2>
                        </div>

                    <!-- <div>: Ordenar por: -->
                    <div class="ordenar_por_ganancias">
                        <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                    </div>
            
                    <!-- Barra de búsqueda de producto -->
                    <div class="barra_busqueda_ganancias">
                        <input type="text" placeholder= "Buscar Producto">
                    </div>

                        <!-- Caraterísticas -->
                        <tr class="caract_productos">
                            <td> #Producto </td>
                            <td> Nombre producto </td>
                            <td> Precio de costo </td>
                            <td> Precio de venta </td>
                            <td> Ganancia $ </td>
                            <td> Ganancia % </td>
                        </tr>

                        <!-- Ítems -->
                        <tr>
                            <td> 1 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 2 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 3 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 4 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 5 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 6 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 7 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 8 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 9 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 10 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>    
                    </table>
            </div> 
            
            <!-- Mes: Abril -->
            <div id="contenido-Abril" style="display: none;">
                <!-- Título de mes -->
                <div class="titulo_mes">
                    <h2>Costos Mes de Abril</h2>
                </div>

                <!-- <div>: Ordenar por: -->
                <div class="ordenar_por">
                    <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                </div>
        
                <!-- Barra de búsqueda de producto -->
                <div class="barra_busqueda">
                    <input type="text" placeholder= "Buscar Producto">
                </div> 


                <!-- Líneas horizontales separación -->
                <div class="lins_horizontales">
                    <!-- Línea 1 -->
                    <div class="lin1_horizontal">
                    </div>

                    <!-- Línea 2 -->
                    <div class="lin2_horizontal">
                    </div>
                </div>

                <!-- Costos Tabla <table> -->
                <table class="tab_costos">
                    <!-- Caraterísticas -->
                    <tr class="caract_productos">
                        <td class="Num_producto"> #Producto </td>
                        <td class="Codigo"> Código </td>
                        <td class="Nombre"> Nombre Producto </td>
                        <td class="Cantidad"> Cantidad </td>
                        <td class="Costo_unidad"> Costo/u </td>
                        <td class="Costo_total"> Costo Total </td>
                    </tr>

                    <!-- Ítems -->
                    <tr>
                        <td> 1 </td>
                        <td> 001 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> 002 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> 003 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 4 </td>
                        <td> 004 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 5 </td>
                        <td> 005 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 6 </td>
                        <td> 006 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 7 </td>
                        <td> 007 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 8 </td>
                        <td> 008 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 9 </td>
                        <td> 009 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 10 </td>
                        <td> 010 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                </table>

                <!-- Ganancias Tabla <table> -->
                    <table class="tab_ganancias">
                        <!-- Título Ganancias -->
                        <div class="titulo_ganancias">
                            <h2>Ganancias</h2>
                        </div>

                    <!-- <div>: Ordenar por: -->
                    <div class="ordenar_por_ganancias">
                        <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                    </div>
            
                    <!-- Barra de búsqueda de producto -->
                    <div class="barra_busqueda_ganancias">
                        <input type="text" placeholder= "Buscar Producto">
                    </div>

                        <!-- Caraterísticas -->
                        <tr class="caract_productos">
                            <td> #Producto </td>
                            <td> Nombre producto </td>
                            <td> Precio de costo </td>
                            <td> Precio de venta </td>
                            <td> Ganancia $ </td>
                            <td> Ganancia % </td>
                        </tr>

                        <!-- Ítems -->
                        <tr>
                            <td> 1 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 2 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 3 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 4 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 5 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 6 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 7 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 8 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 9 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 10 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>    
                    </table>
            </div> 

            <!-- Mes: Mayo -->
            <div id="contenido-Mayo" style="display: none;">
                <!-- Título de mes -->
                <div class="titulo_mes">
                    <h2>Costos Mes de Mayo</h2>
                </div>

                <!-- <div>: Ordenar por: -->
                <div class="ordenar_por">
                    <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                </div>
        
                <!-- Barra de búsqueda de producto -->
                <div class="barra_busqueda">
                    <input type="text" placeholder= "Buscar Producto">
                </div> 


                <!-- Líneas horizontales separación -->
                <div class="lins_horizontales">
                    <!-- Línea 1 -->
                    <div class="lin1_horizontal">
                    </div>

                    <!-- Línea 2 -->
                    <div class="lin2_horizontal">
                    </div>
                </div>

                <!-- Costos Tabla <table> -->
                <table class="tab_costos">
                    <!-- Caraterísticas -->
                    <tr class="caract_productos">
                        <td class="Num_producto"> #Producto </td>
                        <td class="Codigo"> Código </td>
                        <td class="Nombre"> Nombre Producto </td>
                        <td class="Cantidad"> Cantidad </td>
                        <td class="Costo_unidad"> Costo/u </td>
                        <td class="Costo_total"> Costo Total </td>
                    </tr>

                    <!-- Ítems -->
                    <tr>
                        <td> 1 </td>
                        <td> 001 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> 002 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> 003 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 4 </td>
                        <td> 004 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 5 </td>
                        <td> 005 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 6 </td>
                        <td> 006 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 7 </td>
                        <td> 007 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 8 </td>
                        <td> 008 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 9 </td>
                        <td> 009 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 10 </td>
                        <td> 010 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                </table>

                <!-- Ganancias Tabla <table> -->
                    <table class="tab_ganancias">
                        <!-- Título Ganancias -->
                        <div class="titulo_ganancias">
                            <h2>Ganancias</h2>
                        </div>

                    <!-- <div>: Ordenar por: -->
                    <div class="ordenar_por_ganancias">
                        <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                    </div>
            
                    <!-- Barra de búsqueda de producto -->
                    <div class="barra_busqueda_ganancias">
                        <input type="text" placeholder= "Buscar Producto">
                    </div>

                        <!-- Caraterísticas -->
                        <tr class="caract_productos">
                            <td> #Producto </td>
                            <td> Nombre producto </td>
                            <td> Precio de costo </td>
                            <td> Precio de venta </td>
                            <td> Ganancia $ </td>
                            <td> Ganancia % </td>
                        </tr>

                        <!-- Ítems -->
                        <tr>
                            <td> 1 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 2 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 3 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 4 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 5 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 6 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 7 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 8 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 9 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 10 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>    
                    </table>
            </div> 

            <!-- Mes: Junio -->
            <div id="contenido-Junio" style="display: none;">
                <!-- Título de mes -->
                <div class="titulo_mes">
                    <h2>Costos Mes de Junio</h2>
                </div>

                <!-- <div>: Ordenar por: -->
                <div class="ordenar_por">
                    <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                </div>
        
                <!-- Barra de búsqueda de producto -->
                <div class="barra_busqueda">
                    <input type="text" placeholder= "Buscar Producto">
                </div> 


                <!-- Líneas horizontales separación -->
                <div class="lins_horizontales">
                    <!-- Línea 1 -->
                    <div class="lin1_horizontal">
                    </div>

                    <!-- Línea 2 -->
                    <div class="lin2_horizontal">
                    </div>
                </div>

                <!-- Costos Tabla <table> -->
                <table class="tab_costos">
                    <!-- Caraterísticas -->
                    <tr class="caract_productos">
                        <td class="Num_producto"> #Producto </td>
                        <td class="Codigo"> Código </td>
                        <td class="Nombre"> Nombre Producto </td>
                        <td class="Cantidad"> Cantidad </td>
                        <td class="Costo_unidad"> Costo/u </td>
                        <td class="Costo_total"> Costo Total </td>
                    </tr>

                    <!-- Ítems -->
                    <tr>
                        <td> 1 </td>
                        <td> 001 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> 002 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> 003 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 4 </td>
                        <td> 004 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 5 </td>
                        <td> 005 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 6 </td>
                        <td> 006 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 7 </td>
                        <td> 007 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 8 </td>
                        <td> 008 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 9 </td>
                        <td> 009 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 10 </td>
                        <td> 010 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                </table>

                <!-- Ganancias Tabla <table> -->
                    <table class="tab_ganancias">
                        <!-- Título Ganancias -->
                        <div class="titulo_ganancias">
                            <h2>Ganancias</h2>
                        </div>

                    <!-- <div>: Ordenar por: -->
                    <div class="ordenar_por_ganancias">
                        <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                    </div>
            
                    <!-- Barra de búsqueda de producto -->
                    <div class="barra_busqueda_ganancias">
                        <input type="text" placeholder= "Buscar Producto">
                    </div>

                        <!-- Caraterísticas -->
                        <tr class="caract_productos">
                            <td> #Producto </td>
                            <td> Nombre producto </td>
                            <td> Precio de costo </td>
                            <td> Precio de venta </td>
                            <td> Ganancia $ </td>
                            <td> Ganancia % </td>
                        </tr>

                        <!-- Ítems -->
                        <tr>
                            <td> 1 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 2 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 3 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 4 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 5 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 6 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 7 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 8 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 9 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 10 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>    
                    </table>
            </div> 

            <!-- Mes: Julio -->
            <div id="contenido-Julio" style="display: none;">
                <!-- Título de mes -->
                <div class="titulo_mes">
                    <h2>Costos Mes de Julio</h2>
                </div>

                <!-- <div>: Ordenar por: -->
                <div class="ordenar_por">
                    <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                </div>
        
                <!-- Barra de búsqueda de producto -->
                <div class="barra_busqueda">
                    <input type="text" placeholder= "Buscar Producto">
                </div> 


                <!-- Líneas horizontales separación -->
                <div class="lins_horizontales">
                    <!-- Línea 1 -->
                    <div class="lin1_horizontal">
                    </div>

                    <!-- Línea 2 -->
                    <div class="lin2_horizontal">
                    </div>
                </div>

                <!-- Costos Tabla <table> -->
                <table class="tab_costos">
                    <!-- Caraterísticas -->
                    <tr class="caract_productos">
                        <td class="Num_producto"> #Producto </td>
                        <td class="Codigo"> Código </td>
                        <td class="Nombre"> Nombre Producto </td>
                        <td class="Cantidad"> Cantidad </td>
                        <td class="Costo_unidad"> Costo/u </td>
                        <td class="Costo_total"> Costo Total </td>
                    </tr>

                    <!-- Ítems -->
                    <tr>
                        <td> 1 </td>
                        <td> 001 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> 002 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> 003 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 4 </td>
                        <td> 004 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 5 </td>
                        <td> 005 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 6 </td>
                        <td> 006 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 7 </td>
                        <td> 007 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 8 </td>
                        <td> 008 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 9 </td>
                        <td> 009 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 10 </td>
                        <td> 010 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                </table>

                <!-- Ganancias Tabla <table> -->
                    <table class="tab_ganancias">
                        <!-- Título Ganancias -->
                        <div class="titulo_ganancias">
                            <h2>Ganancias</h2>
                        </div>

                    <!-- <div>: Ordenar por: -->
                    <div class="ordenar_por_ganancias">
                        <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                    </div>
            
                    <!-- Barra de búsqueda de producto -->
                    <div class="barra_busqueda_ganancias">
                        <input type="text" placeholder= "Buscar Producto">
                    </div>

                        <!-- Caraterísticas -->
                        <tr class="caract_productos">
                            <td> #Producto </td>
                            <td> Nombre producto </td>
                            <td> Precio de costo </td>
                            <td> Precio de venta </td>
                            <td> Ganancia $ </td>
                            <td> Ganancia % </td>
                        </tr>

                        <!-- Ítems -->
                        <tr>
                            <td> 1 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 2 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 3 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 4 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 5 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 6 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 7 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 8 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 9 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 10 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>    
                    </table>
            </div> 

            <!-- Mes: Agosto -->
            <div id="contenido-Agosto" style="display: none;">
                <!-- Título de mes -->
                <div class="titulo_mes">
                    <h2>Costos Mes de Agosto</h2>
                </div>

                <!-- <div>: Ordenar por: -->
                <div class="ordenar_por">
                    <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                </div>
        
                <!-- Barra de búsqueda de producto -->
                <div class="barra_busqueda">
                    <input type="text" placeholder= "Buscar Producto">
                </div> 


                <!-- Líneas horizontales separación -->
                <div class="lins_horizontales">
                    <!-- Línea 1 -->
                    <div class="lin1_horizontal">
                    </div>

                    <!-- Línea 2 -->
                    <div class="lin2_horizontal">
                    </div>
                </div>

                <!-- Costos Tabla <table> -->
                <table class="tab_costos">
                    <!-- Caraterísticas -->
                    <tr class="caract_productos">
                        <td class="Num_producto"> #Producto </td>
                        <td class="Codigo"> Código </td>
                        <td class="Nombre"> Nombre Producto </td>
                        <td class="Cantidad"> Cantidad </td>
                        <td class="Costo_unidad"> Costo/u </td>
                        <td class="Costo_total"> Costo Total </td>
                    </tr>

                    <!-- Ítems -->
                    <tr>
                        <td> 1 </td>
                        <td> 001 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> 002 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> 003 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 4 </td>
                        <td> 004 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 5 </td>
                        <td> 005 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 6 </td>
                        <td> 006 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 7 </td>
                        <td> 007 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 8 </td>
                        <td> 008 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 9 </td>
                        <td> 009 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 10 </td>
                        <td> 010 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                </table>

                <!-- Ganancias Tabla <table> -->
                    <table class="tab_ganancias">
                        <!-- Título Ganancias -->
                        <div class="titulo_ganancias">
                            <h2>Ganancias</h2>
                        </div>

                    <!-- <div>: Ordenar por: -->
                    <div class="ordenar_por_ganancias">
                        <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                    </div>
            
                    <!-- Barra de búsqueda de producto -->
                    <div class="barra_busqueda_ganancias">
                        <input type="text" placeholder= "Buscar Producto">
                    </div>

                        <!-- Caraterísticas -->
                        <tr class="caract_productos">
                            <td> #Producto </td>
                            <td> Nombre producto </td>
                            <td> Precio de costo </td>
                            <td> Precio de venta </td>
                            <td> Ganancia $ </td>
                            <td> Ganancia % </td>
                        </tr>

                        <!-- Ítems -->
                        <tr>
                            <td> 1 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 2 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 3 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 4 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 5 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 6 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 7 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 8 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 9 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 10 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>    
                    </table>
            </div> 

            <!-- Mes: Septiembre -->
            <div id="contenido-Septiembre" style="display: none;">
                <!-- Título de mes -->
                <div class="titulo_mes">
                    <h2>Costos Mes de Septiembre</h2>
                </div>

                <!-- <div>: Ordenar por: -->
                <div class="ordenar_por">
                    <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                </div>
        
                <!-- Barra de búsqueda de producto -->
                <div class="barra_busqueda">
                    <input type="text" placeholder= "Buscar Producto">
                </div> 


                <!-- Líneas horizontales separación -->
                <div class="lins_horizontales">
                    <!-- Línea 1 -->
                    <div class="lin1_horizontal">
                    </div>

                    <!-- Línea 2 -->
                    <div class="lin2_horizontal">
                    </div>
                </div>

                <!-- Costos Tabla <table> -->
                <table class="tab_costos">
                    <!-- Caraterísticas -->
                    <tr class="caract_productos">
                        <td class="Num_producto"> #Producto </td>
                        <td class="Codigo"> Código </td>
                        <td class="Nombre"> Nombre Producto </td>
                        <td class="Cantidad"> Cantidad </td>
                        <td class="Costo_unidad"> Costo/u </td>
                        <td class="Costo_total"> Costo Total </td>
                    </tr>

                    <!-- Ítems -->
                    <tr>
                        <td> 1 </td>
                        <td> 001 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> 002 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> 003 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 4 </td>
                        <td> 004 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 5 </td>
                        <td> 005 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 6 </td>
                        <td> 006 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 7 </td>
                        <td> 007 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 8 </td>
                        <td> 008 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 9 </td>
                        <td> 009 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 10 </td>
                        <td> 010 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                </table>

                <!-- Ganancias Tabla <table> -->
                    <table class="tab_ganancias">
                        <!-- Título Ganancias -->
                        <div class="titulo_ganancias">
                            <h2>Ganancias</h2>
                        </div>

                    <!-- <div>: Ordenar por: -->
                    <div class="ordenar_por_ganancias">
                        <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                    </div>
            
                    <!-- Barra de búsqueda de producto -->
                    <div class="barra_busqueda_ganancias">
                        <input type="text" placeholder= "Buscar Producto">
                    </div>

                        <!-- Caraterísticas -->
                        <tr class="caract_productos">
                            <td> #Producto </td>
                            <td> Nombre producto </td>
                            <td> Precio de costo </td>
                            <td> Precio de venta </td>
                            <td> Ganancia $ </td>
                            <td> Ganancia % </td>
                        </tr>

                        <!-- Ítems -->
                        <tr>
                            <td> 1 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 2 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 3 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 4 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 5 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 6 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 7 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 8 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 9 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 10 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>    
                    </table>
            </div> 

            <!-- Mes: Octubre -->
            <div id="contenido-Octubre" style="display: none;">
                <!-- Título de mes -->
                <div class="titulo_mes">
                    <h2>Costos Mes de Octubre</h2>
                </div>

                <!-- <div>: Ordenar por: -->
                <div class="ordenar_por">
                    <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                </div>
        
                <!-- Barra de búsqueda de producto -->
                <div class="barra_busqueda">
                    <input type="text" placeholder= "Buscar Producto">
                </div> 


                <!-- Líneas horizontales separación -->
                <div class="lins_horizontales">
                    <!-- Línea 1 -->
                    <div class="lin1_horizontal">
                    </div>

                    <!-- Línea 2 -->
                    <div class="lin2_horizontal">
                    </div>
                </div>

                <!-- Costos Tabla <table> -->
                <table class="tab_costos">
                    <!-- Caraterísticas -->
                    <tr class="caract_productos">
                        <td class="Num_producto"> #Producto </td>
                        <td class="Codigo"> Código </td>
                        <td class="Nombre"> Nombre Producto </td>
                        <td class="Cantidad"> Cantidad </td>
                        <td class="Costo_unidad"> Costo/u </td>
                        <td class="Costo_total"> Costo Total </td>
                    </tr>

                    <!-- Ítems -->
                    <tr>
                        <td> 1 </td>
                        <td> 001 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> 002 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> 003 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 4 </td>
                        <td> 004 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 5 </td>
                        <td> 005 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 6 </td>
                        <td> 006 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 7 </td>
                        <td> 007 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 8 </td>
                        <td> 008 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 9 </td>
                        <td> 009 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 10 </td>
                        <td> 010 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                </table>

                <!-- Ganancias Tabla <table> -->
                    <table class="tab_ganancias">
                        <!-- Título Ganancias -->
                        <div class="titulo_ganancias">
                            <h2>Ganancias</h2>
                        </div>

                    <!-- <div>: Ordenar por: -->
                    <div class="ordenar_por_ganancias">
                        <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                    </div>
            
                    <!-- Barra de búsqueda de producto -->
                    <div class="barra_busqueda_ganancias">
                        <input type="text" placeholder= "Buscar Producto">
                    </div>

                        <!-- Caraterísticas -->
                        <tr class="caract_productos">
                            <td> #Producto </td>
                            <td> Nombre producto </td>
                            <td> Precio de costo </td>
                            <td> Precio de venta </td>
                            <td> Ganancia $ </td>
                            <td> Ganancia % </td>
                        </tr>

                        <!-- Ítems -->
                        <tr>
                            <td> 1 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 2 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 3 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 4 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 5 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 6 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 7 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 8 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 9 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 10 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>    
                    </table>
            </div> 

            <!-- Mes: Noviembre -->
            <div id="contenido-Noviembre" style="display: none;">
                <!-- Título de mes -->
                <div class="titulo_mes">
                    <h2>Costos Mes de Noviembre</h2>
                </div>

                <!-- <div>: Ordenar por: -->
                <div class="ordenar_por">
                    <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                </div>
        
                <!-- Barra de búsqueda de producto -->
                <div class="barra_busqueda">
                    <input type="text" placeholder= "Buscar Producto">
                </div> 


                <!-- Líneas horizontales separación -->
                <div class="lins_horizontales">
                    <!-- Línea 1 -->
                    <div class="lin1_horizontal">
                    </div>

                    <!-- Línea 2 -->
                    <div class="lin2_horizontal">
                    </div>
                </div>

                <!-- Costos Tabla <table> -->
                <table class="tab_costos">
                    <!-- Caraterísticas -->
                    <tr class="caract_productos">
                        <td class="Num_producto"> #Producto </td>
                        <td class="Codigo"> Código </td>
                        <td class="Nombre"> Nombre Producto </td>
                        <td class="Cantidad"> Cantidad </td>
                        <td class="Costo_unidad"> Costo/u </td>
                        <td class="Costo_total"> Costo Total </td>
                    </tr>

                    <!-- Ítems -->
                    <tr>
                        <td> 1 </td>
                        <td> 001 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> 002 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> 003 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 4 </td>
                        <td> 004 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 5 </td>
                        <td> 005 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 6 </td>
                        <td> 006 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 7 </td>
                        <td> 007 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 8 </td>
                        <td> 008 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 9 </td>
                        <td> 009 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 10 </td>
                        <td> 010 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                </table>

                <!-- Ganancias Tabla <table> -->
                    <table class="tab_ganancias">
                        <!-- Título Ganancias -->
                        <div class="titulo_ganancias">
                            <h2>Ganancias</h2>
                        </div>

                    <!-- <div>: Ordenar por: -->
                    <div class="ordenar_por_ganancias">
                        <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                    </div>
            
                    <!-- Barra de búsqueda de producto -->
                    <div class="barra_busqueda_ganancias">
                        <input type="text" placeholder= "Buscar Producto">
                    </div>

                        <!-- Caraterísticas -->
                        <tr class="caract_productos">
                            <td> #Producto </td>
                            <td> Nombre producto </td>
                            <td> Precio de costo </td>
                            <td> Precio de venta </td>
                            <td> Ganancia $ </td>
                            <td> Ganancia % </td>
                        </tr>

                        <!-- Ítems -->
                        <tr>
                            <td> 1 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 2 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 3 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 4 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 5 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 6 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 7 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 8 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 9 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 10 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>    
                    </table>
            </div> 

            <!-- Mes: Diciembre -->
            <div id="contenido-Diciembre" style="display: none;">
                <!-- Título de mes -->
                <div class="titulo_mes">
                    <h2>Costos Mes de Diciembre</h2>
                </div>

                <!-- <div>: Ordenar por: -->
                <div class="ordenar_por">
                    <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                </div>
        
                <!-- Barra de búsqueda de producto -->
                <div class="barra_busqueda">
                    <input type="text" placeholder= "Buscar Producto">
                </div> 


                <!-- Líneas horizontales separación -->
                <div class="lins_horizontales">
                    <!-- Línea 1 -->
                    <div class="lin1_horizontal">
                    </div>

                    <!-- Línea 2 -->
                    <div class="lin2_horizontal">
                    </div>
                </div>

                <!-- Costos Tabla <table> -->
                <table class="tab_costos">
                    <!-- Caraterísticas -->
                    <tr class="caract_productos">
                        <td class="Num_producto"> #Producto </td>
                        <td class="Codigo"> Código </td>
                        <td class="Nombre"> Nombre Producto </td>
                        <td class="Cantidad"> Cantidad </td>
                        <td class="Costo_unidad"> Costo/u </td>
                        <td class="Costo_total"> Costo Total </td>
                    </tr>

                    <!-- Ítems -->
                    <tr>
                        <td> 1 </td>
                        <td> 001 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> 002 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> 003 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 4 </td>
                        <td> 004 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 5 </td>
                        <td> 005 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 6 </td>
                        <td> 006 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 7 </td>
                        <td> 007 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 8 </td>
                        <td> 008 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 9 </td>
                        <td> 009 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                    <tr>
                        <td> 10 </td>
                        <td> 010 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="cantidad_producto"></td>
                        <td><input type="text" placeholder="$$$" id="precio_costo_por_unidad"></td>
                        <td> Valor a calcular por el sistema </td>
                    </tr>
                </table>

                <!-- Ganancias Tabla <table> -->
                    <table class="tab_ganancias">
                        <!-- Título Ganancias -->
                        <div class="titulo_ganancias">
                            <h2>Ganancias</h2>
                        </div>

                    <!-- <div>: Ordenar por: -->
                    <div class="ordenar_por_ganancias">
                        <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                    </div>
            
                    <!-- Barra de búsqueda de producto -->
                    <div class="barra_busqueda_ganancias">
                        <input type="text" placeholder= "Buscar Producto">
                    </div>

                        <!-- Caraterísticas -->
                        <tr class="caract_productos">
                            <td> #Producto </td>
                            <td> Nombre producto </td>
                            <td> Precio de costo </td>
                            <td> Precio de venta </td>
                            <td> Ganancia $ </td>
                            <td> Ganancia % </td>
                        </tr>

                        <!-- Ítems -->
                        <tr>
                            <td> 1 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 2 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 3 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 4 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 5 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 6 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 7 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 8 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 9 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>
                        <tr>
                            <td> 10 </td>
                            <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                            <td><input type="text" placeholder="$$$" id="precio_costo_producto"></td>
                            <td> Valor a calcular por el sistema </td>
                            <td> Valor a calcular por el sistema </td>
                            <td><input type="text" placeholder="%" id="porc_ganancia_producto"></td>
                        </tr>    
                    </table>
            </div> 
    </div>
</div>
</body>
</body>
</main>