<?php   
    class CerrarSesion{
        public function __construct(){}
        public function main(){
            session_destroy();            
            header('Location: ?');
        }
    }
?>