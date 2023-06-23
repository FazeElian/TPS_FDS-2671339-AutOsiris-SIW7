<?php
    // Archivo conexión bbdd
    require_once "models/DataBase.php";  

    class EliminarCategoria{
        public function main(){           
            if (isset($_GET["idCategoria"])){
                $idCategoria = $_GET["idCategoria"];
                $consultaSql = "DELETE FROM CATEGORIAS WHERE idCategoria = $idCategoria";
        
                $resultado = mysqli_query($conexion, $consultaSql);
        
                if(!$resultado){
                    echo "Consulta fallida";
                }
        
                header("Location: ?c=CategoriasProductos");
                echo "<script>alert('Categoría eliminada');</script>";
            }
        }       
    }
?>