// Componentes de componente de vista
    // Reportes gráficos
    import GraphicReportsView from "./modules/GraphicReports/GraphicReportsView";

export default function HomeView(){
    return (
        // <Contenido página
        <section class="content-page">
            {/* Bienvenida */}
            <div class="welcome">
                <h1>¡Bienvenido Administrador!</h1>
                <p>Aquí encontrarás las novedades con respecto a tu negocio y su administración</p>
            </div>

            {/* Importación Componente Reportes Gráficos */}
            <GraphicReportsView />
        </section>
    )
}