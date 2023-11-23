import React from 'react';

// Imágenes - Iconos
  // Editar Icono
  import EditIcon from "../../../../assets/img/icons/Edit.png";

  // Eliminar Icono
  import DeleteIcon from "../../../../assets/img/icons/Delete.png";

// Lista de Productos JSON
import dataProductInventorie from '../../../../json/views/Admin/inventoriesTable.json';

class InventorieItem extends React.Component {
    render() {
        return (
        <div>
            {dataProductInventorie.map(item => (
            <DataInventorieItem key={item.id} dataProductInventorie={item} />
            ))}
        </div>
    );
  }
}

// Creación clase / objeto de Producto que va a componer su información
class DataInventorieItem extends React.Component {
  render() {
    // Creación variables de datos de Producto
    const { id, name, initialStock, outputs, stock } = this.props.dataProductInventorie;
    return (
        // Fila Producto
        <tr className="tbody-inventories">
            <td className="row-inventorie row-no-inventorie">{id}</td>
            <td className="row-inventorie row-name-inventorie">{name}</td>
            <td className="row-inventorie row-initial-stock-inventorie">{initialStock}</td>
            <td className="row-inventorie row-outputs-inventorie">{outputs}</td>
            <td className="row-inventorie row-stock-inventorie">{stock}</td>

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
    );
  }
}

export default InventorieItem;
