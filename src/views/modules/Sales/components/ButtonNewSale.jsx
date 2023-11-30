// Estilos para este tipo de Componente
import "../../../../assets/css/components/Admin/ButtonCreate.css";

// Imágenes - Iconos
    // Icono Añadir
    import AddIcon from "../../../../assets/img/icons/Add-White.png";
    
export default function ButtonNewSale(){
    return(
        <div className="cont-button-new">
            <button className="btn-new">
                <a href="create">
                    Registrar Venta
                    <img src={AddIcon} alt="Icono Añadir" /> 
                </a>
            </button>
        </div>
    )
}