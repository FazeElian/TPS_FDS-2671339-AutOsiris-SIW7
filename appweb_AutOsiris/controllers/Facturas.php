<?php session_start();   
    require_once "models/DataBase.php";    
    class Facturas{
        public function __construct(){}
        public function main(){
            require_once "views/admin/header.view.php";
            require_once "views/admin/modules/6. Facturas/facturas.view.php";
            require_once "views/admin/footer.view.php";
        }
    }
?>