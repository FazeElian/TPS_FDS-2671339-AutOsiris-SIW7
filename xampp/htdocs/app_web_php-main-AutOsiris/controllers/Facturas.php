<?php
    class Facturas{ #Clase
        public function __construct(){} #Funciones de clases
        public function main(){ #Funciones de clases     
            require_once "views/modules/6_factures/header.view.php";
            require_once "views/modules/6_factures/Facturas.view.php";
            require_once "views/modules/6_factures/footer.view.php";
        }
    }
?>