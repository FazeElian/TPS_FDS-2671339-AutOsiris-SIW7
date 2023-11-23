import React from 'react';

// Imágenes - Iconos
    // PDF Icono
    import PDFIcon from "../../../../assets/img/icons/PDF.png";

    // Editar Icono
    import EditIcon from "../../../../assets/img/icons/Edit.png";

    // Eliminar Icono
    import DeleteIcon from "../../../../assets/img/icons/Delete.png";

// Lista de Productos JSON
import dataFacture from '../../../../json/views/Admin/facturesTable.json';

class ProductItem extends React.Component {
    render() {
        return (
            <div>
                {dataFacture.map(item => (
                    <DataFactureItem key={item.id} dataFacture={item} />
                ))}
            </div>
        );
    }
}

// Creación clase / objeto de Producto que va a componer su información
class DataFactureItem extends React.Component {
    render() {
        // Creación variables de datos de Producto
        const { id, date, customer } = this.props.dataFacture;
        return (
            // Fila Producto
            <tr className="tbody-factures">
                <td className="row-facture row-no-facture">{id}</td>
                <td className="row-facture row-date-facture"><a href="/#/admin/factures/facture/{id}">{date}</a></td>
                <td className="row-facture row-customer-facture">{customer}</td>

                {/* Acciones de Productos */}
                <td className="row-facture row-actions-facture">
                    <button className="btn-prod btn-pdf-facture">
                        <a href="products/product/pdf/{name}">
                            <img src={PDFIcon} alt="" />
                            <h2>PDF</h2>
                        </a>
                    </button>

                    <button className="btn-prod btn-edit-facture">
                        <a href="products/product/edit/{name}">
                            <img src={EditIcon} alt="" />
                            <h2>Editar</h2>
                        </a>
                    </button>

                    <button className="btn-prod btn-delete-facture">
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
