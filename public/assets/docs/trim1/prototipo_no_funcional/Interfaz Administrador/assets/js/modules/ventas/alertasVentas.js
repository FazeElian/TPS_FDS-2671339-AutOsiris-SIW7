// Alerta registro de venta
function ventaRegistrada(){
    alert("La venta ha sido registrada");
}

// Alerta actualización de venta
function ventaActualizada(){
    alert("Los cambios de venta han sido actualizados");
}

// Alerta eliminación de venta
function ventaEliminada() {
    var resultado = window.confirm("¿Estás seguro de que deseas eliminar esta venta?");
    if (resultado) {
        // El usuario hizo clic en "Aceptar"
        alert("La venta ha sido eliminada");
    }
}
