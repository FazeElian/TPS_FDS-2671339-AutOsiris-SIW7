<?php
    if (!isset($_REQUEST["p"])){ 
        require_once "Landing-index-ventas.php";
        $controller = new Landing;
        $controller->main();
    } else {
        $controller = $_REQUEST["p"];
        require_once "Landing-index-ventas.php". $controller . ".php";
        $controller = new $controller;
        $action = isset($_REQUEST["a"]) ? $_REQUEST["a"] : "main";
        call_user_func(array($controller, $action));
    }
?>  