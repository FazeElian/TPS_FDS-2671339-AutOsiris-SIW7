<?php
    class UserDto{
        # Atributos (Encapsulamiento)
        private $idRol;
        private $idUser;
        private $nameUser;
        private $lastNameUser;
        private $emailUser;        
        private $passUser;
        # Constructores (Sobrecarga)
        public function __construct(){
            $a = func_get_args();
			$i = func_num_args();
			if (method_exists($this, $f='__construct'.$i)) {
				call_user_func_array(array($this, $f), $a);
			}
        }
        public function __construct6($idRol,$idUser,$nameUser,$lastNameUser,$emailUser,$passUser){
            $this->idRol = $idRol;
            $this->idUser = $idUser;
            $this->nameUser = $nameUser;
            $this->lastNameUser = $lastNameUser;
            $this->emailUser = $emailUser;
            $this->passUser = $passUser;
        }
        public function __construct2($idUser,$passUser){
            $this->idUser = $idUser;
            $this->passUser = $passUser;
        }
        # Métodos set y get -> Codigo del Rol
        public function setIdRol($idRol){
            $this->idRol = $idRol;
        }
        public function getIdRol(){
            return $this->idRol;
        }
        # Métodos set y get -> Codigo del Usuario
        public function setIdUser($idUser){
            $this->idUser = $idUser;
        }
        public function getIdUser(){
            return $this->idUser;
        }
        # Métodos set y get -> Nombres del Usuario
        public function setNameUser($nameUser){
            $this->nameUser = $nameUser;
        }
        public function getNameUser(){
            return $this->nameUser;
        }
        # Métodos set y get -> Apellidos del Usuario
        public function setLastName($lastName){
            $this->lastName = $lastName;
        }
        public function getLastName(){
            return $this->lastName;
        }
        # Métodos set y get -> Correo del Usuario
        public function setEmailUser($emailUser){
            $this->emailUser = $emailUser;
        }
        public function getEmailUser(){
            return $this->emailUser;
        }
        # Métodos set y get -> Contraseña del Usuario
        public function setPassUser($passUser){
            $this->passUser = $passUser;
        }
        public function getPassUser(){
            return $this->passUser;
        }
    }
?>