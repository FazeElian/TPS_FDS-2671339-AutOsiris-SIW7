// Estilos para este archivo
import "../../../assets/css/views/Admin/Inventories/InventoriesView.css";

// Compontentes para componentes de vista
    // Filtros de búsqueda
    import SearchSection from "./components/SearchSection"

    // Item - Fila Inventario
    import InventorieItem from "./components/InventorieItem";

    // Paginación de Registros
    import PaginationContainer from "../../../components/Admin/PaginationContainer.jsx";

    // Botón: Registrar Nuevo Inventario
    import ButtonNewInventorie from "./components/ButtonNewInventorie";

export default function InventoriesView(){
    return(
        <>            
            {/* Contenido de página */}
            <section className="content-page">
                {/* Titulo de ventana */}
                <div className="title-page">
                    <h1>Inventarios</h1>
                </div>

                {/* Componente Filtros de Búsqueda */}
                <SearchSection />

                {/* Tabla Inventarios */}
                <table className="table-inventories">
                    {/* Columnas - Encabezado de tabla */}
                    <thead className="thead-inventories">
                        <tr className="col-inventorie col-no-inventorie"><td>No</td></tr>
                        <tr className="col-inventorie col-name-inventorie"><td>Nombre</td></tr>
                        <tr className="col-inventorie col-initial-stock-inventorie"><td>Entradas</td></tr>
                        <tr className="col-inventorie col-outputs-inventorie"><td>Salidas</td></tr>
                        <tr className="col-inventorie col-stock-inventorie"><td>Stock</td></tr>
                        <tr className="col-inventorie col-actions-inventorie"><td>Acciones</td></tr>
                    </thead>

                    {/* Filas - Cuerpo/contenido de tabla */}
                    <InventorieItem />
                </table>

                {/* Componente paginación de registros */}
                <PaginationContainer />

                {/* Componente botón Registrar Inventario */}
                <ButtonNewInventorie />
            </section>
        </>
    )
}