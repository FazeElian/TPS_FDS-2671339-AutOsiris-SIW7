// Estilos para este archivo
import "../../../assets/css/views/Admin/Categories/CategoriesView.css";

// Componentes de componente de vista
    // Filtros de búsqueda
    import SearchCategorie from "./components/SearchCategorie";

    // Item - Fila Cliente
    import CategorieItem from "./components/CategorieItem";

    // Paginación de Registros
    import PaginationContainer from "../../../components/Admin/PaginationContainer.jsx";

    // Botón: Volver
    import TurnBackButton from "./components/TurnBackButton.jsx";

export default function CategoriesView(){
    return(
        <>
            {/* Contenido de página */}
            <section className="content-page">
                {/* Titulo de ventana */}
                <div className="title-page">
                    <h1>Categorías</h1>
                </div>

                {/* Componente Filtros de Búsqueda */}
                <SearchCategorie />

                {/* Tabla Clientes */}
                <table className="table-categories">
                    {/* Columnas - Encabezado de tabla */}
                    <thead className="thead-categories">
                        <tr className="col-categorie col-no-categorie"><td>No</td></tr>
                        <tr className="col-categorie col-name-categorie"><td>Nombre</td></tr>
                        <tr className="col-categorie col-description-categorie"><td>Descripción</td></tr>
                        <tr className="col-categorie col-actions-categorie"><td>Acciones</td></tr>
                    </thead>

                    {/* Filas - Cuerpo/contenido de tabla */}
                    <CategorieItem />
                </table>

                {/* Componente paginación de registros */}
                <PaginationContainer />

                {/* Componente botón: volver */}
                <TurnBackButton />
            </section>
        </>
    )
}