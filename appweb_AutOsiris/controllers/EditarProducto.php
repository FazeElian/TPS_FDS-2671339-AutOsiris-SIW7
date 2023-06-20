<?php session_start();   
    require_once "models/DataBase.php";    
    class EditarProducto{
        public function __construct(){}
        public function main(){
            require_once "views/admin/header.view.php";
            require_once "views/admin/modules/5. Productos/Productos/Opciones producto/editar-producto.view.php";
            require_once "views/admin/header.view.php";
        }
    }
?>