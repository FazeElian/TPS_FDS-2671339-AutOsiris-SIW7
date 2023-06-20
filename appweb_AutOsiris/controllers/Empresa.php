<?php session_start();   
    require_once "models/DataBase.php";    
    class Empresa{
        public function __construct(){}
        public function main(){
            require_once "views/Company/header.view.php";
            require_once "views/Company/1. Inicio/index.view.php";
            require_once "views/Company/footer.view.php";
        }
    }
?>