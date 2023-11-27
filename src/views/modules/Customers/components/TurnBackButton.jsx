// Estilos para este tipo de Componente
import "../../../../assets/css/components/Admin/ButtonTurnBack.css";

import { Link } from "react-router-dom";

// Imágenes - Iconos
    // Icono Añadir
    import TurnBackIcon from "../../../../assets/img/icons/TurnBackLeft.png";
    
export default function TurnBackButton(){
    return(
        <div className="cont-button-turn-back">
            <button className="btn-turn-back">
                <Link to="../factures">
                    <img src={TurnBackIcon} alt="Icono Añadir" /> 
                    Volver
                </Link>
            </button>
        </div>
    )
}