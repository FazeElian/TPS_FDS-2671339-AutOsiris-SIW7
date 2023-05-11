<?php
    class Editar_producto{ #Clase
        public function __construct(){} #Funciones de clases
        public function main(){ #Funciones de clases     
            require_once "views/modules/2_products/editar_producto/header.view.php";
            require_once "views/modules/2_products/editar_producto/Editar_producto.view.php";
            require_once "views/modules/2_products/editar_producto/footer.view.php";
        }
    }
?>