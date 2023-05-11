<?php
    class Ventas{ #Clase
        public function __construct(){} #Funciones de clases
        public function main(){ #Funciones de clases     
            require_once "views/modules/4_sales/header.view.php";
            require_once "views/modules/4_sales/Ventas.view.php";
            require_once "views/modules/4_sales/footer.view.php";
        }
    }
?>