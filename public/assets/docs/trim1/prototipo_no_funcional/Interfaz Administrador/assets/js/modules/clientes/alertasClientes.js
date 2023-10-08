// Alerta creación de cliente
function clienteCreado(){
    alert("El cliente ha sido creado");
}

// ALerta actualización de cliente
function clienteActualizado(){
    alert("Los cambios de cliente han sido actualizados");
}

// Alerta eliminación de cliente
function clienteEliminado() {
    var resultado = window.confirm("¿Estás seguro de que deseas eliminar este cliente?");
    if (resultado) {
        // El usuario hizo clic en "Aceptar"
        alert("El cliente ha sido eliminado");
    }
}