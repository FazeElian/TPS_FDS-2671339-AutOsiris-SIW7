// Estilos para este componente
import "../../../assets/css/views/Admin/GraphicReports/GraphicReportsView.css";

// Componentes de gráficos estadísticos para este componente de vista
    // Tabla ventas diarias
    import TableDiarySales from "./components/TableDiarySales";

    // Gráfico circular
    import CircularGraphic from "./components/CircularGraphic";

    // Gráfico de Barras
    import BarGraphic from "./components/BarGraphic";

    // Gráfico Área Polar
    import PolarGraphic from "./components/PolarGraphic";

    // Gráfico Lineal
    import LinearGraphic from "./components/LinearGraphic";

export default function GraphicReportsView(){
    return (
        <>
            {/* Componente Tabla ventas diarias */}
            <TableDiarySales />

            {/* Titulo de sección */}
            <div className="title-page title-section-reports">
                <h1>Reportes Gráficos:</h1>
            </div>

            {/* Sección Reportes Gráficos */}
            <section className="sect-graphic-reports">
                <div className="row-graphics">
                    <div className="cont-width-62 cont-graph">
                        <h2>Productos más vendidos este mes: Enero</h2>

                        {/* Componente Gráfico Circular */}
                        <CircularGraphic />
                    </div>
                    <div className="cont-width-35 cont-graph">
                        <h2>Cantidad de ventas esta semana:</h2>

                        {/* Componente Gráfico de Barras */}
                        <BarGraphic />
                    </div>
                </div>

                <div className="row-graphics">
                    <div className="cont-width-35 cont-graph">
                        <h2>Total ventas este mes: </h2>

                        {/* Componente Gráfico de Barras */}
                        <LinearGraphic />
                    </div>

                    <div className="cont-width-62 cont-graph">
                        <h2>Cantidad ventas por categoría: </h2>

                        {/* Componente Gráfico de Barras */}
                        <PolarGraphic />
                    </div>
                </div>
            </section>
        </>
    )
}