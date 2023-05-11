<?php
    class Ventas_fisicas{ #Clase
        public function __construct(){} #Funciones de clases
        public function main(){ #Funciones de clases     
            require_once "views/modules/4_sales/ventas_fisicas/header.view.php";
            require_once "views/modules/4_sales/ventas_fisicas/Vent_fisicas.view.php";
            require_once "views/modules/4_sales/ventas_fisicas/footer.view.php";
        }
    }
?>