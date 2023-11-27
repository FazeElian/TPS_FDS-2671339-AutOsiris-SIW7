// Estilos para este archivo
import "../../../assets/css/views/Admin/Customers/CustomersView.css";

// Componentes de componente de vista
    // Filtros de búsqueda
    import SearchCustomer from "./components/SearchCustomer";

    // Item - Fila Cliente
    import CustomerItem from "./components/CustomerItem";

    // Paginación de Registros
    import PaginationContainer from "../../../components/Admin/PaginationContainer.jsx";

    // Botón: Volver
    import TurnBackButton from "./components/TurnBackButton.jsx";

export default function CustomersView(){
    return(
        <>
            {/* Contenido de página */}
            <section className="content-page">
                {/* Titulo de ventana */}
                <div className="title-page">
                    <h1>Clientes</h1>
                </div>

                {/* Componente Filtros de Búsqueda */}
                <SearchCustomer />

                {/* Tabla Clientes */}
                <table className="table-customers">
                    {/* Columnas - Encabezado de tabla */}
                    <thead className="thead-customers">
                        <tr className="col-customer col-no-customer"><td>No</td></tr>
                        <tr className="col-customer col-name-customer"><td>Nombre</td></tr>
                        <tr className="col-customer col-description-customer"><td>Descripción</td></tr>
                        <tr className="col-customer col-actions-customer"><td>Acciones</td></tr>
                    </thead>

                    {/* Filas - Cuerpo/contenido de tabla */}
                    <CustomerItem />
                </table>

                {/* Componente paginación de registros */}
                <PaginationContainer />

                {/* Componente botón: volver */}
                <TurnBackButton />
            </section>
        </>
    )
}