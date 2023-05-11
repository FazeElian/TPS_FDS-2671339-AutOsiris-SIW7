<?php
    class Administracion_financiera{ #Clase
        public function __construct(){} #Funciones de clases
        public function main(){ #Funciones de clases     
            require_once "views/modules/3_administration/header.view.php";
            require_once "views/modules/3_administration/Admin_financiera.view.php";
            require_once "views/modules/3_administration/footer.view.php";
        }
    }
?>