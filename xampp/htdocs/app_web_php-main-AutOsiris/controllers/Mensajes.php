<?php
    class Mensajes{ #Clase
        public function __construct(){} #Funciones de clases
        public function main(){ #Funciones de clases     
            require_once "views/modules/8_messages/mensajes/header.view.php";
            require_once "views/modules/8_messages/mensajes/Mensajes.view.php";
            require_once "views/modules/8_messages/mensajes/footer.view.php";
        }
    }
?>