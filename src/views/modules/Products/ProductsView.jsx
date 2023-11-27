// Estilos para este archivo
import "../../../assets/css/views/Admin/Products/ProductsView.css";

// Componentes de componente de vista
    // Filtros de búsqueda
    import SearchSection from "./components/SearchSection.jsx"

    // Item - Fila Producto
    import ProductItem from "./components/ProductItem.jsx";

    // Paginación de Registros
    import PaginationContainer from "../../../components/Admin/PaginationContainer.jsx";

// Imágenes - Iconos
    // Añadir Icono
    import AddIcon from "../../../assets/img/icons/Add.png";

    // Categorías Icono
    import CategoriesIcon from "../../../assets/img/icons/Categories.png";

export default function ProductsView(){
    return(
        <>
            {/* Contenido de página */}
            <section className="content-page">
                {/* Titulo de ventana */}
                <div className="title-page">
                    <h1>Productos</h1>
                </div>

                {/* Componente Filtros de Búsqueda */}
                <SearchSection />

                {/* Componente Sección Productos */}
                <div className="sect-products">
                    {/* Contenedor tabla productos */}
                    <div className="cont-table-prods">
                        {/* Tabla Productos */}
                        <table className="table-products">
                            {/* Columnas - Encabezado de tabla */}
                            <tbody className="thead-products">
                                <tr className="col-product col-no-product"><td>No</td></tr>
                                <tr className="col-product col-name-product"><td>Nombre</td></tr>
                                <tr className="col-product col-category-product"><td>Categoría</td></tr>
                                <tr className="col-product col-actions-product"><td>Acciones</td></tr>
                            </tbody>

                            {/* Filas - Cuerpo/contenido de tabla */}
                            <ProductItem />
                        </table>
                    </div>

                    {/* Contenedor opciones productos */}
                    <div className="cont-ops-prods">
                        {/* Añadir Producto */}
                        <div className="cont-op-prods">
                            <a href="products">
                                <img src={AddIcon} alt="" />
                                <h2>Añadir Producto</h2>
                            </a>
                        </div>

                        {/* Categorías de Productos */}
                        <div className="cont-op-prods">
                            <a href="products">
                                <img src={CategoriesIcon} alt="" />
                                <h2>Categorías Productos</h2>
                            </a>
                        </div>
                    </div>
                </div>

                {/* Componente paginación de registros */}
                <PaginationContainer />
            </section>
        </>
    )
}