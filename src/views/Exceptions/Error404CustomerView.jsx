// Estilos para este archivo
import "../../assets/css/views/Exceptions/Error404CustomerView.css";

// Componentes para este componente de vista
    // Encabezado de Usuarios
    import HeaderUsers from "../../components/HeaderUsers";

// Imágenes - Iconos
    // Error 404
    import Error404Icon from "../../assets/img/icons/Error404.png";

    // Home - Página Principal
    import HomeIcon from "../../assets/img/icons/Home.png";

export default function Error404CustomerView(){
    return (
        <div>
            <HeaderUsers />
            <div className="cont-error">
                <div className="cont-img">
                    <img src={Error404Icon} alt="Error 404 Icon" />
                    <h1>404</h1>
                </div>
                <h2>Página no Encontrada</h2>

                <button className="btn-redirect-home">
                    <a href="/#/login"> {/* Hay que añadir la ruta de la página de Empresa */}
                        <img src={HomeIcon} alt="Home Icon" />
                        Ir a la Página Principal
                    </a>
                </button>
            </div>
        </div>
    )
}