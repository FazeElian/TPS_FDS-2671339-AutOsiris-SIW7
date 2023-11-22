// Estilos para este componente
import "../../assets/css/components/Admin/PaginationContainer.css";

// Imágenes - Iconos
    // Flecha a la izquierda
    import LeftPagination from "../../assets/img/icons/PaginationLeft.png";

    // Flecha a la derecha
    import RightPagination from "../../assets/img/icons/PaginationRight.png";

export default function PaginationContainer(){
    return(
        // Contenedor paginación de registros
        <div className="cont-pagination">
            {/* Paginación */}
            <div className="paginate">
                {/* Botones Paginación */}
                <button className="btn-pag btn-img"><a href="products"><img src={LeftPagination} alt="" /></a></button>
                <button className="btn-pag"><a href="products">1</a></button>
                <button className="btn-pag"><a href="products">2</a></button>
                <button className="btn-pag"><a href="products">...</a></button>
                <button className="btn-pag"><a href="products">7</a></button>
                <button className="btn-pag"><a href="products">8</a></button>
                <button className="btn-pag btn-img"><a href="products"><img src={RightPagination} alt="" /></a></button>
            </div>
        </div>
    )
}