// Estilos para este componente
import "../../../../assets/css/components/Admin/SearchSection.css";

export default function SearchSection (){
    return(
        // Filtros de Búsqueda
        <div class="cont-search">
            <div class="order-by">
                <select name="order-by" id="order-by">
                    <option value="">Ordenar Por</option>
                    <option value="A-Z">A-Z</option>
                    <option value="Precio">Precio</option>
                </select>
            </div>

            <div class="search-bar">
                <input type="search" name="search-bar" id="search-bar" placeholder="Buscar Factura" />
            </div>
        </div>
    )
}