<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Hoja/s de estilos -->
    <link rel="stylesheet" href="assets/css/Admin/2. Dashboard/dashboard.css">

    <!-- Scripts -->
    <script defer src="assets/js/Admin/2. Dashboard/dashboard.js"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicons/administrador.png" type="image/x-icon">
</head>
<body>  
    <!-- Menú superior -->
    <header class="menu_sup">
        <!-- Navegación de ítems Inicio -->
        <nav class="nav-inicio">
            <!-- Icono de Menú responsive -->
            <button class="icono-menu">
                <img src="assets/img/menu-icono.png">
            </button>
            <ul class="lista_nav-inicio">
                <li class="item_nav-inicio"><a href="?c=Dashboard">Inicio</a></li>
                <li class="item_nav-inicio"><a href="?c=Estadisticas">Estadísticas</a></li>
                <li class="item_nav-inicio"><a href="?c=Ventas">Ventas</a></li>
                <li class="item_nav-inicio li-facturas"><a href="?c=Facturas">Facturas</a></li>
                <li class="item_nav-inicio"><a href="?c=Productos">Productos</a></li>
                <li class="item_nav-inicio li-inventarios"><a href="?c=Inventarios">Inventarios</a></li>
            </ul>
        </nav>
        <!-- Navegación de ítems Usuario -->
        <nav class="nav-usuario">
            <ul class="lista_nav-usuario">
                <a href="?c=MiPerfil"><li class="item_nav-usuario">Mi perfil</li></a>
                <a href="?c=Roles"><li class="item_nav-usuario">Roles</li></a>
                <a href="?c=CerrarSesion"><li class="item_nav-usuario cerrar_sesion">Cerrar sesión</li></a>
            </ul>
            <button class="icono-usuario">
                <img src="assets/img/usuario-icono.png">
            </button>
        </nav>
    </header>