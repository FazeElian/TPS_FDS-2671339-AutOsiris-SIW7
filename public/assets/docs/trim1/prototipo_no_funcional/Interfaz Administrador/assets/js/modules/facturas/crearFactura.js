// Función para añadir filas - productos
function anadirProducto() {
    var tabla = document.getElementById("listaProductos");
    var nuevaFila = tabla.insertRow(-1);

    // Agregar clases a la fila
    nuevaFila.className = "filas-datos";

    // Agregar celdas a la fila
    var nombreProducto = nuevaFila.insertCell(0);
    nombreProducto.className = "item-fila nombre-prod-dato";

    var select = document.createElement("select");
    select.name = "nombreProducto";
    select.id = "seleccionarProducto";

    // Agregar opciones al select
    var opciones = ["Seleccionar producto", "Cuaderno Argollado Norma", "Lapicero Negro Offi-Esco", "Lapicero Rojo Offi-Esco"];
    for (var i = 0; i < opciones.length; i++) {
        var option = document.createElement("option");
        option.value = opciones[i];
        option.text = opciones[i];
        select.appendChild(option);
    }

    nombreProducto.appendChild(select);

    var cantidadProducto = nuevaFila.insertCell(1);
    cantidadProducto.className = "item-fila cantidad-prod-dato";
    var inputCantidad = document.createElement("input");
    inputCantidad.type = "number";
    inputCantidad.name = "cantidad";
    inputCantidad.id = "cantidadProd";
    inputCantidad.placeholder = "#";
    cantidadProducto.appendChild(inputCantidad);

    var precioProducto = nuevaFila.insertCell(2);
    precioProducto.className = "item-fila precio-prod-dato";
    var inputPrecio = document.createElement("input");
    inputPrecio.type = "number";
    inputPrecio.name = "precio";
    inputPrecio.id = "precioProd";
    inputPrecio.step = "50";
    inputPrecio.placeholder = "$$$";
    precioProducto.appendChild(inputPrecio);

    var eliminarProducto = nuevaFila.insertCell(3);
    eliminarProducto.innerHTML = "<td><img src='../../assets/img/icono-eliminar-rojo.png' alt=''></td>";
    eliminarProducto.className = "item-fila elim-fila-dato";
    eliminarProducto.addEventListener("click", function () {
        tabla.deleteRow(nuevaFila.rowIndex);
    });
}

// Agregar un event listener al botón para llamar a la función cuando se hace clic
var botonAgregarFila = document.getElementById("btn-anadir-fila");
botonAgregarFila.addEventListener("click", anadirProducto);
