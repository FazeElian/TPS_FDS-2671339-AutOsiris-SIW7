//Creación Funciones para Insertar y Eliminar Filas de Tabla Facturas
// Insertar Fila
function insertarFila(){ //Creación de función
    let tab_factura = document.getElementById("tab_factura").insertRow(2); //Definimos acción insert en la tabla
    let colNombre = tab_factura.insertCell(0); //Definimos en que posición se va a insertar cada columna
    let colCantidad = tab_factura.insertCell(1);
    let colPrecioUnidad = tab_factura.insertCell(2);
    let colPrecioTotal = tab_factura.insertCell(3);

    //Celdas
    colNombre.innerHTML = "<input placeholder='Escribe aquí Nombre de producto' style=' width: 100%; height: 100%; border: black; font-size: 15px; text-align: center;'>";
    colCantidad.innerHTML = "<input placeholder='#' style=' width: 100%; height: 100%; border: black; font-size: 15px; text-align: center;'>";
    colPrecioUnidad.innerHTML = "<input placeholder='$$' style='width: 100%; height: 100%; border: black; font-size: 15px; text-align: center;'>";
    colPrecioTotal.innerHTML = "Precio a calcular por el sistema";
}

//Eliminar Fila
function eliminarFila(){
    let tab_factura = document.getElementById("tab_factura").deleteRow(1);
}
