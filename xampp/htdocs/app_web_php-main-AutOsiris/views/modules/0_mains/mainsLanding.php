<?php
    class Dashboard{ #Clase
        public function __construct(){} #Funciones de clases
        public function main(){ #Funciones de clases     
            require_once "header.view.php";
            require_once "index.php";
            require_once "footer.view.php";
        }
    }
?>