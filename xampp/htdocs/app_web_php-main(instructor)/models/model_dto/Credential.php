<?php
    class Credential{
        // Atributos (Encapsulamiento)
        # Datos del MR y DC
        private $codigoUser;
        private $passUser;
        // Constructor (Sobrecarga de Constructores)
        public function __construct(){
            $a = func_get_args();
			$i = func_num_args();
			if (method_exists($this, $f='__construct'.$i)) {
				call_user_func_array(array($this, $f), $a);
			}
        }
        public function __construct2($codigoUser, $passUser){
            $this->codigoUser = $codigoUser;
            $this->passUser = $passUser;
        }
        // Métodos de acceso a variables (Setter y Getters)
        # Método set y get para Código del Usuario
        public function setCodigoUser($codigoUser){
            $this->codigoUser = $codigoUser;
        }
        public function getCodigoUser(){
            return $this->codigoUser;
        }
        # Método set y get para Password del Usuario
        public function setPassUser($passUser){
            $this->passUser = $passUser;
        }
        public function getPassUser(){
            return $this->passUser;
        }
    }
?>