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
        var contadorFilas = 1;

        //Función
        function añadirFilaProductos(){
            var tabla = document.getElementById("tabla-productos");
            tabla.className = "tabla-productos";
            var fila = tabla.insertRow(tabla.rows.length - 1);
            fila.className = "filas-datos";
        
            // Número de Fila
            var numeroFila = fila.insertCell(0);
            numeroFila.innerHTML = contadorFilas++;
            numeroFila.className = "num-prod-dato";
        
            // Código Producto
            var colCodigoProductoInput = fila.insertCell(1);
            colCodigoProductoInput.innerHTML = "<td><input type='text' placeholder='#001' id='cod-prod-input'></td>"; 
            colCodigoProductoInput.className = "cod-prod-dato";

            // Nombre Producto
            var colNombreProducto = fila.insertCell(2);
            colNombreProducto.innerHTML = "<td><input type='text' placeholder='Nombre Producto' id='nombre-prod-input'></td>";
            colNombreProducto.className = "nombre-prod-dato";
        
            // Existencias Producto
            var colExistenciasProducto = fila.insertCell(3);
            colExistenciasProducto.innerHTML = "<td><input type='number' placeholder='#' id='existencias-prod-input'></td>";
            colExistenciasProducto.className = "existencias-prod-dato";
    
            // Entradas Producto
            var colEntradasProducto = fila.insertCell(4);
            colEntradasProducto.innerHTML = "<td><input type='number' placeholder='#' id='entradas-prod-input'></td>"; 
            colEntradasProducto.className = "entradas-prod-dato";

            // Salidas Producto
            var colSalidasProducto = fila.insertCell(5);
            colSalidasProducto.innerHTML = "<td><input type='number' placeholder='#' id='salidas-prod-input'></td>";
            colSalidasProducto.className = "salidas-prod-dato";

            // Stock Producto
            var colStockProducto = fila.insertCell(6);
            colStockProducto.innerHTML = "<td><input type='number' placeholder='#' id='stock-prod-input'></td>";
            colStockProducto.className = "stock-prod-dato";

            // Icono eliminar
            var accion = fila.insertCell(7);
            var botonEliminar = document.createElement("button");
            botonEliminar.innerHTML = "<button><img src='../../../assets/img/icono-eliminar-rojo.png'></button>";
            botonEliminar.className = "eliminar-fila";

            botonEliminar.onclick = function() {
                eliminarFilaProductos(this);
            };
            accion.appendChild(botonEliminar);
        }

        // Eliminar Fila
        function eliminarFilaProductos(boton) {
            var fila = boton.parentNode.parentNode;
            fila.parentNode.removeChild(fila);
        }
  
    // Filas Tabla Entradas

    // Filas Tabla Salidasm

// Alerta: Cambios Guardados
function GuardarCambios(){
    alert("Los cambios han sido guardados");
}