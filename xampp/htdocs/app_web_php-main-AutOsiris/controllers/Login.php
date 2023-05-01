<?php
    require_once "views/admin/header.view.php";
    require_once "views/admin/login.view.php";

    require_once "models/model_dto/UserDto.php";
    class Login{
        public function __construct(){}
        public function main(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/admin/header.view.php";
                require_once "views/admin/login.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {                
                // Capturar los datos a través de un objeto
                $userDto = new UserDto(
                    $_POST['usuario'], 
                    $_POST['contraseña'],
                );
                // Validar la entrada por contraseña
                if ($userDto->getIdUser() == "Administrador" && $userDto->getPassUser() == "12345") {                    
                    header('Location: ?c=Dashboard');
                } else {
                    require_once "views/admin/header.view.php";
                    require_once "views/admin/login.view.php";
                    echo '<script language="javascript">alert("Usuario y/o contraseña incorrectos, vuelva a intentarlo");</script>';
                }                
            }
        }
    }    
?>