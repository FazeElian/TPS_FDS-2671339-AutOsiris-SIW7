// Estilos para este componente
import "../../../../assets/css/components/Admin/SearchSection.css";

export default function SearchCustomer (){
    return(
        // Filtros de Búsqueda
        <div className="cont-search">
            <div className="order-by">
                <select name="order-by" id="order-by">
                    <option value="">Ordenar Por</option>
                    <option value="A-Z">A-Z</option>
                    <option value="Precio">Precio</option>
                </select>
            </div>

            <div className="search-bar">
                <input type="search" name="search-bar" id="search-bar" placeholder="Buscar Cliente" />
            </div>
        </div>
    )
}