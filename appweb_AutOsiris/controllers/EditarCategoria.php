<?php session_start();   
    // Archivo conexión bbdd
    require_once "models/DataBase.php"; 

    // Controlador de vistas
    class EditarCategoria{
        public function __construct(){}
        public function main(){
            require_once "views/admin/header.view.php";
            require_once "views/admin/modules/5. Productos/Productos/Categorias/editar-categoria.view.php";
            require_once "views/admin/footer.view.php";
        }
    }

    // Editar Categoria
    if (isset($_GET["idCategoria"])){
        $idCategoria = $_GET["idCategoria"];
        $consulta = "SELECT * FROM CATEGORIAS WHERE idCategoria = $idCategoria";
        $resultado = mysqli_query($conexion, $consulta);

        if(mysqli_num_rows($resultado) == 1){
            $fila = mysqli_fetch_array($resultado);
            $correo = $fila["Correo"];
            $contraseña = $fila["Contraseña"];
        }
    }   

    if(isset($_GET["btn-actualizar-categoria"])){
        $idCategoria = $_GET["idCategoria"];

        $consultaSql = "";
        $resultado = mysqli_query($conexion, $consultaSql);

        header("Location: ?c=CategoriasProductos");
    }
?>