<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
</head>
<body>
    <h1>Iniciar sesión</h1>

    <!-- Formulario -->
    <form action="?c=IniciarSesion" method="post">
        <h2>Correo Electrónico</h2>
        <input type="email" name="correoElectronico" id="correoElectronico">

        <h2>Nombre de Usuario</h2>
        <input type="text" name="nombreUsuario" id="nombreUsuario">

        <h2>Contraseña</h2>
        <input type="password" name="contraseña" id="contraseña">

        <br>
        <br>
        <button type="submit" name="btn-iniciar_sesion">Iniciar sesión</button>
        <br>
    </form>
</body>
</html>