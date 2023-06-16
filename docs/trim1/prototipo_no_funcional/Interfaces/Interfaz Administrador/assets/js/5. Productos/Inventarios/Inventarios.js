// Seleccionar mes
document.addEventListener("DOMContentLoaded", function seleccionarMes() {
    // Espera a que el DOM esté completamente cargado antes de continuar
    // Agrega un evento change al elemento select con el id "opciones"
    document.getElementById("seleccionar-mes").addEventListener("change", function() {
        // Obtiene el valor de la opción seleccionada en el select con el id "seleccionar-mes"
        var opcionSeleccionada = document.getElementById("seleccionar-mes").value;
        // Evalúa el valor de la opción seleccionada y muestra u oculta los div correspondientes
        if (opcionSeleccionada == "Enero") {
            document.getElementById("contenido-Enero").style.display = "flex";

        } else if (opcionSeleccionada == "Febrero") {
            document.getElementById("contenido-Febrero").style.display = "flex";

        } else if (opcionSeleccionada == "Marzo") {
            document.getElementById("contenido-Marzo").style.display = "flex";

        } else if (opcionSeleccionada == "Abril") {
            document.getElementById("contenido-Abril").style.display = "flex";

        } else if (opcionSeleccionada == "Mayo") {
            document.getElementById("contenido-Mayo").style.display = "flex";

        } else if (opcionSeleccionada == "Junio") {
            document.getElementById("contenido-Junio").style.display = "flex";

        } else if (opcionSeleccionada == "Julio") {
            document.getElementById("contenido-Julio").style.display = "flex";

        } else if (opcionSeleccionada == "Agosto") {
            document.getElementById("contenido-Agosto").style.display = "flex";

        } else if (opcionSeleccionada == "Septiembre") {
            document.getElementById("contenido-Septiembre").style.display = "flex";

        } else if (opcionSeleccionada == "Octubre") {
            document.getElementById("contenido-Octubre").style.display = "flex";

        } else if (opcionSeleccionada == "Noviembre") {
            document.getElementById("contenido-Noviembre").style.display = "flex";

        } else if (opcionSeleccionada == "Diciembre") {
            document.getElementById("contenido-Diciembre").style.display = "flex";

        } else if (opcionSeleccionada =="cont-bott-limpiar") {
            document.getElementById("selecciona-una-opcion").style.display = "flex";
        } 
    });
});

//Filas Tablas
    // Filas Tabla Productos
        // Añadir Fila
        var contadorFilasProductos = 1;

        function añadirFilaProductos() {
            var tablaProductos = document.getElementById("tabla-productos");
            var filasDatos = tablaProductos.insertRow(tablaProductos.rows.length - 1);
            
            // TR de Filas datos
            filasDatos.className = "filas-datos";
            
            var numeroFila = filasDatos.insertCell(0);
            numeroFila.className = "num-prod-dato";
            numeroFila.innerHTML = contadorFilasProductos++;
            
            var codigoProducto = filasDatos.insertCell(1);
            codigoProducto.className = "cod-prod-dato";
            codigoProducto.innerHTML = "<td class='cod-prod-dato'><input type='text' placeholder='#001' id='cod-prod-input'></td>";

            var nombreProducto = filasDatos.insertCell(2);
            nombreProducto.className = "nombre-prod-dato";
            nombreProducto.innerHTML = "<td class='nombre-prod-dato'><input type='text' placeholder='Nombre Producto' id='nombre-prod-input'></td>";

            var existenciasProducto = filasDatos.insertCell(3);
            existenciasProducto.className = "existencias-prod-dato";
            existenciasProducto.innerHTML = "<td class='existencias-prod-dato'><input type='number' placeholder='#' id='existencias-prod-input'></td>";

            var entradasProducto = filasDatos.insertCell(4);
            entradasProducto.className = "entradas-prod-dato";
            entradasProducto.innerHTML = "<td class='entradas-prod-dato'><input type='number' placeholder='#' id='entradas-prod-input'></td>";

            var salidasProducto = filasDatos.insertCell(5);
            salidasProducto.className = "salidas-prod-dato";
            salidasProducto.innerHTML = "<td class='salidas-prod-dato'><input type='number' placeholder='#' id='salidas-prod-input'></td>";

            var stockProducto = filasDatos.insertCell(5);
            stockProducto.className = "stock-prod-dato";
            stockProducto.innerHTML = "<td class='stock-prod-dato'><input type='number' placeholder='#' id='stock-prod-input'></td>";

            
            var accion = filasDatos.insertCell(7);
            accion.id = "bott-eliminar-fila";
            var botonEliminar = document.createElement("button");
            botonEliminar.innerHTML = "<td class='elim-fila'><img src='../../../assets/img/icono-eliminar-rojo.png'></td>";
            botonEliminar.className = "elim-fila";
            botonEliminar.onclick = function() {
                eliminarFila(this);
            };
            
            accion.appendChild(botonEliminar);
        }
        
        // Eliminar Fila
        function eliminarFila(boton) {
            var filasDatos = boton.parentNode.parentNode;
            filasDatos.parentNode.removeChild(filasDatos);
        }
  
    // Filas Tabla Entradas
        // Añadir fila
        var contadorFilasEntradas = 1;

        function añadirFilaEntradas() {
            var tabla = document.getElementById("tabla-entradas");
            var filasDatos = tabla.insertRow(tabla.rows.length - 1);
            
            // TR de Filas datos
            filasDatos.className = "filas-datos-entradas";
            
            var numeroFila = filasDatos.insertCell(0);
            numeroFila.className = "num-prod-dato";
            numeroFila.innerHTML = contadorFilasEntradas++;
            
            var codigoProducto = filasDatos.insertCell(1);
            codigoProducto.className = "cod-prod-dato";
            codigoProducto.innerHTML = "<td class='cod-prod-dato'><input type='text' placeholder='#001' id='cod-prod-input'></td>";

            var nombreProducto = filasDatos.insertCell(2);
            nombreProducto.className = "nombre-prod-dato";
            nombreProducto.innerHTML = "<td class='nombre-prod-dato'><input type='text' placeholder='Nombre Producto' id='nombre-prod-input'></td>";

            var fechaProducto = filasDatos.insertCell(3);
            fechaProducto.className = "fecha-prod-dato";
            fechaProducto.innerHTML = "<td class='fecha-prod-dato'><input type='date' name='fecha-prod-input' id='fecha-prod-input'></td>";
            
            var numFactura = filasDatos.insertCell(4);
            numFactura.className = "num-factura-dato";
            numFactura.innerHTML = "<td class='num-factura-dato'><input type='text' name='num-factura-input' id='num-factura-input' placeholder='#001'></td>";

            var cantidadProducto = filasDatos.insertCell(5);
            cantidadProducto.className = "cantidad-prod-dato";
            cantidadProducto.innerHTML = "<td class='cantidad-prod-dato'><input type='number' name='cantidad-prod-input' id='cantidad-prod-input' placeholder='#'></td>";

            var accion = filasDatos.insertCell(6);
            accion.id = "bott-eliminar-fila";
            var botonEliminar = document.createElement("button");
            botonEliminar.innerHTML = "<td class='elim-fila'><img src='../../../assets/img/icono-eliminar-rojo.png'></td>";
            botonEliminar.className = "elim-fila";
            botonEliminar.onclick = function() {
            eliminarFilaEntradas(this);
            };
            
            accion.appendChild(botonEliminar);

        // Eliminar Fila
        function eliminarFilaEntradas(boton) {
            var filasDatos = boton.parentNode.parentNode;
            filasDatos.parentNode.removeChild(filasDatos);
          }
        }

    // Filas Tabla Salidas
        // Añadir fila
        var contadorFilasSalidas = 1;

        function añadirFilaSalidas() {
            var tabla = document.getElementById("tabla-salidas");
            var filasDatos = tabla.insertRow(tabla.rows.length - 1);
            
            // TR de Filas datos
            filasDatos.className = "filas-datos-salidas";
            
            var numeroFila = filasDatos.insertCell(0);
            numeroFila.className = "num-prod-dato";
            numeroFila.innerHTML = contadorFilasSalidas++;
            
            var codigoProducto = filasDatos.insertCell(1);
            codigoProducto.className = "cod-prod-dato";
            codigoProducto.innerHTML = "<td class='cod-prod-dato'><input type='text' placeholder='#001' id='cod-prod-input'></td>";

            var nombreProducto = filasDatos.insertCell(2);
            nombreProducto.className = "nombre-prod-dato";
            nombreProducto.innerHTML = "<td class='nombre-prod-dato'><input type='text' placeholder='Nombre Producto' id='nombre-prod-input'></td>";

            var fechaProducto = filasDatos.insertCell(3);
            fechaProducto.className = "fecha-prod-dato";
            fechaProducto.innerHTML = "<td class='fecha-prod-dato'><input type='date' name='fecha-prod-input' id='fecha-prod-input'></td>";
            
            var numFactura = filasDatos.insertCell(4);
            numFactura.className = "num-factura-dato";
            numFactura.innerHTML = "<td class='num-factura-dato'><input type='text' name='num-factura-input' id='num-factura-input' placeholder='#001'></td>";

            var cantidadProducto = filasDatos.insertCell(5);
            cantidadProducto.className = "cantidad-prod-dato";
            cantidadProducto.innerHTML = "<td class='cantidad-prod-dato'><input type='number' name='cantidad-prod-input' id='cantidad-prod-input' placeholder='#'></td>";

            var accion = filasDatos.insertCell(6);
            accion.id = "bott-eliminar-fila";
            var botonEliminar = document.createElement("button");
            botonEliminar.innerHTML = "<td class='elim-fila'><img src='../../../assets/img/icono-eliminar-rojo.png'></td>";
            botonEliminar.className = "elim-fila";
            botonEliminar.onclick = function() {
            eliminarFilasSalidas(this);
            };
            
            accion.appendChild(botonEliminar);

        // Eliminar Fila
        function eliminarFilasSalidas(boton) {
            var filasDatos = boton.parentNode.parentNode;
            filasDatos.parentNode.removeChild(filasDatos);
          }
        }

// Alerta: Cambios Guardados
function GuardarCambios(){
    alert("Los cambios han sido guardados");
}