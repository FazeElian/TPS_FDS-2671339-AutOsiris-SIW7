import React from 'react';

// Imágenes - Iconos
  // Editar Icono
  import EditIcon from "../../../../assets/img/icons/Edit.png";

  // Eliminar Icono
  import DeleteIcon from "../../../../assets/img/icons/Delete.png";


// Lista de Productos JSON
import dataProduct from '../../../../json/views/Admin/productsTable.json';

class ProductItem extends React.Component {
  render() {
    return (
      <thead className="">
        {dataProduct.map(item => (
          <DataProductItem key={item.id} dataProduct={item} />
        ))}
      </thead>
    );
  }
}

// Creación clase / objeto de Producto que va a componer su información
class DataProductItem extends React.Component {
  render() {
    // Creación variables de datos de Producto
    const { id, name, category } = this.props.dataProduct;
    return (
      // Fila Producto
      <tr className="tbody-products">
        <td className="row-product row-no-product">{id}</td>
        <td className="row-product row-name-product"><a href="products/product/{name}">{name}</a></td>
        <td className="row-product row-category-product">{category}</td>

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
    );
  }
}

export default ProductItem;
