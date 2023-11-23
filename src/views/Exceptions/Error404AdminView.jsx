// Estilos para este archivo
import "../../assets/css/views/Exceptions/Error404AdminView.css";

// Imágenes - Iconos
    // Error 404
    import Error404Icon from "../../assets/img/icons/Error404.png";

    // Home - Página Principal
    import HomeIcon from "../../assets/img/icons/Home.png";

export default function Error404AdminView(){
    return (
        <div className="cont-error">
            <div className="cont-img">
                <img src={Error404Icon} alt="Error 404 Icon" />
                <h1>404</h1>
            </div>
            <h2>Página no Encontrada</h2>

            <button className="btn-redirect-home">
                <a href="/#/admin/home">
                    <img src={HomeIcon} alt="Home Icon" />
                    Ir a la Página Principal
                </a>
            </button>
        </div>
    )
}