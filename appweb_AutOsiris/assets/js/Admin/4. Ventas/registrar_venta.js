// Agregar Fila Venta
function agregarFilaVenta() {
    var tabla = document.getElementById("tabla-venta");
    var filasDatos = tabla.insertRow(tabla.rows.length - 1);
  
    // TR de Filas datos
    filasDatos.className = "fila-datos";
  
    // Nombre producto   
    var nombreProducto = filasDatos.insertCell(0);
    nombreProducto.className = "nombre-prod";
    nombreProducto.innerHTML = "<td class='nombre-prod-dato'><input type='text' name='nombre-prod-input' id='nombre-prod-input' placeholder='Escribe aquí nombre de producto'></td>";
  
    // Cantidad producto
    var cantidadProducto = filasDatos.insertCell(1);
    cantidadProducto.className = "cantidad-dato";
    cantidadProducto.innerHTML = "<td class='cantidad-dato'><input type='number' name='cantidad-prod-input' id='cantidad-prod-input' placeholder='#'></td>";
  
    // Precio unidad
    var precioUnidad = filasDatos.insertCell(2);
    precioUnidad.className = "precio-unidad-dato";
    precioUnidad.innerHTML = "<td class='precio-unidad-dato'><input type='text' name='precio-unidad-input' id='precio-unidad-input' placeholder='$'></td>";
  
    // Precio total
    var precioTotal = filasDatos.insertCell(3);
    precioTotal.className = "precio-total-dato";
    precioTotal.innerHTML = "<td class='precio-total-dato'><input type='text' name='precio-total-input' id='precio-total-input' placeholder='$$$'></td>";
  
  
    var accion = filasDatos.insertCell(4);
    accion.className = "elim-fila";
    var botonEliminar = document.createElement("button");
    botonEliminar.innerHTML = "<td class='elim-fila'><img src='assets/img/icono-eliminar-rojo.png'></td>";
    botonEliminar.onclick = function eliminarFilaVenta(boton) {
        var filasDatos = boton.parentNode.parentNode;
        filasDatos.parentNode.removeChild(filasDatos);
      };
    
    accion.appendChild(botonEliminar);
}

function ventaRegistrada(){
    alert("Venta Registrada con éxito");
}