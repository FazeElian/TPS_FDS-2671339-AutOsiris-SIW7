@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facturas | Editar</title>

    {{-- Estilos para este archivo --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Admin/modules/Factures/form-styles.css") }}">
</head>
<body>
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1 class="titulo">Editar Factura</h1>
        </div>

            <form method="POST" action="{{ route('factures.update', $facture->id) }}" role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}

                @csrf

                <!-- Contenedor de nueva factura -->
                <div class="cont-factura">
                    <!-- Contenedor información de factura -->
                    <div class="cont-info-fact">
                        <!-- Fecha -->
                        <label for="date">Fecha:</label>
                        {{ Form::date('date', $facture->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar una fecha', "id" => "fechaFactura", "name" => "date"]) }}
                        <br>

                        <!-- Cliente -->
                        <label for="customer_id">Cliente:</label>
                        {{ Form::select('customer_id', $customers, $facture->customer_id, ['class' => 'form-control' . ($errors->has('customer_id') ? ' is-invalid' : ''), "id" => "seleccionarCliente", "placeholder" => "Seleccionar cliente", "name" => "customer_id" ]) }}
                    </div>

                    <!-- Tabla lista de productos de factura -->
                    <table class="tab-productos-fact" id="listaProductos">
                        <!-- Columnas características de lista de productos -->
                        <tr class="columnas-caract">
                            <td class="item-columna nombre-prod">Nombre producto</td>
                            <td class="item-columna cantidad-prod">Cantidad</td>
                            <td class="item-columna precio-prod">Precio /u</td>
                            <td class="item-columna elim-fila">
                                <img src="{{ asset("assets/img/Admin/modules/icono-eliminar-rojo.png") }}" alt="">
                            </td>
                        </tr>

                        <!-- Mostrar productos asociados a la factura -->
                        @foreach ($selectedProducts as $product)
                            <tr class="filas-datos">
                                <td class="item-fila nombre-prod-dato">
                                    <select name='product_id[]' id="seleccionarProducto">
                                        @foreach ($allProducts as $availableProduct)
                                            <option value='{{ $availableProduct->id }}' {{ $availableProduct->id == $product->id ? 'selected' : '' }}>
                                                {{ $availableProduct->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="item-fila cantidad-prod">
                                    <input type="number" name="quantity[]" id="cantidadProd" placeholder="#" value="{{ $product->pivot->quantity }}">
                                </td>
                                <td class="item-fila precio-prod">
                                    <input type="number" name="price[]" id="precioProd" placeholder="$$$" value="{{ $product->pivot->price }}">
                                </td>
                                <td class="item-fila elim-fila-dato">
                                    <img src="{{ asset("assets/img/Admin/modules/icono-eliminar-rojo.png") }}" alt="Eliminar Producto" onclick="removeRow(this)">
                                </td>
                            </tr>
                        @endforeach
                    </table>

                    <!-- Contenedor añadir fila -->
                    <div class="cont-anadir-fila">
                        <!-- Botón -->
                        <div class="btn-anadir-fila" id="btn-anadir-fila">
                            Añadir Producto
                        </div>
                    </div>
                </div>

                <!-- Opciones Factura -->
                <div class="opciones-factura">
                    <!-- Botón: Cancelar -->
                    <button class="bott-cancelar" type="button">
                        <a href="{{ route("factures.index") }}"><h2>Cancelar</h2></a>
                    </button>
                    <button class="bott-guardar-cambios" type="submit">
                        <a href="#"><h2>Actualizar factura</h2></a>
                    </button>
                </div>
            </form>
    </section>
</body>
</html>
<script>
    document.getElementById('btn-anadir-fila').addEventListener('click', function() {
        const table = document.getElementById('listaProductos').getElementsByTagName('tbody')[0]; // Cambia el índice a 0
        const newRow = table.insertRow(table.rows.length);

        // Agregar la clase "filas-datos" al nuevo elemento <tr>
        newRow.classList.add("filas-datos");

        const productName = newRow.insertCell(0);
        const productQuantity = newRow.insertCell(1);
        const productPrice = newRow.insertCell(2);
        const deleteRowBtn = newRow.insertCell(3);

        // Obtener la lista de productos disponibles (puedes pasarla desde el controlador)
        const productList = {!! json_encode($products) !!};

        // Crear un elemento select y agregar opciones para cada producto
        const select = document.createElement('select');
        select.name = 'product_id[]';
        select.id = "seleccionarProducto";
        productName.classList.add('item-fila', 'nombre-prod-dato'); // Agregar clases CSS

        // Agregar una opción por defecto "Seleccionar producto" al inicio
        const defaultOption = document.createElement('option');
        defaultOption.value = ''; // Valor vacío
        defaultOption.text = 'Seleccionar producto';
        select.appendChild(defaultOption);

        for (const product of productList) {
            const option = document.createElement('option');
            option.value = product.id; // Asignar el valor del ID del producto
            option.text = product.name; // Mostrar el nombre del producto en la opción
            select.appendChild(option);
        }

        // Agregar el select a la celda
        productName.appendChild(select);

        // Cantidad de Producto
        productQuantity.innerHTML = '<td><input type="number" name="quantity[]" id="cantidadProd" placeholder="#"></td>';
        productQuantity.className = "item-fila cantidad-prod";

        // Precio de Producto
        productPrice.innerHTML = '<td><input type="number" name="price[]" id="precioProd" placeholder="$$$"></td>';
        productPrice.className = "item-fila precio-prod";

        // deleteRowBtn.innerHTML = '<td class="item-fila elim-fila-dato"><button type="button" onclick="removeRow(this)">Eliminar</button></td>';
        deleteRowBtn.innerHTML = '<td><img src="{{ asset("assets/img/Admin/modules/icono-eliminar-rojo.png") }}" alt="Eliminar Producto" onclick="removeRow(this)"></td>';
        deleteRowBtn.className = "item-fila elim-fila-dato";
    });

    // Función para eliminar filas
    function removeRow(button){
        // Obtén la fila actual a través del botón
        const row = button.parentElement.parentElement;
        // Elimina la fila
        row.remove();
    }

    // Agregar un evento de cambio al select generado dinámicamente
    document.addEventListener('change', function(event) {
        const target = event.target;

        // Verificar si el elemento cambiado es un select de producto
        if (target && target.tagName === 'SELECT' && target.name === 'product_id[]') {
            const selectedProductId = target.value;
            const priceField = target.parentNode.nextElementSibling.nextElementSibling.querySelector('input[name="price[]"]');

            // Buscar el producto seleccionado en la lista de productos disponibles
            const selectedProduct = {!! json_encode($products) !!}.find(product => product.id == selectedProductId);

            // Actualizar el campo de precio con el precio del producto seleccionado
            if (selectedProduct) {
                priceField.value = selectedProduct.price;
            } else {
                priceField.value = ''; // Si el producto no se encuentra, se limpia el campo de precio
            }
        }
    });
</script>
