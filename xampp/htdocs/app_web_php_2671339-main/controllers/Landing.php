<?php
    class Landing{
        public function __construct(){}
        public function main(){
            require_once "views/roles/business/header.view.php";
            require_once "views/roles/business/index.view.php";
            require_once "views/roles/business/footer.view.php";
        }
    }    
?>