import React from 'react';

// Imágenes - Iconos
  // Editar Icono
  import EditIcon from "../../../../assets/img/icons/Edit.png";

  // Eliminar Icono
  import DeleteIcon from "../../../../assets/img/icons/Delete.png";

// Lista de Productos JSON
import dataSale from '../../../../json/views/Admin/salesTable.json';

class SaleItem extends React.Component {
  render() {
    return (
      <thead className="">
        {dataSale.map(item => (
          <DataSaleItem key={item.id} dataSale={item} />
        ))}
      </thead>
    );
  }
}

// Creación clase / objeto de Producto que va a componer su información
class DataSaleItem extends React.Component {
  render() {
    // Creación variables de datos de Producto
    const { id, date, total } = this.props.dataSale;
    return (
      // Fila Producto
      <tr className="tbody-sales">
        <td className="row-sale row-no-sale">{id}</td>
        <td className="row-sale row-date-sale"><a href="sales/sale/{date}">{date}</a></td>
        <td className="row-sale row-total-sale">{total} $</td>

        {/* Acciones de Productos */}
        <td className="row-sale row-actions-sale">
          <button className="btn-prod btn-sale btn-edit-sale">
            <a href="sales/sale/edit/{id}">
              <img src={EditIcon} alt="" />
              <h2>Editar</h2>
            </a>
          </button>
          <button className="btn-prod btn-sale btn-delete-sale">
            <a href="sales/sale/delete/{id}">
              <img src={DeleteIcon} alt="" />
              <h2>Eliminar</h2>
            </a>
          </button>
        </td>
      </tr>
    );
  }
}

export default SaleItem;
