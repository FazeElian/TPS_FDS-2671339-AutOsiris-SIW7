// Estilos para este componente de vista
import "../../../assets/css/views/Admin/Profile/ProfileView.css";

export default function ProfileView() {
    return(
        <>
            {/* Contenido de página */}
            <section className="content-page">
                {/* Titulo de ventana */}
                <div className="title-page">
                    <h1>Mi Perfil</h1>
                </div>

                {/* Contenedor Perfil */}
                <div className="cont-profile">
                    {/* Items de información de perfil */}
                    <li className="item-profile-info">
                        <b>Nombre de Usuario:  </b> Administrador
                    </li>
                    <li className="item-profile-info">
                        <b>Correo Electrónico:  </b> admin@autosiris.com
                    </li>
                </div>
            </section>
        </>
    )
}