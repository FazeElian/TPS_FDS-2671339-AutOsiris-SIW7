<?php
    class Dashboard{
        public function __construct(){}
        public function main(){
            require_once "views/modules/0_mains/header.view.php";
            require_once "views/modules/0_mains/index.view.php";
            require_once "views/modules/0_mains/footer.view.php";
        }
    }
?>