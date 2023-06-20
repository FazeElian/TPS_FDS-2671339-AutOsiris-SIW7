<?php session_start();   
    require_once "models/DataBase.php";    
    class MiPerfil{
        public function __construct(){}
        public function main(){
            require_once "views/admin/header.view.php";
            require_once "views/admin/modules/1. Mi perfil/mi-perfil.view.php";
            require_once "views/admin/footer.view.php";
        }
    }
?>