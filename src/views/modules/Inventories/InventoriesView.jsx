// Estilos para este archivo
import "../../../assets/css/views/Admin/Inventories/InventoriesView.css";

// Compontentes para componentes de vista
    // Filtros de búsqueda
    import SearchSection from "../Products/components/SearchSection"

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
                    <tr className="thead-inventories">
                        <td className="col col-no-inventories">No</td>
                        <td className="col col-name-inventories">Nombre</td>
                        <td className="col col-initial-stock-inventories">Entradas</td>
                        <td className="col col-outputs-inventories">Salidas</td>
                        <td className="col col-stock-inventories">Stock</td>
                        <td className="col col-actions-inventories">Acciones</td>
                    </tr>

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