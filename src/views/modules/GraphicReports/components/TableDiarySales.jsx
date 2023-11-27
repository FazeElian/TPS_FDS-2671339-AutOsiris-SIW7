// Estilos para este componente
import "../../../../assets/css/views/Admin/GraphicReports/TableDiarySales.css";

// Compontentes para componentes de vista
    // Item - Fila Inventario
    import DiarySaleItem from "./DiarySaleItem";

    // Paginación de Registros
    import PaginationContainer from "../../../../components/Admin/PaginationContainer";

export default function TableDiarySales(){
    return(
        <section className="sect-diary-sales">
            {/* Titulo de sección */}
            <div className="title-page">
                <h1>Ventas Diarias:</h1>
            </div>
            <table className="table-diary-sales">
                {/* Columnas - Encabezado de tabla */}
                <thead className="thead-diary-sales">
                    <tr className="col-diary-sale col-no-diary-sale"><td>No</td></tr>
                    <tr className="col-diary-sale col-hour-diary-sale"><td>Hora</td></tr>
                    <tr className="col-diary-sale col-total-diary-sale"><td>Total</td></tr>
                    <tr className="col-diary-sale col-actions-diary-sale"><td>Acciones</td></tr>
                </thead>

                {/* Filas - Cuerpo/contenido de tabla */}
                <DiarySaleItem />
            </table>

            {/* Componente paginación de registros */}
            <PaginationContainer />
        </section>
    )
}