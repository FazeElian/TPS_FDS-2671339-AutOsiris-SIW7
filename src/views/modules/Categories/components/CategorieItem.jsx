import React from 'react';

// Imágenes - Iconos
    // Editar Icono
    import EditIcon from "../../../../assets/img/icons/Edit.png";

    // Eliminar Icono
    import DeleteIcon from "../../../../assets/img/icons/Delete.png";

// Lista de Productos JSON
import dataCategorie from '../../../../json/views/Admin/categoriesTable.json';

class CategorieItem extends React.Component {
    render() {
        return (
            <thead className="">
                {dataCategorie.map(item => (
                    <DataCategorieItem key={item.id} dataCategorie={item} />
                ))}
            </thead>
        );
    }
}

// Creación clase / objeto de Producto que va a componer su información
class DataCategorieItem extends React.Component {
    render() {
        // Creación variables de datos de Producto
        const { id, name, description } = this.props.dataCategorie;
        return (
            // Fila Producto
            <tr className="tbody-categories">
                <td className="row-categorie row-no-categorie">{id}</td>
                <td className="row-categorie row-name-categorie"><a href="/#/admin/categories/categorie/{id}">{name}</a></td>
                <td className="row-categorie row-description-categorie">{description}</td>

                {/* Acciones de Productos */}
                <td className="row-categorie row-actions-categorie">
                    <button className="btn-prod btn-edit-categorie">
                        <a href="products/product/edit/{name}">
                            <img src={EditIcon} alt="" />
                            <h2>Editar</h2>
                        </a>
                    </button>

                    <button className="btn-prod btn-delete-categorie">
                        <a href="products/product/delete/{name}">
                            <img src={DeleteIcon} alt="" />
                            <h2>Eliminar</h2>
                        </a>
                    </button>
                </td>
            </tr>
        );
    }
}

export default CategorieItem;
