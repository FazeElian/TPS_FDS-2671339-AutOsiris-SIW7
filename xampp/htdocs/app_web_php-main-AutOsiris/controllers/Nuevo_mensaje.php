<?php
    class Nuevo_mensaje{ #Clase
        public function __construct(){} #Funciones de clases
        public function main(){ #Funciones de clases     
            require_once "views/modules/8_messages/nuevo_mensaje/header.view.php";
            require_once "views/modules/8_messages/nuevo_mensaje/Nuevo_mensaje.view.php";
            require_once "views/modules/8_messages/nuevo_mensaje/footer.view.php";
        }
    }
?>