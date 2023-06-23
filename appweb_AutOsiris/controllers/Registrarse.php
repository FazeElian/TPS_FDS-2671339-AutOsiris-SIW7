<?php session_start();   
    // Incluyendo el archivo con la conexión a la base de datos
    require_once "models/DataBase.php";  
    
    // Creación de controlador de vistas
    class Registrarse{
        public function __construct(){}
        public function main(){
            require_once "views/Users/header.view.php";
            require_once "views/Users/1.2 Registrarse/registrarse.view.php";
            require_once "views/Users/footer.view.php";
        }
    }

    #CU1 - Registrarse
    if (isset($_POST["btn-registrarse"])){
        $nombrePersona = $_POST["nombrePersona"];
        $apellidoPersona = $_POST["apellidoPersona"];
        $correoElectronico = $_POST["correoElectronico"];
        $nombreUsuario = $_POST["nombreUsuario"];
        $contraseña = $_POST["contraseña"];

        $consultaSql = "INSERT INTO USUARIO(nombre, apellido, correo, telefono, contraseña) 
        VALUES ('$nombrePersona','$apellidoPersona','$correoElectronico','$nombreUsuario','$contraseña')";

        $resultado = mysqli_query($conexion, $consultaSql);

        if(!$resultado) {
            echo "Registro fallido";
        }
        header("Location: ?c=Dashboard");
    }
?>