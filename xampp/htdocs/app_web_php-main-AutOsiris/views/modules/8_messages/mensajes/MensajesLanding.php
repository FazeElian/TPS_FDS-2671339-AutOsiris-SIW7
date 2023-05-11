<?php
    class Mensajes{ #Clase
        public function __construct(){} #Funciones de clases
        public function main(){ #Funciones de clases     
            require_once "header.view.php";
            require_once "Mensajes.view.php";
            require_once "footer.view.php";
        }
    }
?>