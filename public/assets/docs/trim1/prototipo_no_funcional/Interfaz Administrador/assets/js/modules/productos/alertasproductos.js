// Alerta creación de Producto
function productoAnadido(){
    alert("El producto ha sido añadido");
}

// Alerta actualización de Producto
function productoActualizado(){
    alert("Los cambios de producto han sido actualizados");
}

// Alerta eliminación de Producto
function productoEliminado() {
    var resultado = window.confirm("¿Estás seguro de que deseas eliminar este producto?");
    if (resultado) {
        // El usuario hizo clic en "Aceptar"
        alert("El producto ha sido eliminado");
    }
}