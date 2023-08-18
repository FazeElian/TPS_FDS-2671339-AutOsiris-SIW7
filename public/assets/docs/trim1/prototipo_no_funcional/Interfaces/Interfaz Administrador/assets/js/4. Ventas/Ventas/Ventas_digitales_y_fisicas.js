document.addEventListener("DOMContentLoaded", function seleccionarMes() {
    // Espera a que el DOM esté completamente cargado antes de continuar
    // Agrega un evento change al elemento select con el id "opciones"
    document.getElementById("seleccionar-mes").addEventListener("change", function() {
        // Obtiene el valor de la opción seleccionada en el select con el id "seleccionar-mes"
        var opcionSeleccionada = document.getElementById("seleccionar-mes").value;
        // Evalúa el valor de la opción seleccionada y muestra u oculta los div correspondientes
        if (opcionSeleccionada == "Enero") {
            document.getElementById("contenido-Enero").style.display = "flex";

        } else if (opcionSeleccionada == "Febrero") {
            document.getElementById("contenido-Febrero").style.display = "flex";

        } else if (opcionSeleccionada == "Marzo") {
            document.getElementById("contenido-Marzo").style.display = "flex";

        } else if (opcionSeleccionada == "Abril") {
            document.getElementById("contenido-Abril").style.display = "flex";

        } else if (opcionSeleccionada == "Mayo") {
            document.getElementById("contenido-Mayo").style.display = "flex";

        } else if (opcionSeleccionada == "Junio") {
            document.getElementById("contenido-Junio").style.display = "flex";

        } else if (opcionSeleccionada == "Julio") {
            document.getElementById("contenido-Julio").style.display = "flex";

        } else if (opcionSeleccionada == "Agosto") {
            document.getElementById("contenido-Agosto").style.display = "flex";

        } else if (opcionSeleccionada == "Septiembre") {
            document.getElementById("contenido-Septiembre").style.display = "flex";

        } else if (opcionSeleccionada == "Octubre") {
            document.getElementById("contenido-Octubre").style.display = "flex";

        } else if (opcionSeleccionada == "Noviembre") {
            document.getElementById("contenido-Noviembre").style.display = "flex";

        } else if (opcionSeleccionada == "Diciembre") {
            document.getElementById("contenido-Diciembre").style.display = "flex";

        } else if (opcionSeleccionada =="cont-bott-limpiar") {
            document.getElementById("selecciona-una-opcion").style.display = "flex";
        } 
    });
});