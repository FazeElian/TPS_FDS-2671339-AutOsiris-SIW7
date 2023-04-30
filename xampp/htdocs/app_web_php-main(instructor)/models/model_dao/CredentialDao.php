<?php 
    class CredentialDao{
        private $dbh;
        public function __construct(){
            try {
				$this->dbh = DataBase::connection();
			} catch (Exception $e) {
				die($e->getMessage());
			}
        }
        public function loginDao($credentialDto){
            # Consulta a la base de datos
            $sql = "SELECT * FROM CREDENTIALS WHERE
				codigo_user = :codigo_user AND
				pass_user = :pass_user";
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('codigo_user', $credentialDto->getCodigoUser());
            $stmt->bindValue('pass_user', $credentialDto->getPassUser());
            $stmt->execute();
            # Crea un arreglo con el registro
            $userDb = $stmt->fetch();
            # Evalúa si existe el registro y crea un objeto.
            # Sino devuelve falso
            if ($userDb) {
                $credentialDto = new Credential(
                    $userDb['codigo_user'],
                    $userDb['pass_user']
                );
                return $credentialDto;
            } else {
                return false;
            }
        }
    }
?>
