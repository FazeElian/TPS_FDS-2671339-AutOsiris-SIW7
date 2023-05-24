//Seleccionar Mes
document.addEventListener("DOMContentLoaded", function() {
    // Espera a que el DOM esté completamente cargado antes de continuar
    // Agrega un evento change al elemento select con el id "opciones"
    document.getElementById("meses").addEventListener("change", function() {
        // Obtiene el valor de la opción seleccionada en el select con el id "meses"
        var opcionSeleccionada = document.getElementById("meses").value;
        // Evalúa el valor de la opción seleccionada y muestra u oculta los div correspondientes
        if (opcionSeleccionada == "Enero") {
            document.getElementById("contenido-Enero").style.display = "block";

        } else if (opcionSeleccionada == "Febrero") {
            document.getElementById("contenido-Febrero").style.display = "block";

        } else if (opcionSeleccionada == "Marzo") {
            document.getElementById("contenido-Marzo").style.display = "block";

        } else if (opcionSeleccionada == "Abril") {
            document.getElementById("contenido-Abril").style.display = "block";

        } else if (opcionSeleccionada == "Mayo") {
            document.getElementById("contenido-Mayo").style.display = "block";

        } else if (opcionSeleccionada == "Junio") {
            document.getElementById("contenido-Junio").style.display = "block";

        } else if (opcionSeleccionada == "Julio") {
            document.getElementById("contenido-Julio").style.display = "block";

        } else if (opcionSeleccionada == "Agosto") {
            document.getElementById("contenido-Agosto").style.display = "block";

        } else if (opcionSeleccionada == "Septiembre") {
            document.getElementById("contenido-Septiembre").style.display = "block";

        } else if (opcionSeleccionada == "Octubre") {
            document.getElementById("contenido-Octubre").style.display = "block";

        } else if (opcionSeleccionada == "Noviembre") {
            document.getElementById("contenido-Noviembre").style.display = "block";

        } else if (opcionSeleccionada == "Diciembre") {
            document.getElementById("contenido-Diciembre").style.display = "block";

        } else {
            document.getElementById("").style.display = "block";
        }
    });
});