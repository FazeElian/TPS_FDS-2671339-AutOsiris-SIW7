<?php session_start();   
    require_once "models/DataBase.php";    
    class Ventas{
        public function __construct(){}
        public function main(){
            require_once "views/admin/header.view.php";
            require_once "views/admin/modules/4. Ventas/ventas.view.php";
            require_once "views/admin/footer.view.php";
        }
    }
?>