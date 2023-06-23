// Añadir Fila
var contadorFilasRoles = 1;

function añadirFilaRol() {
    var tablaProductos = document.getElementById("tabla-roles");
    var filasDatos = tablaProductos.insertRow(tablaProductos.rows.length - 1);
    
    // TR de Filas datos
    filasDatos.className = "filas-datos";
    
    var idRol = filasDatos.insertCell(0);
    idRol.className = "id-rol-dato";
    idRol.innerHTML = contadorFilasRoles++;
    
    var nombreRol = filasDatos.insertCell(1);
    nombreRol.className = "nombre-rol-dato";
    nombreRol.innerHTML = "<td class='nombre-rol-dato item-fila'><input type='text' name='nombreRol' id='nombreRol' placeholder='Escribe aquí nombre de Nuevo Rol'></td>";

    var descripcionRol = filasDatos.insertCell(2);
    descripcionRol.className = "descripcion-rol-dato";
    descripcionRol.innerHTML = "<td class='descripcion-rol-dato item-fila'><input type='text' name='descripcionRol' id='descripcionRol' placeholder='Describe aquí Nuevo Rol'></td>";

    var accionesRol = filasDatos.insertCell(3);
    accionesRol.className = "acciones-rol-dato";
    accionesRol.innerHTML = "<td class='acciones-rol-dato item-fila'><button class='btn-editar'><a href='?c=EditarRol'><h2>Editar</h2></a><a href='?c=EditarRol'><img src='assets/img/editar-icono.png'></a></button><button class='btn-eliminar' onclick='RolEliminado()'><h2>Eliminar</h2><img src='assets/img/eliminar-icono.png'></button></td>";
    
    accion.appendChild(botonEliminar);
}

function RolEliminado(){
    alert("El Rol ha sido eliminado");
}