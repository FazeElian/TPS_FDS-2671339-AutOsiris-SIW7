<?php session_start();   
    // Archivo conexión bbdd
    require_once "models/DataBase.php";  
    
    // Creación de controlador de vistas
    class CategoriasProductos{
        public function __construct(){}
        public function main(){
            require_once "views/Admin/header.view.php";
            require_once "views/Admin/modules/5. Productos/Productos/Categorias/categorias.view.php";
            require_once "views/Admin/footer.view.php";
        }
    }

    // Añadir Categoría de productos
    if (isset($_POST["btn-añadir-categoria"])){
        $nombreCategoria = $_POST["NCategoriaNombreProducto"];
        $cantidadProductos = $_POST["NCategoriaCantidadProductos"];

        $consultaSql = "INSERT INTO CATEGORIAS(nombreCategoria, cantidadProductos) VALUES ('$nombreCategoria','$cantidadProductos')";

        $resultado = mysqli_query($conexion, $consultaSql);

        if(!$resultado) {
            die("Registro fallido");
        }

        echo "<script>alert('Categoría añadida');</script>";
    }

    // Eliminar Categoría de productos
    // if(isset($_GET["idCategoria"])){
    //     $idCategoria = $_GET["idCategoria"];
    //     $consulta = "DELETE FROM USUARIOS WHERE idCategoria = $idCategoria";
    //     $resultado = mysqli_query($conexion, $consulta);

    //     if(!$resultado){
    //         die("Consulta fallida");
    //     }

    //     header("Location: ?c=Categorias");
    //     echo "Registro Eliminado";
    // }
?>