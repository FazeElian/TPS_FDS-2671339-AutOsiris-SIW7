import React, { useState, useEffect } from "react"

// Estilos para este archivo
import "../../../assets/css/views/Admin/Inventories/InventoriesView.css";

// Compontentes para componentes de vista
    // Paginación de Registros
    import PaginationContainer from "../../../components/Admin/PaginationContainer.jsx";

    // Botón: Registrar Nuevo Inventario
    import ButtonNewInventorie from "./components/ButtonNewInventorie";

    // JSON - Lista de Productos
    import dataInventoriesList from "../../../json/views/Admin/inventoriesTable.json";

// Imágenes - Iconos
    // Editar Icono
    import EditIcon from "../../../assets/img/icons/Edit.png";

    // Eliminar Icono
    import DeleteIcon from "../../../assets/img/icons/Delete.png";

export default function InventoriesView(){
    // Hooks de useState
    const [ inventories, setInventories] = useState([])
    const [ search, setSearch ] = useState("") // Valor inicial vacío

    // Función para traer datos de Arreglos JSON    
    const showData = async () => {
        setInventories(dataInventoriesList);
    }

    // Variables de estado de <select> para ordenar según la opción
    const [sortOrder, setSortOrder] = useState();

    // Función para ordenar productos por orden alfabético de forma descendente
    const handleAlphabeticSort = () => {
        const sortedProduct = [...dataInventoriesList].sort((a, b) => {
            if (sortOrder === "descending") {
                return b.name.localeCompare(a.name);
            } else {
                return a.name.localeCompare(b.name);
            }
        });

        setInventories(sortedProduct);
        setSortOrder(sortOrder === "descending" ? "descending" : "descending");
    };

    // Función para ordenar productos de forma descendente 
    const handleDescendentSort = () => {
        const sortedProduct = [...dataInventoriesList].sort((a,b) => {
            return b.id - a.id;
        });

        setInventories(sortedProduct);
        setSortOrder(sortOrder === "descending" ? "descending" : "descending");
    };

    // Función para ordenar productos de forma descendente 
    const handleAscendentSort = () => {
        const sortedProduct = [...dataInventoriesList].sort((a,b) => {
            return a.id - b.id;
        });

        setInventories(sortedProduct);
        setSortOrder(sortOrder === "ascending" ? "ascending" : "ascending");
    };

    // Función que se ejecutará al seleccionar una opción
    const [selectedOption, setSelectedOption] = useState("");

    const handleOptionSelect = (event) => {
        const selectedValue = event.target.value;
        setSelectedOption(selectedValue);

        // Aquí puedes llamar a la función asociada a la opción seleccionada
        if (selectedValue === "alphabetic-order") {
            // Llama a la función asociada a ordenar alfabéticamente (descendente)
            handleAlphabeticSort();
        } else if (selectedValue === "ascending") {
            // Llama a la función asociada a ordenar alfabéticamente (ascendente)
            handleAscendentSort();
        } else if (selectedValue === "descending") {
            // Llama a la función asociada a ordenar alfabéticamente (ascendente)
            handleDescendentSort();
        }
    };

    // Método de filtrado
    const results = !search
    ? inventories
    : inventories.filter(
        (dataProduct) =>
            dataProduct.name?.toLowerCase().includes(search.toLowerCase())
    );

    // Función de búsqueda
    const searcher = (e) => {
        setSearch(e.target.value);
        // console.log(e.target.value);
    }

    useEffect ( () => {
        showData()
    }, [])

    return(
        <>            
            {/* Contenido de página */}
            <section className="content-page">
                {/* Titulo de ventana */}
                <div className="title-page">
                    <h1>Inventarios</h1>
                </div>

                {/* Componente Filtros de Búsqueda */}
                <div className="cont-search">
                    <div className="order-by">
                        <select 
                            name="order-by" 
                            id="order-by" 
                            value={selectedOption} 
                            onChange={handleOptionSelect}
                            defaultValue={handleAscendentSort}
                        >
                            <option value={handleAscendentSort}>Ordenar por</option>
                            <option value="alphabetic-order">A-Z</option>
                            <option value="ascending">Ascendente (10-1)</option>
                            <option value="descending">Descendente (1-10)</option>
                        </select>
                    </div>

                    <div className="search-bar">
                        <input 
                            type="search" 
                            name="search-bar" 
                            id="search-bar" 
                            placeholder="Buscar Producto" 
                            value={search} // Valor que se actualiza todo el tiempo
                            onChange={searcher} // Evento cuando el valor del input cambia - detecta el cambio
                        />
                    </div>
                </div>

                {/* Tabla Inventarios */}
                <table className="table-inventories">
                    {/* Columnas - Encabezado de tabla */}
                    <thead className="thead-inventories">
                        <tr className="col-inventorie col-no-inventorie"><td>No</td></tr>
                        <tr className="col-inventorie col-name-inventorie"><td>Nombre</td></tr>
                        <tr className="col-inventorie col-initial-stock-inventorie"><td>Entradas</td></tr>
                        <tr className="col-inventorie col-outputs-inventorie"><td>Salidas</td></tr>
                        <tr className="col-inventorie col-stock-inventorie"><td>Stock</td></tr>
                        <tr className="col-inventorie col-actions-inventorie"><td>Acciones</td></tr>
                    </thead>

                    {/* Filas - Cuerpo/contenido de tabla */}
                    <tbody className="">
                        { results.map( (inventorie) => (
                            <tr className="tbody-inventories" key={inventorie.id}>
                                <td className="row-inventorie row-no-inventorie">{inventorie.id}</td>
                                <td className="row-inventorie row-name-inventorie">{inventorie.name}</td>
                                <td className="row-inventorie row-initial-stock-inventorie">{inventorie.initialStock}</td>
                                <td className="row-inventorie row-outputs-inventorie">{inventorie.outputs}</td>
                                <td className="row-inventorie row-stock-inventorie">{inventorie.stock}</td>

                                {/* Acciones de Productos */}
                                <td className="row-inventorie row-actions-inventorie">
                                    <button className="btn-prod btn-edit-inventorie">
                                        <a href="inventories/product/edit/{name}">
                                        <img src={EditIcon} alt="" />
                                        <h2>Editar</h2>
                                        </a>
                                    </button>
                                    <button className="btn-prod btn-delete-inventorie">
                                        <a href="inventories/product/delete/{name}">
                                        <img src={DeleteIcon} alt="" />
                                        <h2>Eliminar</h2>
                                        </a>
                                    </button>
                                </td>
                            </tr>
                        )) }
                    </tbody>
                </table>

                {/* Componente paginación de registros */}
                <PaginationContainer />

                {/* Componente botón Registrar Inventario */}
                <ButtonNewInventorie />
            </section>
        </>
    )
}