// Alerta creación de factura
function facturaCreada(){
    alert("La factura ha sido creada");
}

// Alerta actualización de factura
function facturaActualizada(){
    alert("Los cambios de factura han sido actualizados")
}

// Alerta eliminación de factura
function facturaEliminada() {
    var resultado = window.confirm("¿Estás seguro de que deseas eliminar esta factura?");
    if (resultado) {
        // El usuario hizo clic en "Aceptar"
        alert("El factura ha sido eliminada");
    }
}