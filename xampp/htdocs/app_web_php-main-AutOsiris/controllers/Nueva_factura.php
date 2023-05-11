<?php
    class Nueva_factura{ #Clase
        public function __construct(){} #Funciones de clases
        public function main(){ #Funciones de clases     
            require_once "views/modules/6_factures/nueva_factura/header.view.php";
            require_once "views/modules/6_factures/nueva_factura/Nueva_factura.view.php";
            require_once "views/modules/6_factures/nueva_factura/footer.view.php";
        }
    }
?>