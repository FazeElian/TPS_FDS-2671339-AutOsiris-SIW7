<?php session_start();   
    require_once "models/DataBase.php";    
    class Dashboard{
        public function __construct(){}
        public function main(){
            require_once "views/admin/header.view.php";
            require_once "views/admin/modules/2. Dashboard/dashboard.view.php";
            require_once "views/admin/footer.view.php";
        }
    }

    // CU1 - Registrarse
    if(isset($_POST["btn-registrarse"])){
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $usuario = $_POST["usuario"];
        $telefono = $_POST["telefono"];
        $contraseña = $_POST["contraseña"];

        $consulta = "INSERT INTO USUARIO(nombre, apellido, telefono, correo, ROL_idRol) VALUES ('$nombre','$apellido','$correo','$usuario','$telefono')";
        $resultado = mysqli_query($conexion, $consulta);

        if(!$resultado){
            die("Consulta fallida");
        }

        header("Location: ?c=Dashboard");
        echo "<script>alert('Te has registrado');</script>";
    }
?>
