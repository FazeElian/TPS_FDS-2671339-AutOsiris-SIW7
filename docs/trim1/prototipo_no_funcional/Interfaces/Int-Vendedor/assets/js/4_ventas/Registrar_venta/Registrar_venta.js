//Creación Funciones para Insertar y Eliminar Filas de Tabla Facturas
    // Insertar Fila
    function insertarFila(){ //Creación de función
        let cont_edicion = document.getElementById("cont_edicion").insertRow(2); //Definimos acción insert en la tabla
        let colNombre = cont_edicion.insertCell(0); //Definimos en que posición se va a insertar cada columna
        let colFecha = cont_edicion.insertCell(1);
        let colCantidad = cont_edicion.insertCell(2);
        let colPrecioUnidad = cont_edicion.insertCell(3);
        let colPrecioTotal = cont_edicion.insertCell(4);

        //Celdas
        // colNombre.innerHTML = "Precio a calcular por el sistema";
        // colFecha.innerHTML = "Precio a calcular por el sistema";
        // colCantidad.innerHTML = "Precio a calcular por el sistema";
        // colPrecioUnidad.innerHTML = "Precio a calcular por el sistema";
        // colPrecioTotal.innerHTML = "Precio a calcular por el sistema";-

        colNombre.innerHTML = "<input class='text' placeholder='Escribe aquí' id='colNombre' style='float: left; width: 100%; height: 25px; background-color: white; border: 1px solid black; margin-bottom: 5px;'";
        colFecha.innerHTML = "<input type='date' id='colFecha' name='trip-start' value='2018-07-22' min='2023-04-07' max='3000-12-31' style='float: left; width: 100%; height: 25px; background-color: white; border: 1px solid black; margin-bottom: 5px;'>";
        colCantidad.innerHTML = "<input type='number' id='colCant' placeholder='#' style='float: left; width: 100%; height: 25px; background-color: white; border: 1px solid black; margin-bottom: 5px;'>";
        colPrecioUnidad.innerHTML = "<input class='text' placeholder='$$$$$$' id='colPrecioUnidad' style='float: left; width: 100%; height: 25px; background-color: white; border: 1px solid black; margin-bottom: 5px;'>";
        colPrecioTotal.innerHTML = "Precio a calcular por el sistema";
    }

    //Eliminar Fila
    function eliminarFila(){
        let cont_edicion = document.getElementById("cont_edicion").deleteRow(1);
    }