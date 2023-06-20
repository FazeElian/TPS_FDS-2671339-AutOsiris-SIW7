<?php session_start();   
    require_once "models/DataBase.php";    
    class Inventarios{
        public function __construct(){}
        public function main(){
            require_once "views/admin/header.view.php";
            require_once "views/admin/modules/5. Productos/Inventarios/inventarios.view.php";
            require_once "views/admin/footer.view.php";
        }
    }
?>