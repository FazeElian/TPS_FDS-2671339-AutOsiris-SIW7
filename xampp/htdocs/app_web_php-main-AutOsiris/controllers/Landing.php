<?php
    class Landing{ #Clase
        public function __construct(){} #Funciones de clases
        public function main(){ #Funciones de clases     
            require_once "views/roles/admin/header.view.php";
            require_once "views/roles/admin/admin.view.php";
            require_once "views/roles/admin/footer.view.php";
        }
    }
?>