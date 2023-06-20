<?php session_start();   
    require_once "models/DataBase.php";    
    class Productos{
        public function __construct(){}
        public function main(){
            require_once "views/admin/header.view.php";
            require_once "views/admin/modules/5. Productos/Productos/productos.view.php";
            require_once "views/admin/footer.view.php";
        }
    }
?>