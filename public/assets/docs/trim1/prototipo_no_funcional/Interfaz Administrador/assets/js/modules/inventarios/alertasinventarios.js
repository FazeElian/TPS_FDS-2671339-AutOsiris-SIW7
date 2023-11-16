// Alerta registro de inventario
function inventarioRegistrado(){
    alert("El inventario del producto ha sido registrado");
}

// Alerta actualización de inventario
function inventarioActualizado(){
    alert("Los cambios de inventario han sido actualizados");
}

// Alerta eliminación de inventario
function inventarioEliminado() {
    var resultado = window.confirm("¿Estás seguro de que deseas eliminar este inventario?");
    if (resultado) {
        // El usuario hizo clic en "Aceptar"
        alert("El inventario ha sido eliminado");
    }
}