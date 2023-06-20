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
    if (isset($_POST["btn-añadir"])){
        $nombreProducto = $_POST["nombreProducto"];

        $consultaSql = "INSERT INTO productos(codigoProducto, nombreProducto, descripcionProducto, imagenProducto, precioProducto, CATEGORIAS_idCategoria) 
        VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')";
        $resultado = mysqli_query($conexion, $consultaSql);

        if(!$resultado) {
            echo "Registro fallido";
        }

        header("Location: ?c=Productos");
        echo "<script>alert('El producto ha sido registrado');</script>";
    }
?>