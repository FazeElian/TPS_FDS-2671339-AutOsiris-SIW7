<?php session_start();   
    // Incluyendo el archivo con la conexión a la base de datos
    require_once "models/DataBase.php"; 
    
    // Creación de controlador de vistas
    class AñadirProducto{
        public function __construct(){}
        public function main(){
            require_once "views/admin/header.view.php";
            require_once "views/admin/modules/5. Productos/Productos/Opciones producto/añadir-producto.view.php";
            require_once "views/admin/footer.view.php";
        }
    }

    #CU  - Añadir Producto
    if(isset($_POST["btn-añadir-producto"])){
        $imagenProducto = $_POST["seleccionar-imagen"];
        $nombreProducto = $_POST["nombreProducto"];
        $codigoProducto = $_POST["codigoProducto"];
        $categoriaProducto = $_POST["selecccionarCategoriaProducto"];
        $descripcionProducto = $_POST["descripcionProducto"];
        $precioProducto = $_POST["precioProducto"];

        $consultaSql = "INSERT INTO PRODUCTOS(codigoProducto, precioProducto, nombreProducto, descripcionProducto, imagenProducto, CATEGORIAS_idCategoria) 
        VALUES ('$codigoProducto', '$precioProducto', '$nombreProducto', '$descripcionProducto', '$imagenProducto', '1')";

        $resultado = mysqli_query($conexion, $consultaSql);

        if(!$resultado){
            die("Consulta fallida");
        }

        echo "<script>alert('El producto ha sido añadido');</script>";
    }
?>