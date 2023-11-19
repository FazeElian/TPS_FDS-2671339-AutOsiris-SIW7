// Estilos para este archivo 
import "../assets/css/views/Users/HeaderUsers.css";

// Imágenes - Iconos
    // Logo AutOsiris
    import AutOsirisLogo from "../assets/img/icons/Logo S.I. AutOsiris.png";

export default function HeaderUsers(){
    return(
        <div class="header">
            <img src={AutOsirisLogo} alt="Logo AutOsiris" />
            Miscelánea y Papelería Osiris
        </div>
    )
}