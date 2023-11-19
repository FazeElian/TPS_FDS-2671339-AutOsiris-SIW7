import HeaderUsers from "../../../components/HeaderUsers"

export default function RegisterView(){
    return(
        <>
            <HeaderUsers />
            <section class="content">
                <form action="" method="post" class="form">
                    <div class="content-form">
                        <div class="title-form">
                            <h2>Registrarse</h2>
                        </div>
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" placeholder="Escribe tu Nombre" />
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" name="email" id="email" placeholder="Escribe tu Correo Electrónico" />
                        </div>
                        <div class="form-group">
                            <label for="email">Contraseña</label>
                            <input type="password" name="password" id="password" placeholder="Escribe tu Contraseña" />
                        </div>

                        <div class="cont-btn">
                            <button class="btn" type="submit">
                                Registrarse
                            </button>
                        </div>
                    </div>

                </form>
            </section>
        </>
    )
}