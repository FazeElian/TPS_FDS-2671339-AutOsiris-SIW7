<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tu Negocio | Inventarios </title>
	<link rel="shortcut icon" href="assets/img/favicons/favicon-inventarios.png" type="image/x-icon">
    <!--Integración de Archivos a framework bootstrap : .css-->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->

    <!-- Hoja de Estilos para este archivo -->
    <link rel="stylesheet" href="assets/css/tu_negocio/Inventarios.css">
    
    <!--Hoja de Estilos principal de index.html-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <!--Scripts Personalizados o propios (Van al final de los scripts)-->
    <script src="assets/js/tu_negocio/Inventarios.js"></script>

    <script type="text/javascript">
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
	</script>
</head>