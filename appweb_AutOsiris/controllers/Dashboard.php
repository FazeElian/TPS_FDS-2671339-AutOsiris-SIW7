<?php session_start();   
    require_once "models/DataBase.php";    
    class Dashboard{
        public function __construct(){}
        public function main(){
            require_once "views/admin/header.view.php";
            require_once "views/admin/modules/2. Dashboard/dashboard.view.php";
            require_once "views/admin/footer.view.php";
        }
    }
?>