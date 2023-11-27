import React from 'react';

// Imágenes - Iconos
    // Editar Icono
    import EditIcon from "../../../../assets/img/icons/Edit.png";

    // Eliminar Icono
    import DeleteIcon from "../../../../assets/img/icons/Delete.png";

// Lista de Productos JSON
import dataCustomer from '../../../../json/views/Admin/customersTable.json';

class CustomerItem extends React.Component {
    render() {
        return (
            <thead className="">
                {dataCustomer.map(item => (
                    <DataCustomerItem key={item.id} dataCustomer={item} />
                ))}
            </thead>
        );
    }
}

// Creación clase / objeto de Producto que va a componer su información
class DataCustomerItem extends React.Component {
    render() {
        // Creación variables de datos de Producto
        const { id, name, description } = this.props.dataCustomer;
        return (
            // Fila Producto
            <tr className="tbody-customers">
                <td className="row-customer row-no-customer">{id}</td>
                <td className="row-customer row-name-customer"><a href="/#/admin/customers/customer/{id}">{name}</a></td>
                <td className="row-customer row-description-customer">{description}</td>

                {/* Acciones de Productos */}
                <td className="row-customer row-actions-customer">
                    <button className="btn-prod btn-edit-customer">
                        <a href="products/product/edit/{name}">
                            <img src={EditIcon} alt="" />
                            <h2>Editar</h2>
                        </a>
                    </button>

                    <button className="btn-prod btn-delete-customer">
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

export default CustomerItem;
