// Estilos para este archivo
import "../../../assets/css/views/Admin/Factures/FacturesView.css";

// Importación Link desde react-router-dom para ir a vistas enrutadas
import { Link, Routes, Route } from "react-router-dom";

// Componentes de componente de vista
    // Filtros de búsqueda
    import SearchFacture from "./components/SearchFacture"

    // Item - Fila Factura
    import FactureItem from "./components/FactureItem.jsx";

    // Paginación de Registros
    import PaginationContainer from "../../../components/Admin/PaginationContainer.jsx";

// Imágenes - Iconos
    // Añadir Factura Icono
    import AddFactureIcon from "../../../assets/img/icons/AddFacture.png";
    
    // Clientes Icono
    import CustomersIcon from "../../../assets/img/icons/Customers.png";
import CustomersView from "../Customers/CustomersView.jsx";

export default function FacturesView(){
    return(
        <>
            {/* Creación subrutas a partir de este componente */}
            <Routes>
                <Route path="customers" element={<CustomersView />} />
            </Routes>

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
                            <thead className="thead-factures">
                                <tr className="col-facture col-no-facture"><td>No</td></tr>
                                <tr className="col-facture col-date-facture"><td>Fecha</td></tr>
                                <tr className="col-facture col-customer-facture"><td>Cliente</td></tr>
                                <tr className="col-facture col-actions-facture"><td>Acciones</td></tr>
                            </thead>

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
                            <Link to="customers">
                                <img src={CustomersIcon} alt="" />
                                <h2>Clientes</h2>
                            </Link>
                        </div>
                    </div>
                </div>

                <PaginationContainer />
            </section>
        </>
    )
}