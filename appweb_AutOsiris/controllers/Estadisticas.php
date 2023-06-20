<?php session_start();   
    require_once "models/DataBase.php";    
    class Estadisticas{
        public function __construct(){}
        public function main(){
            require_once "views/admin/header.view.php";
            require_once "views/admin/modules/3. Estadisticas/estadisticas.view.php";
            require_once "views/admin/footer.view.php";
        }
    }
?>