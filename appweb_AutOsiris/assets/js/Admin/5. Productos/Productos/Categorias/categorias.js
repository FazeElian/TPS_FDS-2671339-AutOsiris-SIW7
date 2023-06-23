// Añadir Fila
function añadirFilaCategorias() {
    var tablaCategorias = document.getElementById("tabla-categorias");
    var filasDatos = tablaCategorias.insertRow(tablaCategorias.rows.length - 1);
    
    // TR de Filas datos
    filasDatos.className = "filas-datos";
    
    var nombreCategoria = filasDatos.insertCell(0);
    nombreCategoria.className = "nombre-categoria-dato";
    nombreCategoria.innerHTML = "<td class='nombre-categoria-dato item-fila'><input type='text' name='NCategoriaNombreProducto' id='NCategoriaNombreProducto' placeholder='Escribe aquí nombre de Nueva Categoría'></td>";

    var cantidadProductos = filasDatos.insertCell(1);
    cantidadProductos.className = "cantidad-prod-dato";
    cantidadProductos.innerHTML = "<td class='cantidad-prod-dato item-fila'><input type='number' name='NCategoriaCantidadProductos' id='NCategoriaCantidadProductos' placeholder='#'></td>";

    var opcionesCategoria = filasDatos.insertCell(2);
    opcionesCategoria.className = "opciones-categoria-dato";
    opcionesCategoria.innerHTML = "<td class='opciones-categoria-dato item-fila'><button class='editar-cat'><h2>Editar</h2><img src='assets/img/editar-icono.png'></button><button class='eliminar-cat' onclick='CategoriaEliminada()'><h2>Eliminar</h2><img src='assets/img/eliminar-icono.png'></button></td>";
}

function CategoriaEliminada(){
    alert("La categoría ha sido eliminada");
}

function GuardarCambios(){
    alert("Los cambios han sido guardados");
}