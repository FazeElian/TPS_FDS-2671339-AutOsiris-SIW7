<?php
    if (!isset($_REQUEST["c"])){ 
        require_once "Tu_distribuidorLanding.php";
        $controller = new Landing;
        $controller->main();
    } else {
        $controller = $_REQUEST["c"];
        require_once "Tu_distribuidorLanding.php". $controller . ".php";
        $controller = new $controller;
        $action = isset($_REQUEST["a"]) ? $_REQUEST["a"] : "main";
        call_user_func(array($controller, $action));
    }
?>