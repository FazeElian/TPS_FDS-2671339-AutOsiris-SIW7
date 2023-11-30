// Estilos para este archivo
import "../../../assets/css/views/Admin/Sales/SalesView.css";

// import { Link } from "react-router-dom";

// Componentes de componente de vista
    // Filtros de búsqueda
    import SearchSale from "./components/SearchSale.jsx"

    // Item - Fila Saleo
    import SaleItem from "./components/SaleItem.jsx";

    // Paginación de Registros
    import PaginationContainer from "../../../components/Admin/PaginationContainer.jsx";

    // Botón Registrar Venta
    import ButtonNewSale from "./components/ButtonNewSale.jsx";

export default function SalesView(){
    return(
        <>
            {/* Contenido de página */}
            <section className="content-page">
                {/* Titulo de ventana */}
                <div className="title-page">
                    <h1>Ventas</h1>
                </div>

                {/* Componente Filtros de Búsqueda */}
                <SearchSale />

                {/* Tabla Ventas */}
                <table className="table-sales">
                    {/* Columnas - Encabezado de tabla */}
                    <thead className="thead-sales">
                        <tr className="col-sale col-no-sale"><td>No</td></tr>
                        <tr className="col-sale col-date-sale"><td>Fecha</td></tr>
                        <tr className="col-sale col-total-sale"><td>Total</td></tr>
                        <tr className="col-sale col-actions-sale"><td>Acciones</td></tr>
                    </thead>

                    {/* Filas - Cuerpo/contenido de tabla */}
                    <SaleItem />
                </table>

                {/* Componente paginación de registros */}
                <PaginationContainer />

                {/* Componente botón Registrar venta */}
                <ButtonNewSale />
            </section>
        </>
    )
}