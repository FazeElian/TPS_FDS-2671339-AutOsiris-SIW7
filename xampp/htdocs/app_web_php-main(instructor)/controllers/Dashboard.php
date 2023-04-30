<?php
    class Dashboard{
        public function __construct(){}
        public function main(){
            require_once "views/roles/admin/header.view.php";
            require_once "views/roles/admin/admin.view.php";
            require_once "views/roles/admin/footer.view.php";
        }
    }
?>