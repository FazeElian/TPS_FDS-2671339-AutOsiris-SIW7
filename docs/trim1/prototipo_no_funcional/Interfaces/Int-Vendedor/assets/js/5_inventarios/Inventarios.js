document.addEventListener("DOMContentLoaded", function() {
    // Espera a que el DOM esté completamente cargado antes de continuar
    // Agrega un evento change al elemento select con el id "opciones"
    document.getElementById("meses").addEventListener("change", function() {
        // Obtiene el valor de la opción seleccionada en el select con el id "meses"
        var opcionSeleccionada = document.getElementById("meses").value;
        // Evalúa el valor de la opción seleccionada y muestra u oculta los div correspondientes
        if (opcionSeleccionada == "Enero") {
            document.getElementById("contenido-Enero-Inv").style.display = "block";

        } else if (opcionSeleccionada == "Febrero") {
            document.getElementById("contenido-Febrero-Inv").style.display = "block";

        } else if (opcionSeleccionada == "Marzo") {
            document.getElementById("contenido-Marzo-Inv").style.display = "block";

        } else if (opcionSeleccionada == "Abril") {
            document.getElementById("contenido-Abril-Inv").style.display = "block";

        } else if (opcionSeleccionada == "Mayo") {
            document.getElementById("contenido-Mayo-Inv").style.display = "block";

        } else if (opcionSeleccionada == "Junio") {
            document.getElementById("contenido-Junio-Inv").style.display = "block";

        } else if (opcionSeleccionada == "Julio") {
            document.getElementById("contenido-Julio-Inv").style.display = "block";

        } else if (opcionSeleccionada == "Agosto") {
            document.getElementById("contenido-Agosto-Inv").style.display = "block";

        } else if (opcionSeleccionada == "Septiembre") {
            document.getElementById("contenido-Septiembre-Inv").style.display = "block";

        } else if (opcionSeleccionada == "Octubre") {
            document.getElementById("contenido-Octubre-Inv").style.display = "block";

        } else if (opcionSeleccionada == "Noviembre") {
            document.getElementById("contenido-Noviembre-Inv").style.display = "block";

        } else if (opcionSeleccionada == "Diciembre") {
            document.getElementById("contenido-Diciembre-Inv").style.display = "block";

        } else {
            document.getElementById("").style.display = "block";
        }
    });
});