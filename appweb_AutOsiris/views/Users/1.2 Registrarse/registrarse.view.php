<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
</head>
<body>
    <h1>Registrarse</h1>

    <!-- Formulario -->
    <form action="?c=Registrarse" method="post">
        <h2>Nombre</h2>
        <input type="text" name="nombre" id="nombre">

        <h2>Apellido</h2>
        <input type="text" name="apellido" id="apellido">

        <h2>Correo Electrónico</h2>
        <input type="email" name="correo" id="correo">

        <h2>Nombre de Usuario</h2>
        <input type="text" name="usuario" id="usuario">

        <h2>Teléfono</h2>
        <input type="number" name="telefono" id="telefono">

        <h2>Contraseña</h2>
        <input type="password" name="contraseña" id="contraseña">

        <br><br>
        <button type="submit" name="btn-registrarse">Registrarse</button>
        <br>
    </form>
</body>
</html>