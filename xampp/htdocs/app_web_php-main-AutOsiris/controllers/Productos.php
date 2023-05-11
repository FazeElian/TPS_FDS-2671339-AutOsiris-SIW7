<?php
    class Productos{ #Clase
        public function __construct(){} #Funciones de clases
        public function main(){ #Funciones de clases     
            require_once "views/modules/2_products/header.view.php";
            require_once "views/modules/2_products/Productos.view.php";
            require_once "views/modules/2_products/footer.view.php";
        }
    }
?>