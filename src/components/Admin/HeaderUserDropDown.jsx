// Estilos para este componente
import "../../assets/css/components/Admin/HeaderUserDropDown.css"; 

import { Link } from "react-router-dom";

const HeaderUserDropDown = () => {
    return(
        <div className="cont-user-drop-down">
            <Link to="profile"><li className="item_nav-usuario item-drop-down--user">Mi perfil</li></Link>
            <Link to="profile"><li className="item_nav-usuario item-drop-down--user item-log-out-drop-down--user">Cerrar Sesión</li></Link>
        </div>
    )
}

export { HeaderUserDropDown };