import HeaderUsers from "../../../components/HeaderUsers"

export default function LoginView(){
    return(
        <>
            <HeaderUsers />
            <section class="content">
                <form action="" method="post" class="form">
                    <div class="content-form">
                        <div class="title-form">
                            <h2>Iniciar Sesión</h2>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" name="email" id="email" placeholder="Escribe tu Correo Electrónico" />
                        </div>
                        <div class="form-group">
                            <label for="email">Contraseña</label>
                            <input type="password" name="password" id="password" placeholder="Escribe tu Contraseña" />
                            <div class="cont-reset-pass">
                                Olvidó su contraseña? <a href="restablecerContraseña">Reestablézcala dando click aquí</a>
                            </div>
                        </div>

                        <div class="cont-btn">
                            <button class="btn" type="submit">
                                Iniciar Sesión
                            </button>
                        </div>
                    </div>

                </form>
            </section>
        </>
    )
}