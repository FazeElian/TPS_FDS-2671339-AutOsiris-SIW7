import HeaderUsers from "../../../components/HeaderUsers"

export default function LoginView(){
    return(
        <>
            <HeaderUsers />
            <section className="content">
                <form action="" method="post" className="form">
                    <div className="content-form">
                        <div className="title-form">
                            <h2>Iniciar Sesión</h2>
                        </div>
                        <div className="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" name="email" id="email" placeholder="Escribe tu Correo Electrónico" />
                        </div>
                        <div className="form-group">
                            <label for="email">Contraseña</label>
                            <input type="password" name="password" id="password" placeholder="Escribe tu Contraseña" />
                            <div className="cont-reset-pass">
                                Olvidó su contraseña? <a href="restablecerContraseña">Reestablézcala dando click aquí</a>
                            </div>
                        </div>

                        <div className="cont-btn">
                            <button className="btn" type="submit">
                                Iniciar Sesión
                            </button>
                        </div>
                    </div>
                </form>
            </section>
        </>
    )
}