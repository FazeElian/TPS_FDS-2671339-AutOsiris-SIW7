<?php
    class Ver_factura{ #Clase
        public function __construct(){} #Funciones de clases
        public function main(){ #Funciones de clases     
            require_once "views/modules/6_factures/ver_factura/header.view.php";
            require_once "views/modules/6_factures/ver_factura/Ver_factura.view.php";
            require_once "views/modules/6_factures/ver_factura/footer.view.php";
        }
    }
?>