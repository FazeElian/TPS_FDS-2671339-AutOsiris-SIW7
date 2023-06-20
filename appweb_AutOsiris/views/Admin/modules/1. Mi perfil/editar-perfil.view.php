<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil | Editar Perfil</title>

    <!-- Hoja de estilos -->
    <link rel="stylesheet" href="assets/css/Admin/1. Mi perfil/mi-perfil.css">
    <link rel="stylesheet" href="assets/css/Admin/1. Mi perfil/editar-perfil.css">

    <!-- Scripts -->
    <script defer src="assets/js/Admin/1. Mi perfil/editar-perfil.js"></script>
</head>
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1>Editar perfil</h1>
        </div>

        <!-- Contenedor perfil -->
        <div class="cont-perfil">
            <!-- Info Perfil -->
            <div class="cont-info-perfil">
                <li><b>Nombre: </b></b><input type="text" name="nombrePersona" id="nombrePersona" value="Usuario"></li>
                <li><b>Apellido: </b><input type="text" name="apellidoPersona" id="apellidoPersona" value="AutOsiris"></li>
                <li><b>Correo Electrónico:</b><input type="email" name="correoElectronico" id="correoElectronico" value="usuario-AutOsiris@gmail.com" class="correo"></li>
            </div>
        </div>

        <!-- Botón: Editar Perfil -->
        <div class="editar-perfil">
            <a href="?c=EditarPerfil">
                <button class="bott-editar_perfil" onclick="PerfilActualizado()">
                    <a href="?c=MiPerfil"><h2>Actualizar Perfil</h2></a>
                </button>
            </a>
        </div>
    </section>