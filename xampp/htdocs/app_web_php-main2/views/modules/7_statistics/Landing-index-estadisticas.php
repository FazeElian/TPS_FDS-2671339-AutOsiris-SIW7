<?php
    class Landing{ #Clase
        public function __construct(){} #Funciones de clases
        public function main(){ #Funciones de clases     
            require_once "header.view.php";
            require_once "index.estadisticas.view.php";
            require_once "footer.view.php";
        }
    }
?>