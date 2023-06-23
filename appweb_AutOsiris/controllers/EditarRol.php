<?php session_start();   
    require_once "models/DataBase.php";    
    class EditarRol{
        public function __construct(){}
        public function main(){
            require_once "views/admin/header.view.php";
            require_once "views/admin/modules/7. Roles/editar-rol.view.php";
            require_once "views/admin/footer.view.php";
        }
    }
?>