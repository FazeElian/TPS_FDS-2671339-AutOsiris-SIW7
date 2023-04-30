<?php
    require_once "models/model_dto/UserDto.php";
    class Login{
        public function __construct(){}
        public function main(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/admin/header.view.php";
                require_once "views/admin/login.view.php";
                require_once "views/roles/admin/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                require_once "views/roles/admin/header.view.php";
                $userDto = new UserDto(
                    $_POST["usuario"], 
                    $_POST["contraseña"]

                );

                echo "<br>Usuario : " . $userDto->getIdUser();
                echo "<br>Contraseña : " . $userDto->getPassUser();
                require_once "views/roles/admin/footer.view.php";
            }
        }
    }    
?>