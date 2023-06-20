<?php session_start();   
    require_once "models/DataBase.php";    
    class NuevaFactura{
        public function __construct(){}
        public function main(){
            require_once "views/admin/header.view.php";
            require_once "views/admin/modules/6. Facturas/Nueva Factura/nueva-factura.view.php";
            require_once "views/admin/footer.view.php";
        }
    }

    #CU - Nueva Factura
    if (isset($_POST["btn-nueva_factura"])){
        $nombreFactura = $_POST["nombreFactura"];
        $fechaCreacion = $_POST["fechaCreacion"];

        $consultaSql = "INSERT INTO FACTURAS(nombreFactura, fechaCreacion) VALUES ('$nombreFactura','$fechaCreacion')";

        $resultado = mysqli_query($conexion, $consultaSql);

        if(!$resultado){
            echo "Registro fallido";
        }
        header("Locacion: ?c=Facturas");
    }
?>