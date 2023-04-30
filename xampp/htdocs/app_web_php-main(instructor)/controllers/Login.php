<?php
    require_once "models/model_dto/Credential.php";
    require_once "models/model_dao/CredentialDao.php";     
    class Login{
        private $credentialDao;
        public function __construct(){
            $this->credentialDao = new CredentialDao;
        }
        // RF01_CU01 - Iniciar Sesión
        public function login(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/business/header.view.php";
                require_once "views/business/login.view.php";
                require_once "views/roles/business/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Captura de datos                
                $credentialDto = new Credential(
                    $_POST['user'], 
                    $_POST['pass']
                );
                $prueba = $this->credentialDao->loginDao($credentialDto);
                if ($prueba) {                    
                    header('Location: ?c=Dashboard');                    
                } else {
                    require_once "views/roles/business/header.view.php";
                    require_once "views/business/login.view.php";
                    echo "<h3>Datos Incorrectos</h3>";
                    require_once "views/roles/business/footer.view.php";
                }
            }
        }
        // RF02_CU02 - Recuperar Contraseña
        public function forgotPass(){}
    }
?>