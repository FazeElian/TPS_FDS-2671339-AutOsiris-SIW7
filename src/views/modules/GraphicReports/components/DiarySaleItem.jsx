import React from 'react';

// Imágenes - Iconos
  // Editar Icono
  import EditIcon from "../../../../assets/img/icons/Edit.png";

  // Eliminar Icono
  import DeleteIcon from "../../../../assets/img/icons/Delete.png";

// Lista de Productos JSON
    import dataDiarySale from '../../../../json/views/Admin/diarySalesTable.json';

class DiarySale extends React.Component {
    render() {
        return (
        <tbody className="">
            {dataDiarySale.map(item => (
                <DataDiarySale key={item.id} dataDiarySale={item} />
            ))}
        </tbody>
    );
  }
}

// Creación clase / objeto de Producto que va a componer su información
class DataDiarySale extends React.Component {
  render() {
    // Creación variables de datos de Producto
        const { id, hour, total } = this.props.dataDiarySale;
    return (
        // Fila Producto
        <tr className='tbody-diary-sales'>
            <td className="row-diary-sale row-no-diary-sale">{id}</td>
            <td className="row-diary-sale row-hour-diary-sale">{hour}</td>
            <td className="row-diary-sale row-total-diary-sale">{total} $</td>
            {/* Acciones de Productos */}
            <td className="row-diary-sale row-actions-diary-sale">
                <button className="btn-prod btn-edit-diary-sale">
                    <a href="diary-sales/product/edit/{name}">
                    <img src={EditIcon} alt="" />
                    <h2>Editar</h2>
                    </a>
                </button>
                <button className="btn-prod btn-delete-diary-sale">
                    <a href="diary-sales/product/delete/{name}">
                    <img src={DeleteIcon} alt="" />
                    <h2>Eliminar</h2>
                    </a>
                </button>
            </td>
        </tr>
    );
  }
}

export default DiarySale;
