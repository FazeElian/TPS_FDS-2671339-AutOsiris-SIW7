// Estilos para este archivo
import "../../../assets/css/views/Admin/Products/ProductsView.css";

// Estilos para búsqueda
import "../../../assets/css/components/Admin/SearchSection.css";

import { Link } from "react-router-dom";
import React, { useState, useEffect } from "react"

// Componentes de componente de vista
    // JSON - Lista de Productos
    import dataProductsList from "../../../json/views/Admin/productsTable.json";

    // Paginación de Registros
    import PaginationContainer from "../../../components/Admin/PaginationContainer.jsx";

// Imágenes - Iconos
    // Añadir Icono
    import AddIcon from "../../../assets/img/icons/Add.png";

    // Categorías Icono
    import CategoriesIcon from "../../../assets/img/icons/Categories.png";

    // Editar Icono
    import EditIcon from "../../../assets/img/icons/Edit.png";

    // Eliminar Icono
    import DeleteIcon from "../../../assets/img/icons/Delete.png";

export default function ProductsView(){
    // Hooks de useState
    const [ products, setProducts] = useState([])
    const [ search, setSearch ] = useState("") // Valor inicial vacío

    // Función para traer datos de Arreglos JSON    
    const showData = async () => {
        setProducts(dataProductsList);
    }

    // Variables de estado de <select> para ordenar según la opción
    const [sortOrder, setSortOrder] = useState();

    // Función para ordenar productos por orden alfabético de forma descendente
    const handleAlphabeticSort = () => {
        const sortedProduct = [...dataProductsList].sort((a, b) => {
            if (sortOrder === "descending") {
                return b.name.localeCompare(a.name);
            } else {
                return a.name.localeCompare(b.name);
            }
        });

        setProducts(sortedProduct);
        setSortOrder(sortOrder === "descending" ? "descending" : "descending");
    };

    // Función para ordenar productos de forma descendente 
    const handleDescendentSort = () => {
        const sortedProduct = [...dataProductsList].sort((a,b) => {
            return b.id - a.id;
        });

        setProducts(sortedProduct);
        setSortOrder(sortOrder === "descending" ? "descending" : "descending");
    };

    // Función para ordenar productos de forma descendente 
    const handleAscendentSort = () => {
        const sortedProduct = [...dataProductsList].sort((a,b) => {
            return a.id - b.id;
        });

        setProducts(sortedProduct);
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
    ? products
    : products.filter(
        (dataProduct) =>
          dataProduct.name?.toLowerCase().includes(search.toLowerCase()) ||
          dataProduct.category?.toLowerCase().includes(search.toLowerCase())
    );

    // Función de búsqueda
    const searcher = (e) => {
        setSearch(e.target.value);
        // console.log(e.target.value);
    }

    useEffect ( () => {
        showData()
    }, [])

    return (
        <>
            {/* Contenido de página */}
            <section className="content-page">
                {/* Titulo de ventana */}
                <div className="title-page">
                    <h1>Productos</h1>
                </div>

                {/* Filtros de Búsqueda */}
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
                            <option value="alphabetic-order">Orden alfábetico (A-Z)</option>
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

                {/* Componente Sección Productos */}
                <div className="sect-products">
                    {/* Contenedor tabla productos */}
                    <div className="cont-table-prods">
                        {/* Tabla Productos */}
                        <table className="table-products">
                            {/* Columnas - Encabezado de tabla */}
                            <tbody className="thead-products">
                                <tr className="col-product col-no-product"><td>No</td></tr>
                                <tr className="col-product col-name-product"><td>Nombre</td></tr>
                                <tr className="col-product col-category-product"><td>Categoría</td></tr>
                                <tr className="col-product col-actions-product"><td>Acciones</td></tr>
                            </tbody>

                            {/* Filas - Cuerpo/contenido de tabla */}
                                <tbody className="">
                                    { results.map( (product) => (
                                        <tr className="tbody-products" key={product.id}>
                                            <td className="row-product row-no-product">{product.id}</td>
                                            <td className="row-product row-name-product"><a href="products/product/{name}">{product.name}</a></td>
                                            <td className="row-product row-category-product">{product.category}</td>
                                            {/* Acciones de Productos */}
                                            <td className="row-product row-actions-product">
                                                <button className="btn-prod btn-edit-product">
                                                <a href="products/product/edit/{name}">
                                                    <img src={EditIcon} alt="" />
                                                    <h2>Editar</h2>
                                                </a>
                                                </button>
                                                <button className="btn-prod btn-delete-product">
                                                <a href="products/product/delete/{name}">
                                                    <img src={DeleteIcon} alt="" />
                                                    <h2>Eliminar</h2>
                                                </a>
                                                </button>
                                            </td>
                                        </tr>
                                    ))}
                                </tbody>
                        </table>
                    </div>

                    {/* Contenedor opciones productos */}
                    <div className="cont-ops-prods">
                        {/* Añadir Producto */}
                        <div className="cont-op-prods">
                            <a href="products">
                                <img src={AddIcon} alt="" />
                                <h2>Añadir Producto</h2>
                            </a>
                        </div>

                        {/* Categorías de Productos */}
                        <div className="cont-op-prods">
                            <Link to="categories">
                                <img src={CategoriesIcon} alt="" />
                                <h2>Categorías Productos</h2>
                            </Link>
                        </div>
                    </div>
                </div>

                {/* Componente paginación de registros */}
                <PaginationContainer />
            </section>
        </>
    )
}