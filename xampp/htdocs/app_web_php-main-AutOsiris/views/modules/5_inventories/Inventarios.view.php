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
    <!-- Contenido - Contenedor Título de Ventana: Inventarios -->
    <div class="ctdo-titulo_Ventana">
        <h1> Inventarios </h1>
    </div>

    <!-- Mes-->
    <div class="mes">
        <!-- SubTítulo: Mes -->
        <div class="ctdo_subtitulo_mes">
            <h2> Seleccionar Mes </h2>
        </div>

        <!-- Botón: Limpiar -->
        <button class="bott_limpiar">
            <a href="?c=Inventarios"><h3> Limpiar </h3></a>
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
            <!--Mes: Enero -->
            <div id="contenido-Enero-Inv" style="display: none;">
                <!-- Título de mes -->
                <div class="titulo_productos">
                    <h2>Productos</h2>
                </div>

                <!-- <div>: Ordenar por: -->
                <div class="ordenar_por">
                    <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                </div>
            
                <!-- Barra de búsqueda de producto -->
                <div class="barra_busqueda">
                    <input type="text" placeholder= "Buscar Producto">
                </div> 

                <!-- Opciones de productos -->
                <div class="opciones_productos">
                    <!-- Añadir Producto -->
                    <button class="bott-añadir_producto">
                        <!-- Icono Plus -->
                        <a href="?c=Añadir_producto"><img src="assets/img/Icono_añadir.png"></a>

                        <!-- Texto Añadir Producto -->
                        <a href="?c=Añadir_producto"><h3> Añadir Producto </h3></a>
                    </button>

                    <!-- Editar Producto -->
                    <button class="bott-editar_producto">
                        <!-- Icono Plus -->
                        <a href="?c=Editar_producto"><img src="assets/img/Icono_editar.png">
                        <!-- Texto Editar Producto -->
                        <a href="?c=Editar_producto"><h3> Editar Producto </h3></a>
                    </button>

                    <!-- Eliminar Producto -->
                    <button class="bott-eliminar_producto">
                        <!-- Icono Plus -->
                        <a href="?c=Eliminar_producto"><img src="assets/img/Icono_eliminar.png"></a>

                        <!-- Texto Eliminar Producto -->
                        <a href="?c=Eliminar_producto"><h3> Eliminar Producto </h3></a>
                    </button>
                </div>

                <!-- Productos Tabla <table> -->
                <table class="tab_productos">
                    <!-- Caraterísticas -->
                    <tr class="caract_productos">
                        <td class="Num_producto-Inv"> #Producto </td>
                        <td class="Codigo-Inv"> Código </td>
                        <td class="Nombre-Inv"> Nombre Producto </td>
                        <td class="Existencias_iniciales-Inv"> Existencias Iniciales </td>
                        <td class="Entradas-Inv"> Entradas </td>
                        <td class="Salidas-Inv"> Salidas </td>
                        <td class="Stock-Inv"> Stock </td>
                    </tr>

                    <!-- Ítems -->
                    <tr>
                        <td> 1 </td>
                        <td> 001 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> 002 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> 003 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 4 </td>
                        <td> 004 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 5 </td>
                        <td> 005 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 6 </td>
                        <td> 006 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 7 </td>
                        <td> 007 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 8 </td>
                        <td> 008 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 9 </td>
                        <td> 009 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 10 </td>
                        <td> 010 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                </table>

                <!-- Entradas y Salidas de Inventarios -->
                    <!-- Entradas -->
                        <!-- Título de Entradas -->
                        <div class="titulo_entradas">
                            <h2>Entradas</h2>
                        </div>

                        <!-- Tabla de Entradas -->
                        <table class="tab_entradas">
                            <!-- Caraterísticas -->
                            <tr class="caract_productos">
                                <td class="Num_Factura-Inv"> N° Factura </td>
                                <td class="Fecha-Inv"> Fecha </td>
                                <td class="Codigo-Inv"> Código </td>
                                <td class="Nombre-Inv"> Nombre producto </td>
                                <td class="Cantidad-Inv"> Cantidad </td>
                            </tr>
        
                            <!-- Ítems -->
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>001</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>002</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>003</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>004</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>005</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>006</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>007</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>008</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>009</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>010</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                    </table>

                    <!-- Salidas -->
                        <!-- Título de Salidas -->
                        <div class="titulo_salidas">
                            <h2>Salidas</h2>
                        </div>

                        <!-- Tabla de Salidas -->
                        <table class="tab_salidas">
                            <!-- Caraterísticas -->
                            <tr class="caract_productos">
                                <td class="Num_Factura-Inv"> N° Factura </td>
                                <td class="Fecha-Inv"> Fecha </td>
                                <td class="Codigo-Inv"> Código </td>
                                <td class="Nombre-Inv"> Nombre producto </td>
                                <td class="Cantidad-Inv"> Cantidad </td>
                            </tr>
        
                            <!-- Ítems -->
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>001</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>002</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>003</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>004</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>005</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>006</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>007</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>008</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>009</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>010</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                        </table>
                
                <!-- Botones Opciones Cambios -->
                    <!-- Botón: Cancelar -->  
                    <button class="cancelar">
                        <a href="administracion_financiera.html"><h3> Cancelar </h3></a>
                    </button>
                    
                    <!-- Botón: Guardar Cambios -->   
                    <button class="guardar_cambios">
                        <a href="administracion_financiera.html"><h3> Guardar Cambios </h3></a>
                    </button> 
            </div>

            <!--Mes: Febrero -->
            <div id="contenido-Febrero-Inv" style="display: none;">
                <!-- Título de mes -->
                <div class="titulo_productos">
                    <h2>Productos</h2>
                </div>

                <!-- <div>: Ordenar por: -->
                <div class="ordenar_por">
                    <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                </div>
            
                <!-- Barra de búsqueda de producto -->
                <div class="barra_busqueda">
                    <input type="text" placeholder= "Buscar Producto">
                </div> 

                <!-- Opciones de productos -->
                <div class="opciones_productos">
                    <!-- Añadir Producto -->
                    <button class="bott-añadir_producto">
                        <!-- Icono Plus -->
                        <a href="añadir_producto.html"><img src="assets/img/Icono_añadir.png"></a>

                        <!-- Texto Añadir Producto -->
                        <a href="añadir_producto.html"><h3> Añadir Producto </h3></a>
                    </button>

                    <!-- Editar Producto -->
                    <button class="bott-editar_producto">
                        <!-- Icono Plus -->
                        <a href="editar_producto.html"><img src="assets/img/Icono_editar.png"></a>

                        <!-- Texto Editar Producto -->
                        <a href="editar_producto.html"><h3> Editar Producto </h3></a>
                    </button>

                    <!-- Eliminar Producto -->
                    <button class="bott-eliminar_producto">
                        <!-- Icono Plus -->
                        <a href="eliminar_producto.html"><img src="assets/img/Icono_eliminar.png"></a>

                        <!-- Texto Eliminar Producto -->
                        <a href="eliminar_producto.html"><h3> Eliminar Producto </h3></a>
                    </button>
                </div>

                <!-- Productos Tabla <table> -->
                <table class="tab_productos">
                    <!-- Caraterísticas -->
                    <tr class="caract_productos">
                        <td class="Num_producto-Inv"> #Producto </td>
                        <td class="Codigo-Inv"> Código </td>
                        <td class="Nombre-Inv"> Nombre Producto </td>
                        <td class="Existencias_iniciales-Inv"> Existencias Iniciales </td>
                        <td class="Entradas-Inv"> Entradas </td>
                        <td class="Salidas-Inv"> Salidas </td>
                        <td class="Stock-Inv"> Stock </td>
                    </tr>

                    <!-- Ítems -->
                    <tr>
                        <td> 1 </td>
                        <td> 001 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> 002 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> 003 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 4 </td>
                        <td> 004 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 5 </td>
                        <td> 005 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 6 </td>
                        <td> 006 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 7 </td>
                        <td> 007 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 8 </td>
                        <td> 008 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 9 </td>
                        <td> 009 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 10 </td>
                        <td> 010 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                </table>

                <!-- Entradas y Salidas de Inventarios -->
                    <!-- Entradas -->
                        <!-- Título de Entradas -->
                        <div class="titulo_entradas">
                            <h2>Entradas</h2>
                        </div>

                        <!-- Tabla de Entradas -->
                        <table class="tab_entradas">
                            <!-- Caraterísticas -->
                            <tr class="caract_productos">
                                <td class="Num_Factura-Inv"> N° Factura </td>
                                <td class="Fecha-Inv"> Fecha </td>
                                <td class="Codigo-Inv"> Código </td>
                                <td class="Nombre-Inv"> Nombre producto </td>
                                <td class="Cantidad-Inv"> Cantidad </td>
                            </tr>
        
                            <!-- Ítems -->
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>001</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>002</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>003</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>004</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>005</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>006</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>007</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>008</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>009</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>010</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                    </table>

                    <!-- Salidas -->
                        <!-- Título de Salidas -->
                        <div class="titulo_salidas">
                            <h2>Salidas</h2>
                        </div>

                        <!-- Tabla de Salidas -->
                        <table class="tab_salidas">
                            <!-- Caraterísticas -->
                            <tr class="caract_productos">
                                <td class="Num_Factura-Inv"> N° Factura </td>
                                <td class="Fecha-Inv"> Fecha </td>
                                <td class="Codigo-Inv"> Código </td>
                                <td class="Nombre-Inv"> Nombre producto </td>
                                <td class="Cantidad-Inv"> Cantidad </td>
                            </tr>
        
                            <!-- Ítems -->
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>001</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>002</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>003</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>004</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>005</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>006</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>007</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>008</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>009</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>010</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                        </table>

                <!-- Botones Opciones Cambios -->
                    <!-- Botón: Cancelar -->  
                    <button class="cancelar">
                        <a href="administracion_financiera.html"><h3> Cancelar </h3></a>
                    </button>
                    
                    <!-- Botón: Guardar Cambios -->   
                    <button class="guardar_cambios">
                        <a href="administracion_financiera.html"><h3> Guardar Cambios </h3></a>
                    </button> 
            </div>

            <!-- Mes: Marzo -->
            <div id="contenido-Marzo-Inv" style="display: none;">
                <!-- Título de mes -->
                <div class="titulo_productos">
                    <h2>Productos</h2>
                </div>

                <!-- <div>: Ordenar por: -->
                <div class="ordenar_por">
                    <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                </div>
            
                <!-- Barra de búsqueda de producto -->
                <div class="barra_busqueda">
                    <input type="text" placeholder= "Buscar Producto">
                </div> 

                <!-- Opciones de productos -->
                <div class="opciones_productos">
                    <!-- Añadir Producto -->
                    <button class="bott-añadir_producto">
                        <!-- Icono Plus -->
                        <a href="añadir_producto.html"><img src="assets/img/Icono_añadir.png"></a>

                        <!-- Texto Añadir Producto -->
                        <a href="añadir_producto.html"><h3> Añadir Producto </h3></a>
                    </button>

                    <!-- Editar Producto -->
                    <button class="bott-editar_producto">
                        <!-- Icono Plus -->
                        <a href="editar_producto.html"><img src="assets/img/Icono_editar.png"></a>

                        <!-- Texto Editar Producto -->
                        <a href="editar_producto.html"><h3> Editar Producto </h3></a>
                    </button>

                    <!-- Eliminar Producto -->
                    <button class="bott-eliminar_producto">
                        <!-- Icono Plus -->
                        <a href="eliminar_producto.html"><img src="assets/img/Icono_eliminar.png"></a>

                        <!-- Texto Eliminar Producto -->
                        <a href="eliminar_producto.html"><h3> Eliminar Producto </h3></a>
                    </button>
                </div>

                <!-- Productos Tabla <table> -->
                <table class="tab_productos">
                    <!-- Caraterísticas -->
                    <tr class="caract_productos">
                        <td class="Num_producto-Inv"> #Producto </td>
                        <td class="Codigo-Inv"> Código </td>
                        <td class="Nombre-Inv"> Nombre Producto </td>
                        <td class="Existencias_iniciales-Inv"> Existencias Iniciales </td>
                        <td class="Entradas-Inv"> Entradas </td>
                        <td class="Salidas-Inv"> Salidas </td>
                        <td class="Stock-Inv"> Stock </td>
                    </tr>

                    <!-- Ítems -->
                    <tr>
                        <td> 1 </td>
                        <td> 001 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> 002 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> 003 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 4 </td>
                        <td> 004 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 5 </td>
                        <td> 005 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 6 </td>
                        <td> 006 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 7 </td>
                        <td> 007 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 8 </td>
                        <td> 008 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 9 </td>
                        <td> 009 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 10 </td>
                        <td> 010 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                </table>

                <!-- Entradas y Salidas de Inventarios -->
                    <!-- Entradas -->
                        <!-- Título de Entradas -->
                        <div class="titulo_entradas">
                            <h2>Entradas</h2>
                        </div>

                        <!-- Tabla de Entradas -->
                        <table class="tab_entradas">
                            <!-- Caraterísticas -->
                            <tr class="caract_productos">
                                <td class="Num_Factura-Inv"> N° Factura </td>
                                <td class="Fecha-Inv"> Fecha </td>
                                <td class="Codigo-Inv"> Código </td>
                                <td class="Nombre-Inv"> Nombre producto </td>
                                <td class="Cantidad-Inv"> Cantidad </td>
                            </tr>
        
                            <!-- Ítems -->
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>001</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>002</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>003</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>004</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>005</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>006</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>007</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>008</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>009</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>010</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                    </table>

                    <!-- Salidas -->
                        <!-- Título de Salidas -->
                        <div class="titulo_salidas">
                            <h2>Salidas</h2>
                        </div>

                        <!-- Tabla de Salidas -->
                        <table class="tab_salidas">
                            <!-- Caraterísticas -->
                            <tr class="caract_productos">
                                <td class="Num_Factura-Inv"> N° Factura </td>
                                <td class="Fecha-Inv"> Fecha </td>
                                <td class="Codigo-Inv"> Código </td>
                                <td class="Nombre-Inv"> Nombre producto </td>
                                <td class="Cantidad-Inv"> Cantidad </td>
                            </tr>
        
                            <!-- Ítems -->
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>001</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>002</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>003</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>004</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>005</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>006</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>007</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>008</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>009</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>010</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                        </table>

                <!-- Botones Opciones Cambios -->
                    <!-- Botón: Cancelar -->  
                    <button class="cancelar">
                        <a href="administracion_financiera.html"><h3> Cancelar </h3></a>
                    </button>
                    
                    <!-- Botón: Guardar Cambios -->   
                    <button class="guardar_cambios">
                        <a href="administracion_financiera.html"><h3> Guardar Cambios </h3></a>
                    </button> 
            </div>

            <!--Mes: Abril -->
            <div id="contenido-Abril-Inv" style="display: none;">
                <!-- Título de mes -->
                <div class="titulo_productos">
                    <h2>Productos</h2>
                </div>

                <!-- <div>: Ordenar por: -->
                <div class="ordenar_por">
                    <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                </div>
            
                <!-- Barra de búsqueda de producto -->
                <div class="barra_busqueda">
                    <input type="text" placeholder= "Buscar Producto">
                </div> 

                <!-- Opciones de productos -->
                <div class="opciones_productos">
                    <!-- Añadir Producto -->
                    <button class="bott-añadir_producto">
                        <!-- Icono Plus -->
                        <a href="añadir_producto.html"><img src="assets/img/Icono_añadir.png"></a>

                        <!-- Texto Añadir Producto -->
                        <a href="añadir_producto.html"><h3> Añadir Producto </h3></a>
                    </button>

                    <!-- Editar Producto -->
                    <button class="bott-editar_producto">
                        <!-- Icono Plus -->
                        <a href="editar_producto.html"><img src="assets/img/Icono_editar.png"></a>

                        <!-- Texto Editar Producto -->
                        <a href="editar_producto.html"><h3> Editar Producto </h3></a>
                    </button>

                    <!-- Eliminar Producto -->
                    <button class="bott-eliminar_producto">
                        <!-- Icono Plus -->
                        <a href="eliminar_producto.html"><img src="assets/img/Icono_eliminar.png"></a>

                        <!-- Texto Eliminar Producto -->
                        <a href="eliminar_producto.html"><h3> Eliminar Producto </h3></a>
                    </button>
                </div>

                <!-- Productos Tabla <table> -->
                <table class="tab_productos">
                    <!-- Caraterísticas -->
                    <tr class="caract_productos">
                        <td class="Num_producto-Inv"> #Producto </td>
                        <td class="Codigo-Inv"> Código </td>
                        <td class="Nombre-Inv"> Nombre Producto </td>
                        <td class="Existencias_iniciales-Inv"> Existencias Iniciales </td>
                        <td class="Entradas-Inv"> Entradas </td>
                        <td class="Salidas-Inv"> Salidas </td>
                        <td class="Stock-Inv"> Stock </td>
                    </tr>

                    <!-- Ítems -->
                    <tr>
                        <td> 1 </td>
                        <td> 001 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> 002 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> 003 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 4 </td>
                        <td> 004 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 5 </td>
                        <td> 005 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 6 </td>
                        <td> 006 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 7 </td>
                        <td> 007 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 8 </td>
                        <td> 008 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 9 </td>
                        <td> 009 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 10 </td>
                        <td> 010 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                </table>

                <!-- Entradas y Salidas de Inventarios -->
                    <!-- Entradas -->
                        <!-- Título de Entradas -->
                        <div class="titulo_entradas">
                            <h2>Entradas</h2>
                        </div>

                        <!-- Tabla de Entradas -->
                        <table class="tab_entradas">
                            <!-- Caraterísticas -->
                            <tr class="caract_productos">
                                <td class="Num_Factura-Inv"> N° Factura </td>
                                <td class="Fecha-Inv"> Fecha </td>
                                <td class="Codigo-Inv"> Código </td>
                                <td class="Nombre-Inv"> Nombre producto </td>
                                <td class="Cantidad-Inv"> Cantidad </td>
                            </tr>
        
                            <!-- Ítems -->
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>001</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>002</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>003</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>004</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>005</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>006</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>007</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>008</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>009</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>010</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                    </table>

                    <!-- Salidas -->
                        <!-- Título de Salidas -->
                        <div class="titulo_salidas">
                            <h2>Salidas</h2>
                        </div>

                        <!-- Tabla de Salidas -->
                        <table class="tab_salidas">
                            <!-- Caraterísticas -->
                            <tr class="caract_productos">
                                <td class="Num_Factura-Inv"> N° Factura </td>
                                <td class="Fecha-Inv"> Fecha </td>
                                <td class="Codigo-Inv"> Código </td>
                                <td class="Nombre-Inv"> Nombre producto </td>
                                <td class="Cantidad-Inv"> Cantidad </td>
                            </tr>
        
                            <!-- Ítems -->
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>001</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>002</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>003</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>004</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>005</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>006</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>007</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>008</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>009</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>010</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                        </table>

                <!-- Botones Opciones Cambios -->
                    <!-- Botón: Cancelar -->  
                    <button class="cancelar">
                        <a href="administracion_financiera.html"><h3> Cancelar </h3></a>
                    </button>
                    
                    <!-- Botón: Guardar Cambios -->   
                    <button class="guardar_cambios">
                        <a href="administracion_financiera.html"><h3> Guardar Cambios </h3></a>
                    </button> 
            </div>

            <!--Mes: Mayo -->
            <div id="contenido-Mayo-Inv" style="display: none;">
                <!-- Título de mes -->
                <div class="titulo_productos">
                    <h2>Productos</h2>
                </div>

                <!-- <div>: Ordenar por: -->
                <div class="ordenar_por">
                    <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                </div>
            
                <!-- Barra de búsqueda de producto -->
                <div class="barra_busqueda">
                    <input type="text" placeholder= "Buscar Producto">
                </div> 

                <!-- Opciones de productos -->
                <div class="opciones_productos">
                    <!-- Añadir Producto -->
                    <button class="bott-añadir_producto">
                        <!-- Icono Plus -->
                        <a href="añadir_producto.html"><img src="assets/img/Icono_añadir.png"></a>

                        <!-- Texto Añadir Producto -->
                        <a href="añadir_producto.html"><h3> Añadir Producto </h3></a>
                    </button>

                    <!-- Editar Producto -->
                    <button class="bott-editar_producto">
                        <!-- Icono Plus -->
                        <a href="editar_producto.html"><img src="assets/img/Icono_editar.png"></a>

                        <!-- Texto Editar Producto -->
                        <a href="editar_producto.html"><h3> Editar Producto </h3></a>
                    </button>

                    <!-- Eliminar Producto -->
                    <button class="bott-eliminar_producto">
                        <!-- Icono Plus -->
                        <a href="eliminar_producto.html"><img src="assets/img/Icono_eliminar.png"></a>

                        <!-- Texto Eliminar Producto -->
                        <a href="eliminar_producto.html"><h3> Eliminar Producto </h3></a>
                    </button>
                </div>

                <!-- Productos Tabla <table> -->
                <table class="tab_productos">
                    <!-- Caraterísticas -->
                    <tr class="caract_productos">
                        <td class="Num_producto-Inv"> #Producto </td>
                        <td class="Codigo-Inv"> Código </td>
                        <td class="Nombre-Inv"> Nombre Producto </td>
                        <td class="Existencias_iniciales-Inv"> Existencias Iniciales </td>
                        <td class="Entradas-Inv"> Entradas </td>
                        <td class="Salidas-Inv"> Salidas </td>
                        <td class="Stock-Inv"> Stock </td>
                    </tr>

                    <!-- Ítems -->
                    <tr>
                        <td> 1 </td>
                        <td> 001 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> 002 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> 003 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 4 </td>
                        <td> 004 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 5 </td>
                        <td> 005 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 6 </td>
                        <td> 006 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 7 </td>
                        <td> 007 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 8 </td>
                        <td> 008 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 9 </td>
                        <td> 009 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 10 </td>
                        <td> 010 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                </table>

                <!-- Entradas y Salidas de Inventarios -->
                    <!-- Entradas -->
                        <!-- Título de Entradas -->
                        <div class="titulo_entradas">
                            <h2>Entradas</h2>
                        </div>

                        <!-- Tabla de Entradas -->
                        <table class="tab_entradas">
                            <!-- Caraterísticas -->
                            <tr class="caract_productos">
                                <td class="Num_Factura-Inv"> N° Factura </td>
                                <td class="Fecha-Inv"> Fecha </td>
                                <td class="Codigo-Inv"> Código </td>
                                <td class="Nombre-Inv"> Nombre producto </td>
                                <td class="Cantidad-Inv"> Cantidad </td>
                            </tr>
        
                            <!-- Ítems -->
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>001</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>002</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>003</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>004</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>005</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>006</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>007</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>008</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>009</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>010</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                    </table>

                    <!-- Salidas -->
                        <!-- Título de Salidas -->
                        <div class="titulo_salidas">
                            <h2>Salidas</h2>
                        </div>

                        <!-- Tabla de Salidas -->
                        <table class="tab_salidas">
                            <!-- Caraterísticas -->
                            <tr class="caract_productos">
                                <td class="Num_Factura-Inv"> N° Factura </td>
                                <td class="Fecha-Inv"> Fecha </td>
                                <td class="Codigo-Inv"> Código </td>
                                <td class="Nombre-Inv"> Nombre producto </td>
                                <td class="Cantidad-Inv"> Cantidad </td>
                            </tr>
        
                            <!-- Ítems -->
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>001</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>002</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>003</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>004</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>005</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>006</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>007</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>008</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>009</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>010</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                        </table>

                <!-- Botones Opciones Cambios -->
                    <!-- Botón: Cancelar -->  
                    <button class="cancelar">
                        <a href="administracion_financiera.html"><h3> Cancelar </h3></a>
                    </button>
                    
                    <!-- Botón: Guardar Cambios -->   
                    <button class="guardar_cambios">
                        <a href="administracion_financiera.html"><h3> Guardar Cambios </h3></a>
                    </button> 
            </div>

            <!--Mes: Junio -->
            <div id="contenido-Junio-Inv" style="display: none;">
                <!-- Título de mes -->
                <div class="titulo_productos">
                    <h2>Productos</h2>
                </div>

                <!-- <div>: Ordenar por: -->
                <div class="ordenar_por">
                    <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                </div>
            
                <!-- Barra de búsqueda de producto -->
                <div class="barra_busqueda">
                    <input type="text" placeholder= "Buscar Producto">
                </div> 

                <!-- Opciones de productos -->
                <div class="opciones_productos">
                    <!-- Añadir Producto -->
                    <button class="bott-añadir_producto">
                        <!-- Icono Plus -->
                        <a href="añadir_producto.html"><img src="assets/img/Icono_añadir.png"></a>

                        <!-- Texto Añadir Producto -->
                        <a href="añadir_producto.html"><h3> Añadir Producto </h3></a>
                    </button>

                    <!-- Editar Producto -->
                    <button class="bott-editar_producto">
                        <!-- Icono Plus -->
                        <a href="editar_producto.html"><img src="assets/img/Icono_editar.png"></a>

                        <!-- Texto Editar Producto -->
                        <a href="editar_producto.html"><h3> Editar Producto </h3></a>
                    </button>

                    <!-- Eliminar Producto -->
                    <button class="bott-eliminar_producto">
                        <!-- Icono Plus -->
                        <a href="eliminar_producto.html"><img src="assets/img/Icono_eliminar.png"></a>

                        <!-- Texto Eliminar Producto -->
                        <a href="eliminar_producto.html"><h3> Eliminar Producto </h3></a>
                    </button>
                </div>

                <!-- Productos Tabla <table> -->
                <table class="tab_productos">
                    <!-- Caraterísticas -->
                    <tr class="caract_productos">
                        <td class="Num_producto-Inv"> #Producto </td>
                        <td class="Codigo-Inv"> Código </td>
                        <td class="Nombre-Inv"> Nombre Producto </td>
                        <td class="Existencias_iniciales-Inv"> Existencias Iniciales </td>
                        <td class="Entradas-Inv"> Entradas </td>
                        <td class="Salidas-Inv"> Salidas </td>
                        <td class="Stock-Inv"> Stock </td>
                    </tr>

                    <!-- Ítems -->
                    <tr>
                        <td> 1 </td>
                        <td> 001 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> 002 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> 003 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 4 </td>
                        <td> 004 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 5 </td>
                        <td> 005 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 6 </td>
                        <td> 006 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 7 </td>
                        <td> 007 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 8 </td>
                        <td> 008 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 9 </td>
                        <td> 009 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 10 </td>
                        <td> 010 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                </table>

                <!-- Entradas y Salidas de Inventarios -->
                    <!-- Entradas -->
                        <!-- Título de Entradas -->
                        <div class="titulo_entradas">
                            <h2>Entradas</h2>
                        </div>

                        <!-- Tabla de Entradas -->
                        <table class="tab_entradas">
                            <!-- Caraterísticas -->
                            <tr class="caract_productos">
                                <td class="Num_Factura-Inv"> N° Factura </td>
                                <td class="Fecha-Inv"> Fecha </td>
                                <td class="Codigo-Inv"> Código </td>
                                <td class="Nombre-Inv"> Nombre producto </td>
                                <td class="Cantidad-Inv"> Cantidad </td>
                            </tr>
        
                            <!-- Ítems -->
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>001</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>002</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>003</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>004</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>005</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>006</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>007</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>008</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>009</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>010</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                    </table>

                    <!-- Salidas -->
                        <!-- Título de Salidas -->
                        <div class="titulo_salidas">
                            <h2>Salidas</h2>
                        </div>

                        <!-- Tabla de Salidas -->
                        <table class="tab_salidas">
                            <!-- Caraterísticas -->
                            <tr class="caract_productos">
                                <td class="Num_Factura-Inv"> N° Factura </td>
                                <td class="Fecha-Inv"> Fecha </td>
                                <td class="Codigo-Inv"> Código </td>
                                <td class="Nombre-Inv"> Nombre producto </td>
                                <td class="Cantidad-Inv"> Cantidad </td>
                            </tr>
        
                            <!-- Ítems -->
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>001</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>002</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>003</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>004</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>005</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>006</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>007</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>008</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>009</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>010</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                        </table>

                <!-- Botones Opciones Cambios -->
                    <!-- Botón: Cancelar -->  
                    <button class="cancelar">
                        <a href="administracion_financiera.html"><h3> Cancelar </h3></a>
                    </button>
                    
                    <!-- Botón: Guardar Cambios -->   
                    <button class="guardar_cambios">
                        <a href="administracion_financiera.html"><h3> Guardar Cambios </h3></a>
                    </button> 
            </div>

            <!--Mes: Julio -->
            <div id="contenido-Julio-Inv" style="display: none;">
                <!-- Título de mes -->
                <div class="titulo_productos">
                    <h2>Productos</h2>
                </div>

                <!-- <div>: Ordenar por: -->
                <div class="ordenar_por">
                    <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                </div>
            
                <!-- Barra de búsqueda de producto -->
                <div class="barra_busqueda">
                    <input type="text" placeholder= "Buscar Producto">
                </div> 

                <!-- Opciones de productos -->
                <div class="opciones_productos">
                    <!-- Añadir Producto -->
                    <button class="bott-añadir_producto">
                        <!-- Icono Plus -->
                        <a href="añadir_producto.html"><img src="assets/img/Icono_añadir.png"></a>

                        <!-- Texto Añadir Producto -->
                        <a href="añadir_producto.html"><h3> Añadir Producto </h3></a>
                    </button>

                    <!-- Editar Producto -->
                    <button class="bott-editar_producto">
                        <!-- Icono Plus -->
                        <a href="editar_producto.html"><img src="assets/img/Icono_editar.png"></a>

                        <!-- Texto Editar Producto -->
                        <a href="editar_producto.html"><h3> Editar Producto </h3></a>
                    </button>

                    <!-- Eliminar Producto -->
                    <button class="bott-eliminar_producto">
                        <!-- Icono Plus -->
                        <a href="eliminar_producto.html"><img src="assets/img/Icono_eliminar.png"></a>

                        <!-- Texto Eliminar Producto -->
                        <a href="eliminar_producto.html"><h3> Eliminar Producto </h3></a>
                    </button>
                </div>

                <!-- Productos Tabla <table> -->
                <table class="tab_productos">
                    <!-- Caraterísticas -->
                    <tr class="caract_productos">
                        <td class="Num_producto-Inv"> #Producto </td>
                        <td class="Codigo-Inv"> Código </td>
                        <td class="Nombre-Inv"> Nombre Producto </td>
                        <td class="Existencias_iniciales-Inv"> Existencias Iniciales </td>
                        <td class="Entradas-Inv"> Entradas </td>
                        <td class="Salidas-Inv"> Salidas </td>
                        <td class="Stock-Inv"> Stock </td>
                    </tr>

                    <!-- Ítems -->
                    <tr>
                        <td> 1 </td>
                        <td> 001 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> 002 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> 003 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 4 </td>
                        <td> 004 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 5 </td>
                        <td> 005 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 6 </td>
                        <td> 006 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 7 </td>
                        <td> 007 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 8 </td>
                        <td> 008 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 9 </td>
                        <td> 009 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 10 </td>
                        <td> 010 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                </table>

                <!-- Entradas y Salidas de Inventarios -->
                    <!-- Entradas -->
                        <!-- Título de Entradas -->
                        <div class="titulo_entradas">
                            <h2>Entradas</h2>
                        </div>

                        <!-- Tabla de Entradas -->
                        <table class="tab_entradas">
                            <!-- Caraterísticas -->
                            <tr class="caract_productos">
                                <td class="Num_Factura-Inv"> N° Factura </td>
                                <td class="Fecha-Inv"> Fecha </td>
                                <td class="Codigo-Inv"> Código </td>
                                <td class="Nombre-Inv"> Nombre producto </td>
                                <td class="Cantidad-Inv"> Cantidad </td>
                            </tr>
        
                            <!-- Ítems -->
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>001</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>002</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>003</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>004</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>005</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>006</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>007</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>008</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>009</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>010</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                    </table>

                    <!-- Salidas -->
                        <!-- Título de Salidas -->
                        <div class="titulo_salidas">
                            <h2>Salidas</h2>
                        </div>

                        <!-- Tabla de Salidas -->
                        <table class="tab_salidas">
                            <!-- Caraterísticas -->
                            <tr class="caract_productos">
                                <td class="Num_Factura-Inv"> N° Factura </td>
                                <td class="Fecha-Inv"> Fecha </td>
                                <td class="Codigo-Inv"> Código </td>
                                <td class="Nombre-Inv"> Nombre producto </td>
                                <td class="Cantidad-Inv"> Cantidad </td>
                            </tr>
        
                            <!-- Ítems -->
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>001</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>002</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>003</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>004</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>005</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>006</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>007</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>008</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>009</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>010</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                        </table>

                <!-- Botones Opciones Cambios -->
                    <!-- Botón: Cancelar -->  
                    <button class="cancelar">
                        <a href="administracion_financiera.html"><h3> Cancelar </h3></a>
                    </button>
                    
                    <!-- Botón: Guardar Cambios -->   
                    <button class="guardar_cambios">
                        <a href="administracion_financiera.html"><h3> Guardar Cambios </h3></a>
                    </button> 
            </div>

            <!--Mes: Agosto-->
            <div id="contenido-Agosto-Inv" style="display: none;">
                <!-- Título de mes -->
                <div class="titulo_productos">
                    <h2>Productos</h2>
                </div>

                <!-- <div>: Ordenar por: -->
                <div class="ordenar_por">
                    <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                </div>
            
                <!-- Barra de búsqueda de producto -->
                <div class="barra_busqueda">
                    <input type="text" placeholder= "Buscar Producto">
                </div> 

                <!-- Opciones de productos -->
                <div class="opciones_productos">
                    <!-- Añadir Producto -->
                    <button class="bott-añadir_producto">
                        <!-- Icono Plus -->
                        <a href="añadir_producto.html"><img src="assets/img/Icono_añadir.png"></a>

                        <!-- Texto Añadir Producto -->
                        <a href="añadir_producto.html"><h3> Añadir Producto </h3></a>
                    </button>

                    <!-- Editar Producto -->
                    <button class="bott-editar_producto">
                        <!-- Icono Plus -->
                        <a href="editar_producto.html"><img src="assets/img/Icono_editar.png"></a>

                        <!-- Texto Editar Producto -->
                        <a href="editar_producto.html"><h3> Editar Producto </h3></a>
                    </button>

                    <!-- Eliminar Producto -->
                    <button class="bott-eliminar_producto">
                        <!-- Icono Plus -->
                        <a href="eliminar_producto.html"><img src="assets/img/Icono_eliminar.png"></a>

                        <!-- Texto Eliminar Producto -->
                        <a href="eliminar_producto.html"><h3> Eliminar Producto </h3></a>
                    </button>
                </div>

                <!-- Productos Tabla <table> -->
                <table class="tab_productos">
                    <!-- Caraterísticas -->
                    <tr class="caract_productos">
                        <td class="Num_producto-Inv"> #Producto </td>
                        <td class="Codigo-Inv"> Código </td>
                        <td class="Nombre-Inv"> Nombre Producto </td>
                        <td class="Existencias_iniciales-Inv"> Existencias Iniciales </td>
                        <td class="Entradas-Inv"> Entradas </td>
                        <td class="Salidas-Inv"> Salidas </td>
                        <td class="Stock-Inv"> Stock </td>
                    </tr>

                    <!-- Ítems -->
                    <tr>
                        <td> 1 </td>
                        <td> 001 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> 002 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> 003 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 4 </td>
                        <td> 004 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 5 </td>
                        <td> 005 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 6 </td>
                        <td> 006 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 7 </td>
                        <td> 007 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 8 </td>
                        <td> 008 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 9 </td>
                        <td> 009 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 10 </td>
                        <td> 010 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                </table>

                <!-- Entradas y Salidas de Inventarios -->
                    <!-- Entradas -->
                        <!-- Título de Entradas -->
                        <div class="titulo_entradas">
                            <h2>Entradas</h2>
                        </div>

                        <!-- Tabla de Entradas -->
                        <table class="tab_entradas">
                            <!-- Caraterísticas -->
                            <tr class="caract_productos">
                                <td class="Num_Factura-Inv"> N° Factura </td>
                                <td class="Fecha-Inv"> Fecha </td>
                                <td class="Codigo-Inv"> Código </td>
                                <td class="Nombre-Inv"> Nombre producto </td>
                                <td class="Cantidad-Inv"> Cantidad </td>
                            </tr>
        
                            <!-- Ítems -->
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>001</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>002</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>003</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>004</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>005</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>006</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>007</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>008</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>009</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>010</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                    </table>

                    <!-- Salidas -->
                        <!-- Título de Salidas -->
                        <div class="titulo_salidas">
                            <h2>Salidas</h2>
                        </div>

                        <!-- Tabla de Salidas -->
                        <table class="tab_salidas">
                            <!-- Caraterísticas -->
                            <tr class="caract_productos">
                                <td class="Num_Factura-Inv"> N° Factura </td>
                                <td class="Fecha-Inv"> Fecha </td>
                                <td class="Codigo-Inv"> Código </td>
                                <td class="Nombre-Inv"> Nombre producto </td>
                                <td class="Cantidad-Inv"> Cantidad </td>
                            </tr>
        
                            <!-- Ítems -->
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>001</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>002</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>003</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>004</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>005</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>006</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>007</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>008</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>009</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>010</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                        </table>

                <!-- Botones Opciones Cambios -->
                    <!-- Botón: Cancelar -->  
                    <button class="cancelar">
                        <a href="administracion_financiera.html"><h3> Cancelar </h3></a>
                    </button>
                    
                    <!-- Botón: Guardar Cambios -->   
                    <button class="guardar_cambios">
                        <a href="administracion_financiera.html"><h3> Guardar Cambios </h3></a>
                    </button> 
            </div>

            <!--Mes: Septiembre -->
            <div id="contenido-Septiembre-Inv" style="display: none;">
                <!-- Título de mes -->
                <div class="titulo_productos">
                    <h2>Productos</h2>
                </div>

                <!-- <div>: Ordenar por: -->
                <div class="ordenar_por">
                    <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                </div>
            
                <!-- Barra de búsqueda de producto -->
                <div class="barra_busqueda">
                    <input type="text" placeholder= "Buscar Producto">
                </div> 

                <!-- Opciones de productos -->
                <div class="opciones_productos">
                    <!-- Añadir Producto -->
                    <button class="bott-añadir_producto">
                        <!-- Icono Plus -->
                        <a href="añadir_producto.html"><img src="assets/img/Icono_añadir.png"></a>

                        <!-- Texto Añadir Producto -->
                        <a href="añadir_producto.html"><h3> Añadir Producto </h3></a>
                    </button>

                    <!-- Editar Producto -->
                    <button class="bott-editar_producto">
                        <!-- Icono Plus -->
                        <a href="editar_producto.html"><img src="assets/img/Icono_editar.png"></a>

                        <!-- Texto Editar Producto -->
                        <a href="editar_producto.html"><h3> Editar Producto </h3></a>
                    </button>

                    <!-- Eliminar Producto -->
                    <button class="bott-eliminar_producto">
                        <!-- Icono Plus -->
                        <a href="eliminar_producto.html"><img src="assets/img/Icono_eliminar.png"></a>

                        <!-- Texto Eliminar Producto -->
                        <a href="eliminar_producto.html"><h3> Eliminar Producto </h3></a>
                    </button>
                </div>

                <!-- Productos Tabla <table> -->
                <table class="tab_productos">
                    <!-- Caraterísticas -->
                    <tr class="caract_productos">
                        <td class="Num_producto-Inv"> #Producto </td>
                        <td class="Codigo-Inv"> Código </td>
                        <td class="Nombre-Inv"> Nombre Producto </td>
                        <td class="Existencias_iniciales-Inv"> Existencias Iniciales </td>
                        <td class="Entradas-Inv"> Entradas </td>
                        <td class="Salidas-Inv"> Salidas </td>
                        <td class="Stock-Inv"> Stock </td>
                    </tr>

                    <!-- Ítems -->
                    <tr>
                        <td> 1 </td>
                        <td> 001 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> 002 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> 003 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 4 </td>
                        <td> 004 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 5 </td>
                        <td> 005 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 6 </td>
                        <td> 006 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 7 </td>
                        <td> 007 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 8 </td>
                        <td> 008 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 9 </td>
                        <td> 009 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 10 </td>
                        <td> 010 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                </table>

                <!-- Entradas y Salidas de Inventarios -->
                    <!-- Entradas -->
                        <!-- Título de Entradas -->
                        <div class="titulo_entradas">
                            <h2>Entradas</h2>
                        </div>

                        <!-- Tabla de Entradas -->
                        <table class="tab_entradas">
                            <!-- Caraterísticas -->
                            <tr class="caract_productos">
                                <td class="Num_Factura-Inv"> N° Factura </td>
                                <td class="Fecha-Inv"> Fecha </td>
                                <td class="Codigo-Inv"> Código </td>
                                <td class="Nombre-Inv"> Nombre producto </td>
                                <td class="Cantidad-Inv"> Cantidad </td>
                            </tr>
        
                            <!-- Ítems -->
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>001</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>002</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>003</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>004</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>005</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>006</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>007</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>008</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>009</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>010</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                    </table>

                    <!-- Salidas -->
                        <!-- Título de Salidas -->
                        <div class="titulo_salidas">
                            <h2>Salidas</h2>
                        </div>

                        <!-- Tabla de Salidas -->
                        <table class="tab_salidas">
                            <!-- Caraterísticas -->
                            <tr class="caract_productos">
                                <td class="Num_Factura-Inv"> N° Factura </td>
                                <td class="Fecha-Inv"> Fecha </td>
                                <td class="Codigo-Inv"> Código </td>
                                <td class="Nombre-Inv"> Nombre producto </td>
                                <td class="Cantidad-Inv"> Cantidad </td>
                            </tr>
        
                            <!-- Ítems -->
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>001</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>002</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>003</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>004</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>005</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>006</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>007</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>008</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>009</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>010</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                        </table>

                <!-- Botones Opciones Cambios -->
                    <!-- Botón: Cancelar -->  
                    <button class="cancelar">
                        <a href="administracion_financiera.html"><h3> Cancelar </h3></a>
                    </button>
                    
                    <!-- Botón: Guardar Cambios -->   
                    <button class="guardar_cambios">
                        <a href="administracion_financiera.html"><h3> Guardar Cambios </h3></a>
                    </button> 
            </div>

            <!--Mes: Octubre -->
            <div id="contenido-Octubre-Inv" style="display: none;">
                <!-- Título de mes -->
                <div class="titulo_productos">
                    <h2>Productos</h2>
                </div>

                <!-- <div>: Ordenar por: -->
                <div class="ordenar_por">
                    <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                </div>
            
                <!-- Barra de búsqueda de producto -->
                <div class="barra_busqueda">
                    <input type="text" placeholder= "Buscar Producto">
                </div> 

                <!-- Opciones de productos -->
                <div class="opciones_productos">
                    <!-- Añadir Producto -->
                    <button class="bott-añadir_producto">
                        <!-- Icono Plus -->
                        <a href="añadir_producto.html"><img src="assets/img/Icono_añadir.png"></a>

                        <!-- Texto Añadir Producto -->
                        <a href="añadir_producto.html"><h3> Añadir Producto </h3></a>
                    </button>

                    <!-- Editar Producto -->
                    <button class="bott-editar_producto">
                        <!-- Icono Plus -->
                        <a href="editar_producto.html"><img src="assets/img/Icono_editar.png"></a>

                        <!-- Texto Editar Producto -->
                        <a href="editar_producto.html"><h3> Editar Producto </h3></a>
                    </button>

                    <!-- Eliminar Producto -->
                    <button class="bott-eliminar_producto">
                        <!-- Icono Plus -->
                        <a href="eliminar_producto.html"><img src="assets/img/Icono_eliminar.png"></a>

                        <!-- Texto Eliminar Producto -->
                        <a href="eliminar_producto.html"><h3> Eliminar Producto </h3></a>
                    </button>
                </div>

                <!-- Productos Tabla <table> -->
                <table class="tab_productos">
                    <!-- Caraterísticas -->
                    <tr class="caract_productos">
                        <td class="Num_producto-Inv"> #Producto </td>
                        <td class="Codigo-Inv"> Código </td>
                        <td class="Nombre-Inv"> Nombre Producto </td>
                        <td class="Existencias_iniciales-Inv"> Existencias Iniciales </td>
                        <td class="Entradas-Inv"> Entradas </td>
                        <td class="Salidas-Inv"> Salidas </td>
                        <td class="Stock-Inv"> Stock </td>
                    </tr>

                    <!-- Ítems -->
                    <tr>
                        <td> 1 </td>
                        <td> 001 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> 002 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> 003 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 4 </td>
                        <td> 004 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 5 </td>
                        <td> 005 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 6 </td>
                        <td> 006 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 7 </td>
                        <td> 007 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 8 </td>
                        <td> 008 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 9 </td>
                        <td> 009 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 10 </td>
                        <td> 010 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                </table>

                <!-- Entradas y Salidas de Inventarios -->
                    <!-- Entradas -->
                        <!-- Título de Entradas -->
                        <div class="titulo_entradas">
                            <h2>Entradas</h2>
                        </div>

                        <!-- Tabla de Entradas -->
                        <table class="tab_entradas">
                            <!-- Caraterísticas -->
                            <tr class="caract_productos">
                                <td class="Num_Factura-Inv"> N° Factura </td>
                                <td class="Fecha-Inv"> Fecha </td>
                                <td class="Codigo-Inv"> Código </td>
                                <td class="Nombre-Inv"> Nombre producto </td>
                                <td class="Cantidad-Inv"> Cantidad </td>
                            </tr>
        
                            <!-- Ítems -->
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>001</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>002</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>003</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>004</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>005</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>006</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>007</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>008</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>009</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>010</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                    </table>

                    <!-- Salidas -->
                        <!-- Título de Salidas -->
                        <div class="titulo_salidas">
                            <h2>Salidas</h2>
                        </div>

                        <!-- Tabla de Salidas -->
                        <table class="tab_salidas">
                            <!-- Caraterísticas -->
                            <tr class="caract_productos">
                                <td class="Num_Factura-Inv"> N° Factura </td>
                                <td class="Fecha-Inv"> Fecha </td>
                                <td class="Codigo-Inv"> Código </td>
                                <td class="Nombre-Inv"> Nombre producto </td>
                                <td class="Cantidad-Inv"> Cantidad </td>
                            </tr>
        
                            <!-- Ítems -->
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>001</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>002</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>003</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>004</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>005</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>006</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>007</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>008</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>009</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>010</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                        </table>

                <!-- Botones Opciones Cambios -->
                    <!-- Botón: Cancelar -->  
                    <button class="cancelar">
                        <a href="administracion_financiera.html"><h3> Cancelar </h3></a>
                    </button>
                    
                    <!-- Botón: Guardar Cambios -->   
                    <button class="guardar_cambios">
                        <a href="administracion_financiera.html"><h3> Guardar Cambios </h3></a>
                    </button> 
            </div>

            <!--Mes: Noviembre -->
            <div id="contenido-Noviembre-Inv" style="display: none;">
                <!-- Título de mes -->
                <div class="titulo_productos">
                    <h2>Productos</h2>
                </div>

                <!-- <div>: Ordenar por: -->
                <div class="ordenar_por">
                    <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                </div>
            
                <!-- Barra de búsqueda de producto -->
                <div class="barra_busqueda">
                    <input type="text" placeholder= "Buscar Producto">
                </div> 

                <!-- Opciones de productos -->
                <div class="opciones_productos">
                    <!-- Añadir Producto -->
                    <button class="bott-añadir_producto">
                        <!-- Icono Plus -->
                        <a href="añadir_producto.html"><img src="assets/img/Icono_añadir.png"></a>

                        <!-- Texto Añadir Producto -->
                        <a href="añadir_producto.html"><h3> Añadir Producto </h3></a>
                    </button>

                    <!-- Editar Producto -->
                    <button class="bott-editar_producto">
                        <!-- Icono Plus -->
                        <a href="editar_producto.html"><img src="assets/img/Icono_editar.png"></a>

                        <!-- Texto Editar Producto -->
                        <a href="editar_producto.html"><h3> Editar Producto </h3></a>
                    </button>

                    <!-- Eliminar Producto -->
                    <button class="bott-eliminar_producto">
                        <!-- Icono Plus -->
                        <a href="eliminar_producto.html"><img src="assets/img/Icono_eliminar.png"></a>

                        <!-- Texto Eliminar Producto -->
                        <a href="eliminar_producto.html"><h3> Eliminar Producto </h3></a>
                    </button>
                </div>

                <!-- Productos Tabla <table> -->
                <table class="tab_productos">
                    <!-- Caraterísticas -->
                    <tr class="caract_productos">
                        <td class="Num_producto-Inv"> #Producto </td>
                        <td class="Codigo-Inv"> Código </td>
                        <td class="Nombre-Inv"> Nombre Producto </td>
                        <td class="Existencias_iniciales-Inv"> Existencias Iniciales </td>
                        <td class="Entradas-Inv"> Entradas </td>
                        <td class="Salidas-Inv"> Salidas </td>
                        <td class="Stock-Inv"> Stock </td>
                    </tr>

                    <!-- Ítems -->
                    <tr>
                        <td> 1 </td>
                        <td> 001 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> 002 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> 003 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 4 </td>
                        <td> 004 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 5 </td>
                        <td> 005 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 6 </td>
                        <td> 006 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 7 </td>
                        <td> 007 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 8 </td>
                        <td> 008 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 9 </td>
                        <td> 009 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 10 </td>
                        <td> 010 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                </table>

                <!-- Entradas y Salidas de Inventarios -->
                    <!-- Entradas -->
                        <!-- Título de Entradas -->
                        <div class="titulo_entradas">
                            <h2>Entradas</h2>
                        </div>

                        <!-- Tabla de Entradas -->
                        <table class="tab_entradas">
                            <!-- Caraterísticas -->
                            <tr class="caract_productos">
                                <td class="Num_Factura-Inv"> N° Factura </td>
                                <td class="Fecha-Inv"> Fecha </td>
                                <td class="Codigo-Inv"> Código </td>
                                <td class="Nombre-Inv"> Nombre producto </td>
                                <td class="Cantidad-Inv"> Cantidad </td>
                            </tr>
        
                            <!-- Ítems -->
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>001</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>002</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>003</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>004</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>005</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>006</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>007</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>008</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>009</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>010</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                    </table>

                    <!-- Salidas -->
                        <!-- Título de Salidas -->
                        <div class="titulo_salidas">
                            <h2>Salidas</h2>
                        </div>

                        <!-- Tabla de Salidas -->
                        <table class="tab_salidas">
                            <!-- Caraterísticas -->
                            <tr class="caract_productos">
                                <td class="Num_Factura-Inv"> N° Factura </td>
                                <td class="Fecha-Inv"> Fecha </td>
                                <td class="Codigo-Inv"> Código </td>
                                <td class="Nombre-Inv"> Nombre producto </td>
                                <td class="Cantidad-Inv"> Cantidad </td>
                            </tr>
        
                            <!-- Ítems -->
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>001</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>002</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>003</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>004</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>005</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>006</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>007</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>008</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>009</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>010</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                        </table>

                <!-- Botones Opciones Cambios -->
                    <!-- Botón: Cancelar -->  
                    <button class="cancelar">
                        <a href="administracion_financiera.html"><h3> Cancelar </h3></a>
                    </button>
                    
                    <!-- Botón: Guardar Cambios -->   
                    <button class="guardar_cambios">
                        <a href="administracion_financiera.html"><h3> Guardar Cambios </h3></a>
                    </button> 
            </div>

            <!--Mes: Diciembre -->
            <div id="contenido-Diciembre-Inv" style="display: none;">
                <!-- Título de mes -->
                <div class="titulo_productos">
                    <h2>Productos</h2>
                </div>

                <!-- <div>: Ordenar por: -->
                <div class="ordenar_por">
                    <h2> Ordenar por: (Fecha, A-Z, Precio)</h2>
                </div>
            
                <!-- Barra de búsqueda de producto -->
                <div class="barra_busqueda">
                    <input type="text" placeholder= "Buscar Producto">
                </div> 

                <!-- Opciones de productos -->
                <div class="opciones_productos">
                    <!-- Añadir Producto -->
                    <button class="bott-añadir_producto">
                        <!-- Icono Plus -->
                        <a href="añadir_producto.html"><img src="assets/img/Icono_añadir.png"></a>

                        <!-- Texto Añadir Producto -->
                        <a href="añadir_producto.html"><h3> Añadir Producto </h3></a>
                    </button>

                    <!-- Editar Producto -->
                    <button class="bott-editar_producto">
                        <!-- Icono Plus -->
                        <a href="editar_producto.html"><img src="assets/img/Icono_editar.png"></a>

                        <!-- Texto Editar Producto -->
                        <a href="editar_producto.html"><h3> Editar Producto </h3></a>
                    </button>

                    <!-- Eliminar Producto -->
                    <button class="bott-eliminar_producto">
                        <!-- Icono Plus -->
                        <a href="eliminar_producto.html"><img src="assets/img/Icono_eliminar.png"></a>

                        <!-- Texto Eliminar Producto -->
                        <a href="eliminar_producto.html"><h3> Eliminar Producto </h3></a>
                    </button>
                </div>

                <!-- Productos Tabla <table> -->
                <table class="tab_productos">
                    <!-- Caraterísticas -->
                    <tr class="caract_productos">
                        <td class="Num_producto-Inv"> #Producto </td>
                        <td class="Codigo-Inv"> Código </td>
                        <td class="Nombre-Inv"> Nombre Producto </td>
                        <td class="Existencias_iniciales-Inv"> Existencias Iniciales </td>
                        <td class="Entradas-Inv"> Entradas </td>
                        <td class="Salidas-Inv"> Salidas </td>
                        <td class="Stock-Inv"> Stock </td>
                    </tr>

                    <!-- Ítems -->
                    <tr>
                        <td> 1 </td>
                        <td> 001 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> 002 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> 003 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 4 </td>
                        <td> 004 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 5 </td>
                        <td> 005 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 6 </td>
                        <td> 006 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 7 </td>
                        <td> 007 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 8 </td>
                        <td> 008 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 9 </td>
                        <td> 009 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                    <tr>
                        <td> 10 </td>
                        <td> 010 </td>
                        <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                        <td><input type="number" placeholder="#" id="existencias_iniciales"></td>
                        <td><input type="number" placeholder="#" id="entradas"></td>
                        <td><input type="number" placeholder="#" id="salidas"></td>
                        <td><input type="number" placeholder="#" id="stock"></td>
                    </tr>
                </table>

                <!-- Entradas y Salidas de Inventarios -->
                    <!-- Entradas -->
                        <!-- Título de Entradas -->
                        <div class="titulo_entradas">
                            <h2>Entradas</h2>
                        </div>

                        <!-- Tabla de Entradas -->
                        <table class="tab_entradas">
                            <!-- Caraterísticas -->
                            <tr class="caract_productos">
                                <td class="Num_Factura-Inv"> N° Factura </td>
                                <td class="Fecha-Inv"> Fecha </td>
                                <td class="Codigo-Inv"> Código </td>
                                <td class="Nombre-Inv"> Nombre producto </td>
                                <td class="Cantidad-Inv"> Cantidad </td>
                            </tr>
        
                            <!-- Ítems -->
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>001</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>002</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>003</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>004</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>005</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>006</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>007</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>008</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>009</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>010</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                    </table>

                    <!-- Salidas -->
                        <!-- Título de Salidas -->
                        <div class="titulo_salidas">
                            <h2>Salidas</h2>
                        </div>

                        <!-- Tabla de Salidas -->
                        <table class="tab_salidas">
                            <!-- Caraterísticas -->
                            <tr class="caract_productos">
                                <td class="Num_Factura-Inv"> N° Factura </td>
                                <td class="Fecha-Inv"> Fecha </td>
                                <td class="Codigo-Inv"> Código </td>
                                <td class="Nombre-Inv"> Nombre producto </td>
                                <td class="Cantidad-Inv"> Cantidad </td>
                            </tr>
        
                            <!-- Ítems -->
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>001</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>002</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>003</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>004</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>005</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>006</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>007</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>008</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>009</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="#" id="num_factura"></td>
                                <td><input type="date" placeholder="Fecha" id="fecha_entrada"></td>
                                <td>010</td>
                                <td><input type="text" placeholder="Nombre de Producto" id="nombre_producto"></td>
                                <td><input type="number" placeholder="#" id="cantidad_entrada"></td>
                            </tr>
                        </table>

                <!-- Botones Opciones Cambios -->
                    <!-- Botón: Cancelar -->  
                    <button class="cancelar">
                        <a href="administracion_financiera.html"><h3> Cancelar </h3></a>
                    </button>
                    
                    <!-- Botón: Guardar Cambios -->   
                    <button class="guardar_cambios">
                        <a href="administracion_financiera.html"><h3> Guardar Cambios </h3></a>
                    </button> 
            </div>
        </div>
    </div>
</body>
</body>
</main>