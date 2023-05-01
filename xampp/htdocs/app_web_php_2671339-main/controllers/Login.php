<?php
    require_once "models/model_dto/UserDto.php";
    class Login{
        public function __construct(){}
        public function main(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/business/header.view.php";
                require_once "views/business/login.view.php";
                require_once "views/roles/business/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {                
                // Capturar los datos a través de un objeto
                $userDto = new UserDto(
                    $_POST['user'], 
                    $_POST['pass']
                );
                // Validar la entrada por contraseña
                if ($userDto->getIdUser() == "admin" && $userDto->getPassUser() == "12345") {                    
                    header('Location: ?c=Dashboard');
                } else {
                    require_once "views/roles/business/header.view.php";
                    require_once "views/business/login.view.php";
                    echo "Usuario Incorrecto";
                    require_once "views/roles/business/footer.view.php";
                }                
            }
        }
    }    
?>