<?php session_start();   
    // Archivo conexión bbdd
    require_once "models/DataBase.php";  
    
    // Creación de controlador de vistas
    class Roles{
        public function __construct(){}
        public function main(){
            require_once "views/admin/header.view.php";
            require_once "views/admin/modules/7. Roles/roles.view.php";
            require_once "views/admin/footer.view.php";
        }
    }

    // Añadir rol
    if (isset($_POST["btn-añadir-rol"])){
        $nombreRol = $_POST["nombreRol"];
        $descripcionRol = $_POST["descripcionRol"];

        $consultaSql = "INSERT INTO ROL(nombreRol, descripcion) VALUES ('$nombreRol','$descripcionRol')";
        $resultado = mysqli_query($conexion, $consultaSql);

        if(!$resultado) {
            die("Registro fallido");
        }

        echo "<script>alert('Rol añadido');</script>";
    }
?>