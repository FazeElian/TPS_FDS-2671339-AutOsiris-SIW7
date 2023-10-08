// Alerta creación de Categoría de Productos
function categoriaCreada(){
    alert("La categoría ha sido creada");
}

// Alerta actualización de Categoría de Productos
function categoriaActualizada(){
    alert("Los cambios de categoría han sido actualizados");
}

// Alerta eliminación de Categoría de Productos
function categoriaEliminada() {
    var resultado = window.confirm("¿Estás seguro de que deseas eliminar esta categoría?");
    if (resultado) {
        // El usuario hizo clic en "Aceptar"
        alert("La categoría ha sido eliminada");
    }
}