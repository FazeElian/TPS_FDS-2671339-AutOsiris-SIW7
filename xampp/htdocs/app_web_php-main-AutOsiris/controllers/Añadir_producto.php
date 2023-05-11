<?php
    class Añadir_producto{ #Clase
        public function __construct(){} #Funciones de clases
        public function main(){ #Funciones de clases     
            require_once "views/modules/2_products/añadir_producto/header.view.php";
            require_once "views/modules/2_products/añadir_producto/Añadir_producto.view.php";
            require_once "views/modules/2_products/añadir_producto/footer.view.php";
        }
    }
?>