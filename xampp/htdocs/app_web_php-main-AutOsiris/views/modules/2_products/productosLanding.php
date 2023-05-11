<?php
    class Productos{ #Clase
        public function __construct(){} #Funciones de clases
        public function main(){ #Funciones de clases     
            require_once "header.view.php";
            require_once "Productos.view.php";
            require_once "footer.view.php";
        }
    }
?>