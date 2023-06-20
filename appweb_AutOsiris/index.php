<?php
    require_once "models/DataBase.php"; // Incluyendo archivo conexión base de datos
    if (!isset($_REQUEST['c'])) {
        require_once "controllers/Empresa.php"; // Incluyendo controlador de vista Empresa
        $controller = new Empresa;
        $controller->main();
    } else {
        $controller = $_REQUEST['c'];
        require_once "controllers/" . $controller . ".php";
        $controller = new $controller;
        $action = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'main';
        call_user_func(array($controller, $action));
    }
?>