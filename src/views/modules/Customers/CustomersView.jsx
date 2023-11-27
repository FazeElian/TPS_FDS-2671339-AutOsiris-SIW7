// Estilos para este archivo
import "../../../assets/css/views/Admin/Customers/CustomersView.css";

// Componentes de componente de vista
    // Filtros de búsqueda
    import SearchCustomer from "./components/SearchCustomer";

    // Item - Fila Cliente
    import CustomerItem from "./components/CustomerItem";

    // Paginación de Registros
    import PaginationContainer from "../../../components/Admin/PaginationContainer.jsx";

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
                    <tr className="thead-customers">
                        <td className="col-customer col-no-customer">No</td>
                        <td className="col-customer col-name-customer">Nombre</td>
                        <td className="col-customer col-description-customer">Descripción</td>
                        <td className="col-customer col-actions-customer">Acciones</td>
                    </tr>

                    {/* Filas - Cuerpo/contenido de tabla */}
                    <CustomerItem />
                </table>

                {/* Componente paginación de registros */}
                <PaginationContainer />
            </section>
        </>
    )
}