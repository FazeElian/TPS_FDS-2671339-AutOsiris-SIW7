// Estilos para este archivo
import "../../../assets/css/views/Admin/Factures/FacturesView.css";

// Componentes de componente de vista
    // Filtros de búsqueda
    import SearchFacture from "./components/SearchFacture"

    // Item - Fila Factura
    import FactureItem from "./components/FactureItem.jsx";

    // Paginación de Registros
    // import PaginationContainer from "../../../components/Admin/PaginationContainer.jsx";

// Imágenes - Iconos
    // Añadir Factura Icono
    import AddFactureIcon from "../../../assets/img/icons/AddFacture.png";
    
    // Clientes Icono
    import CustomersIcon from "../../../assets/img/icons/Customers.png";

export default function FacturesView(){
    return(
        <>
            {/* Contenido de página */}
            <section className="content-page">
                {/* Titulo de ventana */}
                <div className="title-page">
                    <h1>Facturas</h1>
                </div>

                {/* Componente Filtros de Búsqueda */}
                <SearchFacture />

            {/* Componente Sección Productos */}
            <div className="sect-factures">
                    {/* Contenedor tabla productos */}
                    <div className="cont-table-factures">
                        {/* Tabla Productos */}
                        <table className="table-factures">
                            {/* Columnas - Encabezado de tabla */}
                            <tr className="thead-factures">
                                <td className="col-facture col-no-facture">No</td>
                                <td className="col-facture col-date-facture">Fecha</td>
                                <td className="col-facture col-customer-facture">Cliente</td>
                                <td className="col-facture col-actions-facture">Acciones</td>
                            </tr>

                            {/* Filas - Cuerpo/contenido de tabla */}
                            <FactureItem />
                        </table>
                    </div>

                    {/* Contenedor opciones productos */}
                    <div className="cont-ops-factures">
                        {/* Nueva Factura */}
                        <div className="cont-op-factures">
                            <a href="factures">
                                <img src={AddFactureIcon} alt="" />
                                <h2>Nueva Factura</h2>
                            </a>
                        </div>

                        {/* Cliente */}
                        <div className="cont-op-factures">
                            <a href="factures">
                                <img src={CustomersIcon} alt="" />
                                <h2>Clientes</h2>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </>
    )
}