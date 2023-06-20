<?php session_start();   
    // Incluyendo el archivo con la conexión a la base de datos
    require_once "models/DataBase.php";  
    
    // Creación de controlador de vistas
    class IniciarSesion{
        public function __construct(){}
        public function main(){
            require_once "views/Users/header.view.php";
            require_once "views/Users/1.1 Iniciar sesion/iniciar-sesion.view.php";
            require_once "views/Users/footer.view.php";
        }
    }
?>