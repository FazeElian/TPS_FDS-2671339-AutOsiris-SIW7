<?php session_start();   
    // Incluyendo el archivo con la conexión a la base de datos
    require_once "models/DataBase.php";    

    // Creación de controlador de vistas
    class RegistrarVenta{
        public function __construct(){}
        public function main(){
            require_once "views/admin/header.view.php";
            require_once "views/admin/modules/4. Ventas/registrar-venta.view.php";
            require_once "views/admin/footer.view.php";
        }
    }

    #CU12 - Registrar Venta
    // if (isset($_POST["btn-registrar"])){
    //     $nombreProducto = $_POST["nombreProducto"];
    //     $fechaCompra = $_POST["fechaCompra"];
    //     $cantidadProducto = $_POST["cantidadProducto"];
    //     $precioUnidadProducto = $_POST["precioUnidadProducto"];
    //     $precioTotalProducto  = $_POST["precioTotalProducto"];

    //     $consultaSql = "INSERT INTO VENTAS(nombreProducto, fechaCompra, cantidadProducto, precioUnidadProducto, precioTotalProducto) 
    //     VALUES ('$nombreProducto','$fechaCompra','$cantidadProducto','$precioUnidadProducto','$precioTotalProducto'";

    //     $resultado = mysqli_query($conexion, $consultaSql);

    //     if(!$resultado) {
    //         echo "Registro fallido";
    //     }else{
    //         header("Location: ?c=Ventas");
    //     }
    // }
?>